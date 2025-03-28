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
                <li><span>Quản lý vé đặt</span></li>
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
                    <div class="tab-nav">
                        <a href="{{ route('get_user.ticket',['status' => 1]) }}" class="js-tab-nav-ajax {{ $status == 1 ? 'active' : '' }}" data-id="#tab-process">Chuyến sắp đi</a>
                        <a href="{{ route('get_user.ticket',['status' => 2]) }}" class="js-tab-nav-ajax {{ $status == 2 ? 'active' : '' }}" data-id="#tab-success">Chuyến đã đi</a>
                        <a href="{{ route('get_user.ticket',['status' => -1]) }}" class="js-tab-nav-ajax {{ $status == -1 ? 'active' : '' }}" data-id="#tab-cancel">Chuyến đã huỷ</a>
                    </div>
                    <div class="tab-content mt10">
                        <div class="tab-content-item active" id="tab-process">
                            <div class="table-responsive">
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
                                    @forelse($transactions as $item)
                                        <tr class="{{ $item->t_status == \App\Models\Cart\Transaction::STATUS_SUCCESS ? 'pay-success' : '' }}">
                                            <td scope="row" style="text-align: left;position:relative;" data-tooltip='Click để xem chi tiết' class="css-tooltip" >
                                                <a href="">{{ $item->vehicle->v_name }}</a> <br>
                                                <b>Xe {{ $item->vehicle->v_number_seats }} chỗ</b><br>
                                                <a class="text-orange" target="_blank" title="Thông tin vé"
                                                   href="{{ route('get_user.ticket.info',['id' => $item->id,'phone' => $item->t_phone]) }}">Thông tin vé</a>

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
                                                @if($item->t_status ==2 )
                                                    <a class="text-vote" title="Đánh giá" target="_blank" href="{{ route('get_user.vote', $item->id) }}">Đánh giá</a>
                                                    <span class="text">Đã giao dịch</span>
                                                @elseif($item->t_status == 1)
                                                    <a class="text-cancel-ticket" title="Đánh giá"  href="{{ route('get_user.ticket.cancel', $item->id) }}">Huỷ vé</a>
                                                @else
                                                @endif
                                                @if($item->t_note_user)
                                                    <br><a class="text-danger" target="_blank" title="Thông tin vé"
                                                       href="{{ route('get_user.ticket.cancel_preview', $item->id) }}">Lý do huỷ</a>
                                                @endif
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="7" class="td-empty">Dữ liệu chưa được cập nhật</td>
                                        </tr>
                                    @endforelse
                                    </tbody>
                                </table>
                                {{ $transactions->links('vendor/pagination/default') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop