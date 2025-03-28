@extends('layouts.app_default')
@section('title', 'Trang chủ | conha.vn')
@section('css')
    <style>
        .sg ins {
            margin: auto;
        }
        <?php $style = file_get_contents('assets/css/home.min.css');echo $style;?>
    </style>
@stop
@section('not_container')
    @include('components.header.header', [
        'container' => 'container'
    ])
@stop


@section('content-fluid')
    <section class="breadcrumb" style="padding: 0">
        <div class="container breadcrumb-content">
            <ul>
                <li><a href="/" title="Trang chủ">Trang chủ <i class="fa fa-angle-right"></i></a></li>
                <li><span>Đăng nhập</span></li>
            </ul>
        </div>
    </section>
    <section>
        <div class="container">
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="" style="max-width: 600px;width: 100%;margin: 0 auto;min-height: 50vh" id="formLogin" method="POST" autocomplete="off">
                @csrf
                <div class="col-contact">
                    <div class="form-group">
                        <input type="number" required name="phone" class="form-control" placeholder="Số điện thoại">
                    </div>
                    <div class="form-group">
                        <input type="password" required name="password" class="form-control" placeholder="******">
                    </div>
                    <p>Bạn chưa có tài khoản? Đăng ký <a href="{{ route('get.register') }}" style="color: #ef7733" title="Đăng ký">tại đây</a></p>
                    <button type="submit" class="btn btn-blue">Đăng nhập</button>
                </div>
            </form>
        </div>
    </section>
@stop

@section('not_container_bottom')
    @include('components.footer.footer', [
        'container' => 'container'
    ])
@stop

@section('script')
    <script type="text/javascript">
        <?php $style = file_get_contents('assets/js/home.js');echo $style;?>
    </script>
@stop
