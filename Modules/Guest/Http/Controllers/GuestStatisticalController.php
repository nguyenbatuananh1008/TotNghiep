<?php

namespace Modules\Guest\Http\Controllers;

use App\Models\Cart\Order;
use App\Models\Cart\Transaction;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class GuestStatisticalController extends Controller
{
    public function index()
    {
        $orders = Transaction::where('t_status', Order::STATUS_SUCCESS)
            ->select(
                DB::raw('YEAR(t_time_process) as year'),
                DB::raw('MONTH(t_time_process) as month'),
                DB::raw('SUM(t_total_money) as money')
            )
            ->where('t_guest_id', get_data_user('users'))
            ->groupBy('month', 'year')
            ->orderBy('year', 'ASC')
            ->orderBy('month', 'ASC')
            ->get();

        $transactions = Transaction::where('t_status', Order::STATUS_SUCCESS)
            ->where('t_guest_id', get_data_user('users'))
            ->orderByDesc('id')
            ->paginate(20);

        $viewData = [
            'orders'       => $orders,
            'transactions' => $transactions
        ];

        return view('guest::statistical.index', $viewData);
    }
}
