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
                <li><a href="/" title="Conha.vn">Trang chủ <i class="fa fa-angle-right"></i></a></li>
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
                    <h4 class="heading-h4">Doanh thu</h4>
                    <ul class="alias-dashboard">
                        @foreach($orders as $item)
                            <li>
                                <span>Tháng <b>{{ $item->month }}</b> Năm <b>{{ $item->year }} : </b></span>
                                <span><b>{{ number_format($item->money,0,',','.') }}</b> <sup>đ</sup></span>
                            </li>
                        @endforeach
                    </ul>
                    <table class="table table-striped mt20">
                        <thead>
                        <tr>
                            <th scope="col" style="text-align: left;width: 40px">STT</th>
                            <th scope="col" style="text-align: left">Thông tin xe</th>
                            <th scope="col" style="text-align: left">Khách đặt vé</th>
                            <th scope="col" style="text-align: left">Điểm đón / Trả</th>
                            <th scope="col" style="text-align: left">Số Tiền</th>
                            <th scope="col" style="text-align: left">Ngày GD</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($transactions as $key => $item)
                            <tr>
                                <td scope="row" style="text-align: left;position:relative;width: 40px" data-tooltip='Click để xem chi tiết' class="css-tooltip" >
                                    {{ ($key + 1) }}
                                </td>
                                <td scope="row" style="text-align: left;position:relative;" data-tooltip='Click để xem chi tiết' class="css-tooltip" >
                                    <a href="">{{ $item->vehicle->v_name ?? "[N\A]" }}</a> <br>
                                    <b>Xe {{ $item->vehicle->v_number_seats ?? "[N\A]" }} chỗ</b> <br>
                                </td>
                                <td style="text-align: left">
                                    <a href="">{{ $item->user->name ?? "[N\A]" }}</a> <br>
                                    <b>{{ $item->user->email ?? "[N\A]" }}</b> <br>
                                    <b>{{ $item->user->phone ?? "[N\A]" }}</b> <br>
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
                                <td scope="row" style="text-align: left;position:relative;" >
                                    {{ number_format($item->t_total_money,0,',','.') }}đ
                                </td>
                                <td scope="row" style="text-align: left;position:relative;">
                                    {{ $item->t_time_process}}
                                </td>
                            </tr>
                        @empty
                            <p>Dữ liệu chưa được cập nhật</p>
                        @endforelse
                        </tbody>
                    </table>
                    {{ $transactions->links('vendor/pagination/default') }}
                </div>
            </div>
        </div>
    </section>
@stop