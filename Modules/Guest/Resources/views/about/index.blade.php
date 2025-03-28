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
                            <div class="form-group">
                                <textarea name="about" class="form-control" id="content" cols="30" rows="10">{{ $guest->about }}</textarea>
                            </div>
                            <button type="submit" class="btn btn-blue">Lưu thông tin</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@stop
@section('script')
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script>
        var options = {
            filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
            filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
            filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
            filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token=',
            language: 'vi',
            uiColor: '#9AB8F3',
            height : 500,
            codeSnippet_theme: 'monokai_sublime',
        };
        CKEDITOR.replace( 'content',options);
    </script>
@stop