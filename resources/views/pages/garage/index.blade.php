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
                <li><a href="/" title="limousinevipcactinh.com">limousinevipcactinh.com<i class="fa fa-angle-right"></i></a></li>
                <li><a href="#" title="Nhà xe">Nhà xe <i class="fa fa-angle-right"></i></a></li>
                <li><span>{{ $garage->name_support }}</span></li>
            </ul>
        </div>
    </section>
@stop

@section('content')
    @include('pages.detail.include._inc_image_view',['albums' => $albums])
    @include('pages.detail.include._inc_content_detail',['garage' => $garage])
    @include('pages.garage.include._inc_route',['buses' => $buses])
    @include('pages.detail.include._inc_project_relative',['guests' => $guests])
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
