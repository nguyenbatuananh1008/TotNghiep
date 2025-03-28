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
                <li><span>Đăng ký</span></li>
            </ul>
        </div>
    </section>
    <section>
        <div class="container">
            <form action="" style="max-width: 600px;width: 100%;margin: 0 auto;min-height: 50vh" id="formRegister" method="POST" autocomplete="off">
                @csrf
                <div class="col-contact">
                    <div class="form-group">
                        <input type="text" required class="form-control" placeholder="Họ Tên" value="{{ old('name') }}" name="name">
                    </div>
                    <div class="form-group">
                        <input type="text" required class="form-control" value="{{ old('phone') }}" placeholder="Số điện thoại" name="phone">
                        @if($errors->first('phone'))
                            <span class="text-danger">{{ $errors->first('phone') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}">
                    </div>
                    <div class="form-group">
                        <input type="password" required name="password" class="form-control" placeholder="******">
                    </div>
                    @if(!$presenter)
                    <div class="form-group">
                        <input type="text" name="presenter" class="form-control" placeholder="Nhập mã giới thiệu nếu có">
                    </div>
                    @endif
                    <div class="form-group">
                        <label class="box-container"> Nhà xe
                            <input type="checkbox" class="js-item-ticker" name="is_guest"  value="1">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                    <button type="submit" class="btn btn-blue">Đăng ký</button>
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
