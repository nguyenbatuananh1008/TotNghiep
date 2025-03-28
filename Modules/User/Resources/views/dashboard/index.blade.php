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
                    <form action="{{ route('get_user.info.update') }}" id="formRegister" method="POST" autocomplete="off">
                        @csrf
                        <div class="col-contact">
                            <div class="form-group">
                                <input type="text" required class="form-control" placeholder="Họ Tên" name="name" value="{{ $user->name }}">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Số điện thoại" name="phone" disabled value="{{ $user->phone }}">
                            </div>
                            <div class="form-group">
                                <input type="email" required name="email" class="form-control" placeholder="Email" value="{{ $user->email }}">
                            </div>
                            <div class="form-group">
                                <input type="text" required name="address" class="form-control" placeholder="Nghệ An" value="{{ $user->address }}">
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" class="form-control" placeholder="******" value="">
                            </div>
                            <button type="submit" class="btn btn-blue">Cập nhật</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@stop