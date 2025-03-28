<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookTicketRequest;
use App\Jobs\BookTicketJob;
use App\Mail\BookTicketMail;
use App\Models\Car\BusesLocation;
use App\Models\Cart\Order;
use App\Models\Cart\Transaction;
use App\Models\Route;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Modules\Guest\Entities\Buses;
use Modules\Guest\Entities\Vehicle;

class BookTicketController extends Controller
{
    protected $userID = 0;

    function __construct()
    {
        $this->userID = get_data_user('users') ? get_data_user('users') : 0;
    }

    public function ticket($id, Request $request)
    {
        // chuyến xe
        $buses = Buses::with('vehicle', 'starting', 'destination')->find($id);
        if (!$buses) return abort(404);
        // lấy xe của chuyến đó
        $vehicle = Vehicle::find($buses->b_vehicle_id);
        $guest   = User::find($buses->b_guest_id);

        // lấy các vé đã mua
        $tickers = Order::where('o_action_id', $id)
                ->where('o_status', '<>', Order::STATUS_CANCEL)
                ->whereDate('created_at', Carbon::today()->toDateString())
                ->pluck('o_position')->toArray() ?? [];

        if ($request->ajax()) {
            $date = $request->date;

            $tickers = Order::where('o_action_id', $id)
                    ->where('o_status', '<>', Order::STATUS_CANCEL)
                    ->whereDate('o_date_success', Carbon::create($date)->toDateString())
                    ->pluck('o_position')->toArray() ?? [];
            $html    = view('pages.ticket.include._inc_ticket', ['buses' => $buses, 'tickers' => $tickers])->render();
            return response()->json($html);
        }

        $user   = User::find(get_data_user('users'));
        $routes = Route::orderByDesc('id')
            ->limit(8)->get();
        $guests = User::limit(8)->get();

        // lấy địa chỉ và time đi
        $mapsStart = BusesLocation::with('location')
            ->where([
                'bl_buses_id' => $id,
                'bl_type'     => BusesLocation::TYPE_STARTING
            ])->get();

        $mapsStop = BusesLocation::with('location')
            ->where([
                'bl_buses_id' => $id,
                'bl_type'     => BusesLocation::TYPE_DESTINATION
            ])->get();

        $viewData = [
            'buses'     => $buses,
            'guest'     => $guest,
            'mapsStart' => $mapsStart,
            'mapsStop'  => $mapsStop,
            'guests'    => $guests,
            'vehicle'   => $vehicle,
            'routes'    => $routes,
            'user'      => $user,
            'id'        => $id,
            'tickers'   => $tickers
        ];

        return view('pages.ticket.index', $viewData);
    }

    public function process(BookTicketRequest $request, $id)
    {
        $buses = Buses::with('vehicle', 'starting', 'destination')->find($id);
        if (!$buses) return abort(404);

        // lấy xe của chuyến đó
        $vehicle = Vehicle::find($buses->b_vehicle_id);

        $date       = $request->date;
        $dt         = Carbon::now('Asia/Ho_Chi_Minh');
        $time_start = $dt->create($buses->b_time_start);
        $time_stop  = $dt->create($buses->b_time_stop);

        $dateProcess      = $dt->create($date);
        $timeProcessStart = $dt->create($dateProcess->format('Y'),
            $dateProcess->format('m'),
            $dateProcess->format('d'),
            $time_start->format('H'),
            $time_start->format('i'),
            $time_start->format('s'));
        $timeProcessStop  = $dt->create($dateProcess->format('Y'),
            $dateProcess->format('m'),
            $dateProcess->format('d'),
            $time_stop->format('H'),
            $time_stop->format('i'),
            $time_stop->format('s'));

        $money                               = $buses->b_price;
        $transaction                         = new Transaction();
        if($vehicle->v_action == Vehicle::TYPE_CAR_BAO)
        {
            $transaction->t_total_money = $money;
        }else{
            $transaction->t_total_money          = $money * count($request->tickets ?? []);
        }

        $transaction->t_phone                = $request->phone;
        $transaction->t_guest_id             = $buses->b_guest_id;
        $transaction->t_name                 = $request->name;
        $transaction->t_email                = $request->email;
        $transaction->t_address              = $request->address;
        $transaction->t_user_id              = get_data_user('users') ? get_data_user('users') : 0;
        $transaction->t_date_success         = $date;
        $transaction->t_destination_id       = $buses->b_destination_id;
        $transaction->t_starting_point_id    = $buses->b_starting_point_id;
        $transaction->t_vehicle_id           = $buses->b_vehicle_id;
        $transaction->t_busts_id             = $buses->id;
        $transaction->t_total_ticket         = count($request->tickets ?? []);
        $transaction->t_time_start           = $timeProcessStart;
        $transaction->t_time_stop            = $timeProcessStop;
        $transaction->t_buses_location_start = $request->location_start;
        $transaction->t_buses_location_stop  = $request->location_stop;
        $transaction->created_at             = Carbon::now();
        if ($request->address_current == 1) {
            $transaction->t_pick_home         = 1;
            $transaction->t_address_pick_home = $request->address_pick_home;
        }
        $transaction->save();

        if ($transaction->id) {
            $this->syncOrder($transaction, $buses, $request->tickets, $date, $request);
        }
        //\Mail::to($transaction->t_email)->send(new BookTicketMail($transaction));
        return redirect()->route('get.ticket.success_preview', $transaction->id);
    }

    protected function syncOrder($transaction, $buses, $tickets, $date, $request)
    {
        if ($tickets) {
            foreach ($tickets as $item) {
                $order                         = new Order();
                $order->o_user_id              = $transaction->t_user_id; // vé này của user nào mua
                $order->o_transaction_id       = $transaction->id; // đơn hàng
                $order->o_price                = $buses->b_price; // giá tiền
                $order->o_action_id            = $buses->id; // tuyến đi
                $order->o_guest_id             = $buses->b_guest_id; //vé này của nhà xe nào
                $order->o_position             = $item;
                $order->o_date_success         = $date;
                $order->o_destination_id       = $buses->b_destination_id;
                $order->o_starting_point_id    = $buses->b_starting_point_id;
                $order->o_vehicle_id           = $buses->b_vehicle_id;
                $order->o_time_start           = $buses->b_time_start;
                $order->o_time_stop            = $buses->b_time_stop;
                $order->o_buses_location_start = $request->location_start;
                $order->o_buses_location_stop  = $request->location_stop;
                $order->created_at             = Carbon::now();
                $order->save();
            }
        }
    }

    public function preview($id)
    {
        $orders = Order::with('buses', 'vehicle', 'starting', 'destination')
            ->where('o_transaction_id', $id)
            ->orderByDesc('id')
            ->get();

        $viewData = [
            'orders' => $orders
        ];
        return view('pages.ticket.preview', $viewData);
    }
}
