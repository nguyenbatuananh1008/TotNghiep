@extends('layouts.app_default')
@section('css')
    <style>
        .sg ins {
            margin: auto;
        }
        <?php $style = file_get_contents('assets/css/search.min.css');echo $style;?>
    </style>
@stop

@section('not_container')
    @include('components.header.header', [
        'container_full' => 'container-full'
    ])
    @include('components.box_search', [
        'container' => 'container-full'
    ])
@stop

@section('content-fluid')
    <section class="breadcrumb">
        <div class="container-full breadcrumb-content">
            <ul>
                <li><a href="/" title="limousinevipcactinh.com">limousinevipcactinh.com<i class="fa fa-angle-right"></i></a></li>
                <li><span>Tuyến xe</span></li>
            </ul>
        </div>
    </section>
    @include('pages.search.include._inc_content_main',['buses' => $buses,'pageContent' => $pageContent,'route' => $route])
@stop

@section('not_container_bottom')
    @include('components.footer.footer', [
        'container_full' => 'container-full'
    ])
@stop

@section('script')

    <script>
        var URL_PROJECT_INFO = '{{ route('ajax_get.project.show') }}';
    </script>
    <script type="text/javascript">
        <?php $style = file_get_contents('assets/js/search.js');echo $style;?>
    </script>
@stop
