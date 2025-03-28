@extends('admin::layouts.master')
@section('content')
    <div class="container-fluid">
        <!-- breadcrumb -->
        <div class="breadcrumb-header justify-content-between">
            <div class="my-auto">
                <div class="d-flex">
                    <h4 class="content-title mb-0 my-auto">Transaction</h4>
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
                                        <th>Xe</th>
                                        <th>Giá</th>
                                        <th>Điểm xuất phát</th>
                                        <th>Điểm đến</th>
                                        <th>Thời gian</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @forelse($vehicles as $item)
{{--                                    {{ dd($item) }}--}}
                                    <tr>
                                        <td>
                                            <a href="">{{ $item->vehicle->v_name }}</a> <br>
                                            <b>Xe {{ $item->vehicle->v_number_seats }} chỗ</b>
                                        </td>
                                        <td>{{ number_format($item->b_price,0,',','.') }}đ</td>
                                        <td>{{ $item->destination->loc_name ?? '' }}</td>
                                        <td>{{ $item->starting->loc_name ?? '' }}</td>
                                        <td>
                                            <p>Giờ xuất phát: <b>{{ (new \Carbon\Carbon($item->b_time_start))->format('h:m')  }}</b></p>
                                            <p>Giờ đến: <b>{{ (new \Carbon\Carbon($item->b_time_stop))->format('h:m')  }}</b></p>
                                        </td>
                                        <td>
                                            <a href="{{ route('get_admin.transaction.edit', $item->id) }}" class="btn btn-xs btn-info"><i class="la la-edit"></i></a>
                                            <a href="" class="btn btn-xs btn-danger"><i class="la la-trash"></i></a>
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
