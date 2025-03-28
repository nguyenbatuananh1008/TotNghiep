<div class="routes">
    <h3><strong>Danh sách các chuyến nhà xe chạy</strong></h3>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col" style="text-align: left">Xe</th>
                    <th scope="col" style="text-align: left">Giá</th>
                    <th scope="col" style="text-align: left">Điểm xuất phát</th>
                    <th scope="col" style="text-align: left">Điểm đến</th>
                    <th scope="col" style="text-align: left">Thời gian</th>
                    <th scope="col" style="text-align: left">Đặt xe</th>
                </tr>
            </thead>
            <tbody>
            @forelse($buses as $item)
                <tr>

                    {{--                                        <td style="text-align: center">{{ $item->id }}</td>--}}
                    <td scope="row" style="text-align: left;position:relative;" data-tooltip='Click để xem chi tiết' class="css-tooltip" >
                        <a href="">{{ $item->vehicle->v_name }}</a> <br>
                        <b>Xe {{ $item->vehicle->v_number_seats }} chỗ</b>
                    </td>
                    <td style="text-align: left"><b>{{ number_format($item->b_price,0,',','.') }}đ</b></td>
                    <td style="text-align: left">{{ $item->starting->loc_name ?? '' }}</td>
                    <td style="text-align: left">{{ $item->destination->loc_name ?? '' }}</td>
                    <td style="text-align: left">
                        {{--                                            <p>Giờ xuất phát: <b>{{  \Carbon\Carbon::create($item->b_time_start) }}</b></p>--}}
                        <p>Giờ xuất phát: <b>{{ (new \Carbon\Carbon($item->b_time_start))->format("H:i")  }}</b></p>
                        <p>Giờ đến: <b>{{ (new \Carbon\Carbon($item->b_time_stop))->format("H:i") }}</b></p>
                    </td>

                    <td style="text-align: left">
                        <a href="{{ route('get.ticket.process', $item->id) }}"
                           class="btn-xs btn" style="background-color: rgb(255 199 0)"><i class="fa fa-save"></i> Đặt xe
                        </a>
                    </td>
                </tr>
            @empty
                <p>Dữ liệu chưa được cập nhật</p>
            @endforelse
            </tbody>
        </table>
    </div>
</div>