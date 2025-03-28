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
                <li><a href="/" title="">Quản lý xe <i class="fa fa-angle-right"></i></a></li>
                <li><span>Danh sách xe</span></li>
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
                    <a href="{{ route('get_guest.vehicles.create') }}" class="btn btn-success btn-xs mb5">Thêm mới xe <i class="fa fa-plus-circle"></i></a>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Tên xe</th>
                                <th scope="col">Biển số</th>
                                <th scope="col">Số ghế</th>
                                <th scope="col">Hình ảnh</th>
                                <th scope="col" style="text-align: center">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @forelse($vehicles as $item)
                                    <tr>

                                        <td style="text-align: center">{{ $item->id }}</td>
                                        <td scope="row" style="text-align: center;position:relative;" data-tooltip='Click để xem chi tiết' class="css-tooltip" >
                                            <a href="">{{ $item->v_name }}</a>
                                        </td>
                                        <td scope="row" style="text-align: center;position:relative;" data-tooltip='Click để xem chi tiết' class="css-tooltip" >
                                            <a href="">{{ $item->v_license_plate }}</a>
                                        </td>
                                        <td style="text-align: center">{{ $item->v_number_seats }}</td>
                                        <td style="text-align: center">
                                            <img src="{{ pare_url_file($item->v_avatar) }}" style="width: 80px;height: 60px" alt="">
                                        </td>
                                        <td style="text-align: center">
                                                <a href="{{ route('get_guest.vehicles.edit', $item->id) }}"
                                                   class="btn-xs btn btn-success"><i class="fa fa-save"></i>Cập nhật
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
            </div>
        </div>
    </section>
@stop