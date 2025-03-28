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
{{--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" crossorigin="anonymous">--}}
<link rel="stylesheet" href="https://plugins.krajee.com/assets/prod/all-krajee.min.css?ver=201903112143" crossorigin="anonymous">
    <section class="breadcrumb" style="padding: 0">
        <div class="container breadcrumb-content">
            <ul>
                <li><a href="/" title="Conha.vn">Trang chủ <i class="fa fa-angle-right"></i></a></li>
                <li><a href="/" title="Conha.vn">Thông tin <i class="fa fa-angle-right"></i></a></li>
                <li><span>Giới thiệu</span></li>
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
                    <form action="" enctype="multipart/form-data"  id="formRegister" method="POST" autocomplete="off">
                        @csrf
                        <div class="col-contact">
                            <input type="file" class="albums" multiple name="images[]">
                            <button type="submit" class="btn btn-blue">Lưu thông tin</button>
                        </div>
                    </form>
                    @if($images && !$images->isEmpty())
                        <div class="lists mt20">
                            @foreach($images as $img)
                                <div class="mb10 mr10 tr" style="float: left;">
                                    <img src="{{ pare_url_file($img->slug) }}" style="width: 200px;height: 80px;object-fit: cover" alt=""><br>
                                    <a href="{{ route('get_guest.album.delete', $img->id) }}" class="js-delete" style="text-align: center">Xoá ảnh</a>
                                </div>
                            @endforeach
                            <div style="clear: both"></div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
@stop