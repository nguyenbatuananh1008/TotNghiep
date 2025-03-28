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
                <li><span>Thông tin vé</span></li>
            </ul>
        </div>
    </section>
    <section>
        <div class="container page-info-ticket">
            <div class="box">
                <div class="box-left">
                    <div class="item">
                        <div>Hướng dẫn lên xe</div>
                        <div>
                            Bạn cần ra điểm đón trước 15 phút, đưa SMS hoặc email xác nhận thanh toán của Limousinevipcactinh cho nhân viên văn phòng vé để đổi vé giấy
                            Khi lên xe, bạn xuất trình vé giấy cho tài xế hoặc phụ xe.
                        </div>
                    </div>
                    <div class="item">
                        <div>Điểm đón</div>
                        <div>
                            <p>{{ $transaction->starting->loc_name }} </p>
{{--                            <p>{{ getLocation($transaction->t_buses_location_start,'loc_name')}}</p>--}}
                            <p>Đón lúc <b>{{ $transaction->buses_location_start->bl_time ?? "[N\A]" }}</b></p>
{{--                            <h1>[Đặt vé] {{ $buses->starting->loc_name }} đi {{ $buses->destination->loc_name }}</h1>--}}
                        </div>
                    </div>
                    <div class="item">
                        <div>Điểm trả</div>
                        <div>
{{--                            <p>{{ getLocation($transaction->t_buses_location_stop,'loc_name')}}</p>--}}
                            <p>{{ $transaction->destination->loc_name }} </p>
                            <p>Trả lúc <b>{{ $transaction->buses_location_stop->bl_time ?? "[N\A]" }}</b></p>
                        </div>
                    </div>
                </div>
                <div class="box-right">
                    <div class="card">
                        <h4>Thông tin vé</h4>
                        <div class="item">
                            <div>Mã Giao Dịch</div>
                            <div>{{ $transaction->id }}</div>
                        </div>
                        <div class="item">
                            <div>Họ Tên</div>
                            <div>{{ $transaction->t_name }}</div>
                        </div>
                        <div class="item">
                            <div>Số điện thoại</div>
                            <div>{{ $transaction->t_phone }}</div>
                        </div>
                        <div class="item">
                            <div>Email</div>
                            <div>{{ $transaction->t_email }}</div>
                        </div>
                    </div>
                    @if($price)
                        <div class="card mt15">
                            <h4>Thông tin giao dịch</h4>
                            <div class="item flex align-center justify-between">
                                <div>Giá vé </div>
                                <div><b>{{ $transaction->t_total_ticket }}</b> * <b>{{ number_format($price,0,',','.') }}</b>đ</div>
                            </div>
                            <div class="item flex align-center justify-between">
                                <div>Tổng tiền </div>
                                <div><b>{{ number_format($transaction->t_total_money,0,',','.') }}</b>đ</div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
@stop