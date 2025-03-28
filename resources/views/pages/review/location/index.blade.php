@extends('layouts.app_default')
@section('title', 'Khám phá khu vực | conha.vn')
@section('css')
    <style>
        .sg ins {
            margin: auto;
        }
		<?php $style = file_get_contents('assets/css/review_location.min.css');echo $style;?>
    </style>
@stop

@section('not_container')
    @include('components.header.header', [
        'container' => 'container'
    ])
@stop
@section('breadcrumb')
    <section class="breadcrumb">
        <div class="container breadcrumb-content">
            <ul>
                <li><a href="/" title="Conha.vn">Conha.vn <i class="fa fa-angle-right"></i></a></li>
                <li><span>Review khu vực</span></li>
            </ul>
        </div>
    </section>
@stop

@section('content')
    <section class="section section_title">
        <h1>Review khu vực cùng Conha.vn</h1>
        <div class="section_title-desc">
            <p>Trang thông tin rao vặt, mua bán nhà đất, trả góp, giá rẻ , uy tín tại TPHCM. Hàng ngàn tin đăng mua bán nhà được cập nhật liên tục 24h tại Mogi.vn TPHCM.
                Sở hữu một căn nhà có lẽ là niềm mơ ước của rất nhiều người. Tuy nhiên trong thực tế, mua nhà thực sự làa
                một bài toán khó, đặc biệt là những người trẻ khi giá trị bất động sản ngày <a
                    href="" class="">xem thêm <i class="fa fa-angle-right"></i></a></p>
        </div>
    </section>
    @include('pages.review.location.include._inc_review_location')
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
