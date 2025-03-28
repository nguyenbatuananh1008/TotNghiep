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
                <li><a href="/" title="">Quản lý lái xe <i class="fa fa-angle-right"></i></a></li>
                <li><span>Danh sách lái xe</span></li>
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
                    <a href="{{ route('get_guest.drive.create') }}" style="font-size: 13px" class="btn btn-success btn-xs mb5">Thêm mới nhà xe <i class="fa fa-plus-circle"></i></a>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Tên</th>
                                <th scope="col">SĐT</th>
                                <th scope="col">Avatar</th>
                                <th scope="col">Cấp độ</th>
                                <th scope="col" style="text-align: center">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @forelse($drives ?? [] as $item)
                                    <tr>

                                        <td style="text-align: center">{{ $item->id }}</td>
                                        <td scope="row" style="text-align: center;position:relative;"  >
                                            <a href="">{{ $item->name }}</a>
                                        </td>
                                        <td scope="row" style="text-align: center;position:relative;"  >
                                            {{ $item->phone }}
                                        </td>
                                        <td style="text-align: center">
                                            @if($item->avatar)
                                                <img src="{{ pare_url_file($item->avatar) }}" style="width: 80px;height: 60px" alt="">
                                            @else
                                                <img src="{{ asset('images/icon/account-circle.svg') }}" alt="" style="width: 50px;height: 50px;">
                                            @endif
                                        </td>
                                        <td style="text-align: center">
                                            <span>{{ $levelDrive[$item->level_drive] ?? "[N\A]" }}</span>
                                        </td>
                                        <td style="text-align: center">
                                            <a style="padding: 0 5px" class="btn btn-xs btn-pink js-delete" href="{{ route('get_guest.drive.delete', $item->id) }}"><i class="fa fa-trash"></i></a>
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