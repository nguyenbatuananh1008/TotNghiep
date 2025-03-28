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
                <li><a href="{{ route('get_guest.vehicles.index') }}" title="Conha.vn">Quản lý xe <i
                                class="fa fa-angle-right"></i></a></li>
                <li><span>Thêm mới xe</span></li>
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
                    <form action="" id="formRegister" method="POST" autocomplete="off" enctype="multipart/form-data">
                        @csrf
                        <div class="col-contact">
                            <div class="form-group">
                                <input type="text" required class="form-control" placeholder="Họ Tên" name="name"
                                       value="{{ $user->name }}">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Số điện thoại" name="phone"
                                       disabled value="{{ $user->phone }}">
                            </div>
                            <div class="form-group">
                                <input type="email" required name="email" class="form-control" placeholder="Email"
                                       value="{{ $user->email }}">
                            </div>
                            <div class="form-group">
                                <input type="text" required name="address" class="form-control" placeholder="Nghệ An"
                                       value="{{ $user->address }}">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Họ tên user Support"
                                       name="name_support" value="{{ $user->name_support }}">
                            </div>
                            <div class="form-group">
                                <textarea name="about_price" placeholder="Mô tả về các vé xe" id="" cols="30" rows="3" class="form-control">{{ $user->about_price }}</textarea>
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" class="form-control" placeholder="******"
                                       value="">
                            </div>
                            <div class="form-group">
                                <div class="upload-btn-wrapper">
                                    <button class="btn-upload">Chọn ảnh hoạc thay đổi ảnh đại diện </button>
                                    <input type="file" name="avatar" accept="image/*" id="imgInp">
                                </div>
                                <p>
                                    <img id="blah" src="{{ pare_url_file($user->avatar) }}" style="width: 120px;height: 120px;border-radius: 50%;border: 2px solid #dedede" alt="">
                                </p>
                            </div>

                            <button type="submit" class="btn btn-blue">Cập nhật</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@stop