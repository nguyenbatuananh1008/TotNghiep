<?php

namespace Modules\User\Http\Controllers;

use App\Models\Cart\Order;
use App\Models\Cart\Transaction;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class UserTicketInfoController extends Controller
{
    public function infoBooking(Request $request)
    {
        $id          = $request->id;
        $phone       = $request->phone;
        $transaction = Transaction::with('buses', 'vehicle', 'starting', 'destination', 'user:id,name,email,phone', 'buses_location_start', 'buses_location_stop')
            ->where('id', $id)
            ->where('t_phone', $phone);

        if(!get_data_user('admins'))
        {
            $transaction->where('t_user_id', get_data_user('users'));
        }

        $transaction =  $transaction->first();
        if (!$transaction) return abort(404);

        $price    = Order::where('o_transaction_id', $id)->pluck('o_price')->first();
        $viewData = [
            'transaction' => $transaction,
            'price'       => $price
        ];
        return view('user::ticket.info', $viewData);
    }
}
