@extends('layouts.app_default')
@section('css')
    <style>
        .sg ins {
            margin: auto;
        }
        <?php $style = file_get_contents('assets/css/document.min.css');echo $style;?>
    </style>
@stop

@section('not_container')
    @include('components.header.header', [
        'container' => 'container'
    ])
    <section class="breadcrumb">
        <div class="container breadcrumb-content">
            <ul>
                <li><a href="/" title="Trang chủ">Trang chủ <i class="fa fa-angle-right"></i></a></li>
                <li><span>Đề thi lớp 8</span></li>
            </ul>
        </div>
    </section>
@stop
@section('content-fluid')
    <div class="container main-document">
        @if(detectDevice() !== 'mobile')
            @include('pages.document.include._inc_document_sidebar')
        @endif
        <div class="col-content">
            <div class="lists-data">
                <div class="header">
                    <h1><i class="fa fa-folder"></i> Đề thi lớp 8</h1>
                </div>
                <div class="content">
                    <div class="lists">
                        @for ($i = 1 ; $i <= 15 ; $i ++)
                            <div class="item">
                                <div class="item-icon" data-type="Hot"></div>
                                <div class="item-info">
                                    <h4><a href="{{ route('document.detail') }}">Đề Khảo sát Chất lượng Theo Chương Vật lý 12 năm 2020 lần 16 (Giải chi tiết)</a></h4>
                                    <ul class="item-nav">
                                        <li><a href="">Trang chủ <span>/</span></a></li>
                                        <li><a href="{{ route('document.category') }}">Tài liệu lớp 7 <span>/</span></a></li>
                                        <li><span>Đề thi</span></li>
                                    </ul>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </div>
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
