@extends('layouts.app_user')
@section('css')
    <style>
        .sg ins {
            margin: auto;
        }
        <?php $style = file_get_contents('assets/css/user.min.css');echo $style;?>
    </style>
@stop
@section('content-fluid')
    <section class="breadcrumb" style="padding: 0">
        <div class="container breadcrumb-content">
            <ul>
                <li><a href="/" title="">Trang chủ <i class="fa fa-angle-right"></i></a></li>
                <li><span>Danh sách vé </span></li>
            </ul>
        </div>
    </section>
    <style>

    </style>
    <section>
        <div class="container">
            <div class="users">
                <div class="users-sidebars">
                    @include('guest::components._inc_guest_sidebar')
                </div>
                <div class="users-content">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th scope="col" style="text-align: left">Thông tin xe</th>
                                <th scope="col" style="text-align: left">Khách đặt vé</th>
                                <th scope="col" style="text-align: left">Điểm đón / Trả</th>
                                <th scope="col" style="text-align: left">Ngày đi</th>
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
{{--                                        <a class="text-orange" target="_blank" title="Thông tin vé"--}}
{{--                                           href="{{ route('get_user.ticket.info',['id' => $item->id,'phone' => $item->t_phone]) }}">Thông tin vé</a>--}}
                                        @if(isset($item->orders) && !$item->orders->isEmpty())
                                            Số ghế :
                                            @foreach($item->orders as $order)
                                                <span><b>{{ $order->o_position }}</b></span>,
                                            @endforeach
                                        @endif
                                    </td>

                                    <td style="text-align: left">
                                        <p>Điểm đón:
                                            <b>{{ (new \Carbon\Carbon($item->buses_location_start->bl_time ?? ''))->format('H:i')  }}</b>
                                            <i>{{ getLocation($item->buses_location_start->bl_location_id ?? "[N\A]","loc_name") }}</i>
                                        </p>
                                        <p>Điểm đón:
                                            <b>{{ (new \Carbon\Carbon($item->buses_location_stop->bl_time ?? ''))->format('H:i')  }}</b>
                                            <i>{{ getLocation($item->buses_location_stop->bl_location_id ?? "[N\A]","loc_name") }}</i>
                                        </p>
                                    </td>
                                    <td>{{ $item->t_date_success }}</td>
                                    <td style="text-align: left;position: relative">
                                        <span  class="label label-{{ $item->getStatus($item->o_status)['class'] }}">{{ $item->getStatus($item->o_status)['name'] }}</span>
                                        <a href="" class="js-show-dropdown">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                        </a>
                                        <div class="dropdown-content">
                                            <a href="{{ route('get_guest.ticket.success', $item->id) }}">Xác nhận thanh toán</a>
                                            <a href="{{ route('get_guest.ticket.cancel', $item->id) }}">Huỷ bỏ</a>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="td-empty">Dữ liệu chưa được cập nhật</td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                        {{ $transactions->links('vendor/pagination/default') }}
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop