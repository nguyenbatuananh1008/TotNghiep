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
                <li><a href="{{ route('get_guest.buses.index') }}" title="Quản lý chuyến xe">Quản lý chuyến <i
                                class="fa fa-angle-right"></i></a></li>
                <li><span>Danh sách chuyến</span></li>
            </ul>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="users">
                <div class="users-sidebars">
                    @include('guest::components._inc_guest_sidebar')
                </div>
                <div class="users-content">
                    <a href="{{ route('get_guest.buses.create') }}" class="btn btn-success btn-xs mb5">Thêm mới <i
                                class="fa fa-plus-circle"></i></a>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                {{--                                <th scope="col">ID</th>--}}
                                <th scope="col">Xe</th>
                                <th scope="col">Giá</th>
                                <th scope="col">Điểm xuất phát</th>
                                <th scope="col">Điểm đến</th>
                                <th scope="col">Thời gian</th>
                                <th scope="col" style="text-align: center">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($buses as $item)
                                <tr>

                                    {{--                                        <td style="text-align: center">{{ $item->id }}</td>--}}
                                    <td scope="row" style="text-align: center;position:relative;"
                                        data-tooltip='Click để xem chi tiết' class="css-tooltip">
                                        <a href="">{{ $item->vehicle->v_name }}</a> <br>
                                        <b>Xe {{ $item->vehicle->v_number_seats }} chỗ</b>
                                    </td>
                                    <td style="text-align: center">{{ number_format($item->b_price,0,',','.') }}đ</td>
                                    <td style="text-align: center">{{ $item->starting->loc_name ?? '' }}</td>
                                    <td style="text-align: center">{{ $item->destination->loc_name ?? '' }}</td>
                                    <td style="text-align: center">
                                        <p>Giờ xuất phát:
                                            <b>{{ (new \Carbon\Carbon($item->b_time_start))->format("H:i")  }}</b></p>
                                        <p>Giờ đến: <b>{{ (new \Carbon\Carbon($item->b_time_stop))->format("H:i") }}</b>
                                        </p>
                                    </td>

                                    <td style="text-align: center">
                                        <a style="padding: 0 5px" class="btn btn-xs btn-blue" href="{{ route('get_guest.buses.edit', $item->id) }}" class=""><i class="fa fa-edit"></i></a>
                                        <a style="padding: 0 5px" class="btn btn-xs btn-pink js-delete" href="{{ route('get_guest.buses.delete', $item->id) }}"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                            @empty
                                <p>Dữ liệu chưa được cập nhật</p>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop