@extends('layouts.app_default')
@section('title', 'Chi tiết dự án | Conha')
@section('css')
    <style>
        .sg ins {
            margin: auto;
        }
        <?php $style = file_get_contents('assets/css/ticket.min.css');echo $style;?>
    </style>
@stop

@section('not_container')
    @include('components.header.header', [
        'container' => 'container'
    ])
    <section class="breadcrumb">
        <div class="container breadcrumb-content">
            <ul>
                <li><a href="/" title="limousinevipcactinh.com">limousinevipcactinh.com <i
                                class="fa fa-angle-right"></i></a></li>
                <li><a href="/" title="Đặt vé">Đặt vé <i class="fa fa-angle-right"></i></a></li>
                <li><span>Đặt vé thành công</span></li>
            </ul>
        </div>
    </section>
@stop

@section('content')
    <div class="content-detail">
        <div class="content-detail__detail">
            @if(isset($buses->starting) && isset($buses->destination))
                <div class="header">
                    <h1>[Đặt vé] {{ $buses->starting->loc_name }} đi {{ $buses->destination->loc_name }}</h1>
                    <p>[Nhà xe] {{ $guest->name }}</p>
                </div>
            @endif
            <div class="callout callout-info" style="margin: 15px 0">
                <p>Đặt vé thành công. Xin vui lòng kiểm tra lại thông tin và thanh toán tiền vé</p>
            </div>
            <div class="text-item main-text">
                <h4>Thông tin chi tiết</h4>
                <div class="list-info">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th scope="col" style="text-align: left">Thông tin</th>
                                <th scope="col">Giá</th>
                                <th scope="col">Điểm xuất phát</th>
                                <th scope="col">Điểm đến</th>
                                <th scope="col">Vị Trí </th>
                                <th scope="col" style="text-align: left">Giờ xuất phát</th>
                                <th scope="col" style="text-align: left">Ngày đi</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($orders as $item)
                                <tr>
                                    <td scope="row" style="text-align: left;position:relative;" data-tooltip='Click để xem chi tiết' class="css-tooltip" >
                                        <a href="">{{ $item->vehicle->v_name }}</a> <br>
                                        <b>Xe {{ $item->vehicle->v_number_seats }} chỗ</b><br>
                                        Mã Vé: <b>{{ $item->id }}</b>
                                    </td>
                                    <td style="text-align: center">{{ number_format($item->o_price,0,',','.') }}đ</td>
                                    <td style="text-align: center">{{ $item->destination->loc_name ?? '' }}</td>
                                    <td style="text-align: center">{{ $item->starting->loc_name ?? '' }}</td>
                                    <td style="text-align: center">Vị trí ghế <b>{{ $item->o_position }}</b></td>
                                    <td style="text-align: left">
                                        <p>Giờ xuất phát: <b>{{ (new \Carbon\Carbon($item->o_time_start))->format('H:i')  }}</b></p>
                                        <p>Giờ đến: <b>{{ (new \Carbon\Carbon($item->o_time_stop))->format('H:i')  }}</b></p>
                                    </td>
                                    <td style="text-align: left">
                                        <b>{{  $item->o_date_success }}</b></p>
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
    </div>

@stop

@section('not_container_bottom')
    @include('components.footer.footer', [
        'container' => 'container'
    ])
@stop

@section('script')
    <script type="text/javascript">
        <?php $style = file_get_contents('assets/js/detail.js');echo $style;?>
    </script>
@stop
