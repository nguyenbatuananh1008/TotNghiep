@extends('admin::layouts.master')
@section('content')
    <style>

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: white;
            min-width: 160px;
            overflow: auto;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
            right: 0;
        }
        .dropdown-content a {
            color: #333;
            padding: 4px 16px;
            text-decoration: none;
            display: block;
        }
    </style>
    <div class="container-fluid">
        <!-- breadcrumb -->
        <div class="breadcrumb-header justify-content-between">
            <div class="my-auto">
                <div class="d-flex">
                    <h4 class="content-title mb-0 my-auto">Ticket</h4>
                    <span class="text-muted mt-1 tx-13 ml-2 mb-0">/ index</span>
                </div>
            </div>
        </div>
        <!-- breadcrumb -->
        <!-- row -->
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table mg-b-0 text-md-nowrap">
                                <thead>
                                <tr>
                                    <th scope="col" style="text-align: left">Thông tin xe</th>
                                    <th scope="col" style="text-align: left">Khách đặt vé</th>
                                    <th scope="col">Địa chỉ</th>
                                    <th scope="col" style="text-align: left">Thời gian</th>
                                    <th scope="col" style="text-align: center">Số vé</th>
                                    <th scope="col" style="text-align: center">Tổng tiền</th>
                                    <th scope="col" style="text-align: left">Trạng thái</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($transactions as $item)
                                    <tr>
                                        <td scope="row" style="text-align: left;position:relative;" data-tooltip='Click để xem chi tiết' class="css-tooltip" >
                                            <a href="">{{ $item->vehicle->v_name ?? "[N\A]" }}</a> <br>
                                            <b>Xe {{ $item->vehicle->v_number_seats ?? "[N\A]" }} chỗ</b> <br>
                                            {{ number_format($item->t_total_money,0,',','.') }}đ
                                        </td>
                                        <td style="text-align: left">
                                            <a href="">{{ $item->user->name ?? "[N\A]" }}</a> <br>
                                            <b>{{ $item->user->email ?? "[N\A]" }}</b> <br>
                                            <b>{{ $item->user->phone ?? "[N\A]" }}</b> <br>
                                            <a class="text-orange" target="_blank" title="Thông tin vé"
                                               href="{{ route('get_user.ticket.info',['id' => $item->id,'phone' => $item->t_phone]) }}">Thông tin vé</a>
                                        </td>
                                        <td style="text-align: left">{{ $item->starting->loc_name ?? '' }} - {{ $item->destination->loc_name ?? '' }}</td>
                                        <td style="text-align: left">
                                            <p>Giờ xuất phát: <b>{{ (new \Carbon\Carbon($item->t_time_start))->format('H:i')  }}</b></p>
                                            <p>Giờ đến: <b>{{ (new \Carbon\Carbon($item->t_time_stop))->format('H:i')  }}</b></p>
                                        </td>
                                        <td style="text-align: center">{{ $item->t_total_ticket }}</td>
                                        <td style="text-align: center">{{ number_format($item->t_total_money,0,',','.') }} đ</td>
                                        <td style="text-align: left;position: relative">
                                            <span  class="label label-{{ $item->getStatus($item->t_status)['class'] }}">{{ $item->getStatus($item->t_status)['name'] }}</span>
{{--                                            <a href="" class="js-show-dropdown">--}}
{{--                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>--}}
{{--                                            </a>--}}
{{--                                            <div class="dropdown-content">--}}
{{--                                                <a href="{{ route('get_guest.ticket.success', $item->id) }}">Xác nhận thanh toán</a>--}}
{{--                                                <a href="{{ route('get_guest.ticket.cancel', $item->id) }}">Huỷ bỏ</a>--}}
{{--                                            </div>--}}
                                        </td>
                                    </tr>
                                @empty
                                @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- row closed -->
    </div>
@stop
