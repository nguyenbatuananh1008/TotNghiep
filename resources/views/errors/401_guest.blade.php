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
                <li><span>Danh sách vé </span></li>
            </ul>
        </div>
    </section>
    <style>

    </style>
    <section>
        <div class="container">
            <div class="users">
                <div class="users-sidebars">
                    @include('guest::components._inc_guest_sidebar')
                </div>
                <div class="users-content">
                    <p style="color: red;font-size: 16px;text-align: center">Bạn không có quyền truy cập</p>
                </div>
            </div>
        </div>
    </section>
@stop