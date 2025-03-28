@extends('layouts.app_default')
@section('title', 'Chi tiết dự án | Conha')
@section('css')
    <style>
        .sg ins {
            margin: auto;
        }
        <?php $style = file_get_contents('assets/css/ticket.min.css');echo $style;?>
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
                <li><a href="/" title="limousinevipcactinh.com">limousinevipcactinh.com <i
                                class="fa fa-angle-right"></i></a></li>
                <li><a href="/" title="Đặt vé">Đặt vé <i class="fa fa-angle-right"></i></a></li>
                <li><span>{{ $guest->name }}</span></li>
            </ul>
        </div>
    </section>
@stop

@section('content')
    @include('pages.ticket.include._inc_content_detail',[
        'buses'    => $buses,
        'guest'    => $guest,
        'routes'   => $routes,
        'guests'   => $guests,
        'tickers'  => $tickers,
        'user'     => $user,
        'vehicle' => $vehicle
    ])
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
