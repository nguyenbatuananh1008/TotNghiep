<?php

namespace Modules\Guest\Http\Controllers;

use App\Models\Cart\Order;
use App\Models\Cart\Transaction;
use App\Models\Configuration;
use App\Models\System\PayHistory;
use App\Models\User;
use App\Traits\MessageTrait;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Log;

class GuestTicketController extends Controller
{
    use MessageTrait;

    public function index(Request $request)
    {
        $transactions = Transaction::with('orders:id,o_position,o_transaction_id','buses', 'vehicle', 'starting', 'destination', 'user:id,name,email,phone', 'buses_location_start', 'buses_location_stop')
            ->where('t_guest_id', get_data_user('users'))
            ->orderByDesc('id')
            ->paginate(10);

        $viewData = [
            'transactions' => $transactions,
        ];

        return view('guest::ticket.index', $viewData);
    }

    public function ticketHome(Request $request)
    {
        $status = $request->status ? $request->status : 1 ;
        $transactions = Transaction::with('orders:id,o_position,o_transaction_id','buses', 'vehicle', 'starting', 'destination', 'user:id,name,email,phone', 'buses_location_start', 'buses_location_stop')
            ->where('t_guest_id', get_data_user('users'))
            ->where('t_pick_home',1)
            ->where('t_status_pick_home', $status)
            ->orderByDesc('id')
            ->paginate(10);

        $viewData = [
            'transactions' => $transactions,
            'status' => $status
        ];

        return view('guest::ticket.index_pick_home', $viewData);
    }

    public function processTicketHomeCancel(Request $request, $id)
    {
        try{
            $transaction = Transaction::with('buses', 'vehicle', 'starting', 'destination', 'user:id,name,email,phone', 'buses_location_start', 'buses_location_stop')
                ->where('t_guest_id', get_data_user('users'))
                ->where('t_pick_home',1)
                ->where('t_status_pick_home', 1)
                ->find($id);
            $transaction->t_status_pick_home = Transaction::TYPE_PICK_CANCEL;
            $transaction->t_status_status = Transaction::STATUS_CANCEL;
            $transaction->save();
            Order::where('o_transaction_id', $id)
                ->update([
                    'o_status' => Order::STATUS_CANCEL
                ]);
            $this->showMessagesSuccess("Cập nhật thành công");
        }catch (\Exception $exception)
        {
            $this->showMessagesError("Xử lý thất bại");
            Log::error("processTicketHomeCancel" .$exception->getMessage());
        }
        return redirect()->back();
    }

    public function processTicketHomeSuccess(Request $request, $id)
    {
        try{
            $transaction = Transaction::with('buses', 'vehicle', 'starting', 'destination', 'user:id,name,email,phone', 'buses_location_start', 'buses_location_stop')
                ->where('t_guest_id', get_data_user('users'))
                ->where('t_pick_home',1)
                ->where('t_status_pick_home', 1)
                ->find($id);
            $transaction->t_status_pick_home = Transaction::TYPE_PICK_SUCCESS;
            $transaction->save();
            $this->showMessagesSuccess("Cập nhật thành công");
        }catch (\Exception $exception)
        {
            $this->showMessagesError("Xử lý thất bại");
            Log::error("processTicketHomeCancel" .$exception->getMessage());
        }
        return redirect()->back();
    }

    public function processTicketHomeSuccessCar(Request $request, $id)
    {
        try{
            $transaction = Transaction::with('buses', 'vehicle', 'starting', 'destination', 'user:id,name,email,phone', 'buses_location_start', 'buses_location_stop')
                ->where('t_guest_id', get_data_user('users'))
                ->where('t_pick_home',1)
                ->where('t_status_pick_home', 1)
                ->find($id);
            $transaction->t_status_pick_home = Transaction::TYPE_PICK_SUCCESS_CAR;
            $transaction->t_time_process = Carbon::now();
            $transaction->save();
            Order::where('o_transaction_id', $id)
                ->update([
                    'o_status' => Order::STATUS_SUCCESS
                ]);
            $this->showMessagesSuccess("Cập nhật thành công");
        }catch (\Exception $exception)
        {
            $this->showMessagesError("Xử lý thất bại");
            Log::error("processTicketHomeCancel" .$exception->getMessage());
        }
        return redirect()->back();
    }

