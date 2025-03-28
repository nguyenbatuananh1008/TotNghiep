@extends('layouts.app_default')
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
    @include('pages.home.include._inc_banner',['pageContent' => $pageContent])
@stop

@section('content')
{{--    @include('pages.home.include._inc_explore_area')--}}
@stop

@section('content-fluid')
    @include('pages.home.include._inc_articles',['menu' => $menuOne,'articles' => $articlesHotOne])
    {{--    @include('pages.home.include._inc_intro')--}}
    @include('pages.home.include._inc_statistics')
    @include('pages.home.include._inc_articles',['menu' => $menuTwo,'articles' => $articlesHotTwo])
{{--    @include('pages.home.include._inc_news')--}}
    @include('pages.home.include._inc_section_link',['guests' => $guests,'title' => 'Các nhà xe nổi tiếng'])
    @include('pages.home.include._inc_route',['routes' => $routes,'title' => 'Tuyến xe'])
{{--    @include('pages.home.include._inc_help')--}}
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
