@extends('layouts.app_default')
@section('title', 'Chi tiết dự án | Conha')
@section('css')
    <style>
        .sg ins {
            margin: auto;
        }
        <?php $style = file_get_contents('assets/css/detail.min.css');echo $style;?>
    </style>
@stop

@section('not_container')
    @include('components.header.header', [
        'container' => 'container'
    ])
{{--    @include('components.box_search', [--}}
{{--        'container' => 'container'--}}
{{--    ])--}}
    <section class="breadcrumb">
        <div class="container breadcrumb-content">
            <ul>
                <li><a href="/" title="limousinevipcactinh.com">limousinevipcactinh.com <i class="fa fa-angle-right"></i></a></li>
                <li><a href="/" title="Conha.vn"> Nhà xe <i class="fa fa-angle-right"></i></a></li>
                <li><span>Xe Anh Quốc Limousine</span></li>
            </ul>
        </div>
    </section>
@stop

@section('content')
    @include('pages.detail.include._inc_image_view')
    @include('pages.detail.include._inc_content_detail')
    @include('pages.detail.include._inc_project_relative')
@stop

@section('not_container_bottom')
    @include('components.footer.footer', [
        'container' => 'container'
    ])
@stop

@section('script')
    <script type="text/javascript">
        <?php $style = file_get_contents('assets/js/detail.js');echo $style;?>
    </script>
@stop
