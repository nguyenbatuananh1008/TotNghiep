<?php

namespace Modules\User\Http\Controllers;

use App\Models\Cart\Order;
use App\Models\Cart\Transaction;
use App\Traits\MessageTrait;
use Carbon\Carbon;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Log;

class UserTicketController extends Controller
{
    use MessageTrait;
    public function index(Request $request)
    {
        $transactions = Transaction::with('buses', 'vehicle', 'starting', 'destination', 'user:id,name,email,phone', 'buses_location_start', 'buses_location_stop');
        $status       = $request->status ? $request->status : Transaction::STATUS_DEFAULT;

        if($status == Transaction::STATUS_DEFAULT)
        {
            $transactions->whereDate('t_time_start','>=',Carbon::today());
            $transactions->where('t_status','<>', Transaction::STATUS_CANCEL);
        }elseif ($status == Transaction::STATUS_SUCCESS)
        {
            $transactions->where('t_status','<>', Transaction::STATUS_CANCEL);
//            $transactions->whereDate('t_time_stop','<',Carbon::today());
        }else
        {
            $transactions->where('t_status',$status);
        }

        $transactions = $transactions->where('t_user_id', get_data_user('users'))
            ->orderByDesc('id')
            ->paginate(10);

        $viewData = [
            'transactions' => $transactions,
            'status'       => $status
        ];

        return view('user::ticket.index', $viewData);
    }

    public function cancelTicket($id)
    {
        $transaction = Transaction::with('buses', 'vehicle', 'starting', 'destination', 'user:id,name,email,phone', 'buses_location_start', 'buses_location_stop')
            ->where('t_user_id', get_data_user('users'))
            ->where('id', $id)
            ->where('t_status', Transaction::STATUS_DEFAULT)
            ->first();

        if (!$transaction) abort(404);

        $viewData = [
            'item' => $transaction
        ];
        return view('user::ticket.cancel', $viewData);
    }

    public function processCancelTicket(Request $request, $id)
    {
        try{
            $transaction = Transaction::with('buses', 'vehicle', 'starting', 'destination', 'user:id,name,email,phone', 'buses_location_start', 'buses_location_stop')
                ->where('t_user_id', get_data_user('users'))
                ->where('id', $id)
                ->where('t_status', Transaction::STATUS_DEFAULT)
                ->first();

            if (!$transaction) abort(404);
            $transaction->t_status = Transaction::STATUS_CANCEL;
            $transaction->t_note_user = $request->note_cancel;
            $transaction->save();
            \DB::table('orders')->where('o_transaction_id', $id)
                ->update([
                    'o_status' => Order::STATUS_CANCEL
                ]);
            $this->showMessagesSuccess("Huỷ vé thành công");
        }catch (\Exception $exception)
        {
            Log::error("[UserTicketController:  huy ve fail]:  ". $exception->getMessage());
            $this->showMessagesError("Huỷ vé thất bại");
        }
        return  redirect()->route('get_user.ticket');
    }

    public function cancelTicketPreview(Request $request, $id)
    {
        $transaction = Transaction::with('buses', 'vehicle', 'starting', 'destination', 'user:id,name,email,phone', 'buses_location_start', 'buses_location_stop')
            ->where('id', $id)
            ->where('t_status', Transaction::STATUS_CANCEL)
            ->first();

        $viewData = [
            'item' => $transaction
        ];
        return view('user::ticket.cancel_preview', $viewData);

    }
}
