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
                <li><span>Thông tin</span></li>
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
                    <h4 class="heading-h4">Thông tin xác nhận huỷ vé</h4>
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col" style="text-align: left">Thông tin</th>
                            <th scope="col">Số vé</th>
                            <th scope="col">Giá</th>
                            <th scope="col">Điểm xuất phát</th>
                            <th scope="col">Điểm đến</th>
                            <th scope="col" style="text-align: left">Thời gian</th>
                            <th scope="col" style="text-align: left">Ngày đi</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class="{{ $item->t_status == \App\Models\Cart\Transaction::STATUS_SUCCESS ? 'pay-success' : '' }}">
                            <td scope="row" style="text-align: left;position:relative;" data-tooltip='Click để xem chi tiết' class="css-tooltip" >
                                <a href="">{{ $item->vehicle->v_name }}</a> <br>
                                <b>Xe {{ $item->vehicle->v_number_seats }} chỗ</b><br>
                            </td>
                            <td style="text-align: center">{{ $item->t_total_ticket }} <b>Vé</b></td>
                            <td style="text-align: center">{{ number_format($item->t_total_money,0,',','.') }}đ</td>
                            <td style="text-align: center">{{ $item->starting->loc_name ?? '' }}</td>
                            <td style="text-align: center">{{ $item->destination->loc_name ?? '' }}</td>
                            <td style="text-align: left">
                                <p><b>{{ (new \Carbon\Carbon($item->t_time_start))->format('H:i')  }}</b> -- <b>{{ (new \Carbon\Carbon($item->t_time_stop))->format('H:i')  }}</b></p>
                            </td>
                            <td style="text-align: left;position: relative;height: 110px">
                                {{ $item->t_date_success }}
                            </td>
                        </tr>
                        </tbody>
                    </table>

                    <div class="callout callout-danger mb20">
                        <p>Để lại lý do bạn huỷ vé để nhà xe có thể điều chỉnh cũng như khắc phục ( Vđ tôi không nhận được thông báo thanh toán thành công, tôi không nhận đc vé ...)</p>
                    </div>

                    <form action="" method="POST" autocomplete="off">
                        @csrf
                        <div class="col-contact">
                            <div class="form-group">
                                <textarea name="note_cancel" class="form-control" placeholder="Lý do bạn huỷ vé là gì" id="" cols="30" rows="4" required></textarea>
                            </div>
                            <div class="form-group text-center">
                                <button style="margin: 0 auto;width: 200px;" type="submit" class="btn btn-orange btn-radius">Xác nhận huỷ vé</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@stop