    public function success($id)
    {
        $transaction = Transaction::with('buses', 'vehicle', 'starting', 'destination')
            ->where('t_guest_id', get_data_user('users'))
            ->find($id);
        if (!$transaction) return abort(404);

        if ($transaction->t_status == Transaction::STATUS_CANCEL) {
            $this->showMessagesError("Xin lỗi: Vé này đã bị huỷ");
        } elseif ($transaction->t_status == Transaction::STATUS_DEFAULT) {
            $transaction->t_status       = Transaction::STATUS_SUCCESS;
            $transaction->t_time_process = Carbon::now();
            $transaction->save();
            Order::where('o_transaction_id', $id)
                ->update([
                    'o_status' => Order::STATUS_SUCCESS
                ]);
            $this->showMessagesSuccess("Xác nhận thanh toán thành công");

            // Xử lý cộngt điểm cho người giới thiệu khi mua vé lần đầu
            $user = User::find($transaction->t_user_id);
            if ($user) {
                if ($user->presenter_id && $user->is_ticket == 0) {
                    $friend = User::find($user->presenter_id);

                    $html          = "Tài khoản được cộng thêm 20 điểm từ việc người giới thiệu mua vé lần đầu";
                    $friend->point += 20;
                    $friend->save();

                    PayHistory::insert([
                        'ph_user_id'     => $friend->id,
                        'ph_credit'      => 20,
                        'ph_balance'     => $friend->point,
                        'ph_status'      => 1,
                        'ph_type'        => PayHistory::TYPE_TICKET_AFFILIATE,
                        'ph_month'       => date('m'),
                        'ph_meta_detail' => $html,
                        'ph_year'        => date('Y'),
                        'created_at'     => Carbon::now()
                    ]);
                }

                $user->is_ticket = 1;
                $user->save();
            }

            // xử lý cộng điểm cho mỗi chuyến đi success
            $this->addPointTicketSuccess($user);
        }

        return redirect()->back();
    }

    protected function addPointTicketSuccess($user)
    {
        $configuration = Configuration::first();
        $point         = $configuration->point_ticket_done ?? 0;
        $html          = "Tài khoản được cộng thêm " . $point . " điểm từ việc hoàn thành chuyến đi";
        $user->point   += $point;
        $user->save();

        PayHistory::insert([
            'ph_user_id'     => $user->id,
            'ph_credit'      => $point,
            'ph_balance'     => $user->point,
            'ph_status'      => 1,
            'ph_type'        => PayHistory::TYPE_TICKET_SUCCESS,
            'ph_month'       => date('m'),
            'ph_meta_detail' => $html,
            'ph_year'        => date('Y'),
            'created_at'     => Carbon::now()
        ]);
    }

    public function cancel($id)
    {
        $transaction = Transaction::with('buses', 'vehicle', 'starting', 'destination')
            ->where('t_guest_id', get_data_user('users'))
            ->find($id);

        if (!$transaction) return abort(404);

        if ($transaction->t_status == Transaction::STATUS_CANCEL) {
            $this->showMessagesError("Xin lỗi: Vé này đã bị huỷ");
        } elseif ($transaction->t_status == Transaction::STATUS_DEFAULT) {
            $transaction->t_status       = Transaction::STATUS_CANCEL;
            $transaction->t_time_process = Carbon::now();
            $transaction->save();
            $this->showMessagesSuccess("Huỷ vé thành công");
            Order::where('o_transaction_id', $id)
                ->update([
                    'o_status' => Order::STATUS_CANCEL
                ]);
        }

        return redirect()->back();
    }
}
