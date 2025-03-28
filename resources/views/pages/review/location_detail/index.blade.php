@extends('layouts.app_default')
@section('title', 'Khám phá khu vực Quận 10 - Hồ Chí Minh | conha.vn')
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
                <li><a href="{{ route('get.review_location') }}" title="Review khu vực">Review khu vực <i class="fa fa-angle-right"></i></a></li>
                <li><span>Quận Đống Đa - Hà Nội</span></li>
            </ul>
        </div>
    </section>
@stop

@section('content')
    <section class="section section_title">
        <h1>Review khu vực Quận 10 - Hồ Chí Minh cùng Conha.vn</h1>
        <div class="section_title-desc">
            <p>- Trang thông tin rao vặt, mua bán nhà đất, trả góp, giá rẻ , uy tín tại TPHCM. Hàng ngàn tin đăng mua bán nhà được cập nhật liên tục 24h tại Mogi.vn TPHCM.
                Sở hữu một căn nhà có lẽ là niềm mơ ước của rất nhiều người. Tuy nhiên trong thực tế, mua nhà thực sự làa
                một bài toán khó, đặc biệt là những người trẻ khi giá trị bất động sản ngày </p>
            <p>- Trang thông tin rao vặt, mua bán nhà đất, trả góp, giá rẻ , uy tín tại TPHCM. Hàng ngàn tin đăng mua bán nhà được cập nhật liên tục 24h tại Mogi.vn TPHCM.
                Sở hữu một căn nhà có lẽ là niềm mơ ước của rất nhiều người. Tuy nhiên trong thực tế, mua nhà thực sự làa
                một bài toán khó, đặc biệt là những người trẻ khi giá trị bất động sản ngày </p>
        </div>
    </section>
    <section class="section review-dashboard">
        <h2>Tổng quan</h2>
        <div class="dashboard-list">
            <div class="col-7">
                <a href=""><img src="{{ asset('images/project/1.jpg') }}" alt=""></a>
                <div>
                    @for( $i = 2 ; $i <= 4 ; $i ++)
                        <a href=""><img src="{{ asset('images/project/'.$i.'.jpg') }}" alt=""></a>
                    @endfor
                </div>
            </div>
            <div class="col-3">
                <div class="info">
                    <ul>
                        <li><a href="">Xem 140 tin bất động sản tại đây</a></li>
                        <li><a href="">Xem 40 tin rao bán</a></li>
                        <li><a href="">Xem 40 tin rao thuê</a></li>
                        <li><a href="">Có 120 khách hàng đang tìm mua nhà tại đây</a></li>
                    </ul>
                </div>
                <div class="map">
                    <a href=""><img src="{{ asset('images/project/map.jpg') }}" alt=""></a>
                </div>
            </div>
        </div>
    </section>
    <section class="section review-dashboard">
        <h2>Sơ lược về quận Đống Đa - Hà Nội</h2>
        <div class="content">
            <p>Địa thế đất của phường được coi là khu vực đất linh thiêng, đoạn đầu được che chở bởi ngôi Chùa Kim Sơn đoạn cuối được bao bọc bởi Đền Voi Phục. Có địa thế về cây xanh và cảnh quan trong lành . Nằm gần Công viên Thủ Lệ, với các chung cư cao cấp và trung tâm thương mại lớn gần kề như Vincom Liễu Giai, Lotte Mart tòa nhà cao thứ 3 Việt Nam. Nơi hội tụ các thương hiệu hàng đầu về thời trang và mỹ phẩm, công nghệ mua sắm 4.0 áp dụng tiện ích thông minh từ Smart Brochues và Smart Hangers. Hàng nghìn view sống ảo và bất ngờ với khu văn hóa kết hợp trình diễn trải nghiệm công nghệ tương tác thực tế ảo.</p>
            <p>Địa thế đất của phường được coi là khu vực đất linh thiêng, đoạn đầu được che chở bởi ngôi Chùa Kim Sơn đoạn cuối được bao bọc bởi Đền Voi Phục. Có địa thế về cây xanh và cảnh quan trong lành . Nằm gần Công viên Thủ Lệ, với các chung cư cao cấp và trung tâm thương mại lớn gần kề như Vincom Liễu Giai, Lotte Mart tòa nhà cao thứ 3 Việt Nam. Nơi hội tụ các thương hiệu hàng đầu về thời trang và mỹ phẩm, công nghệ mua sắm 4.0 áp dụng tiện ích thông minh từ Smart Brochues và Smart Hangers. Hàng nghìn view sống ảo và bất ngờ với khu văn hóa kết hợp trình diễn trải nghiệm công nghệ tương tác thực tế ảo.</p>
            <p>Địa thế đất của phường được coi là khu vực đất linh thiêng, đoạn đầu được che chở bởi ngôi Chùa Kim Sơn đoạn cuối được bao bọc bởi Đền Voi Phục. Có địa thế về cây xanh và cảnh quan trong lành . Nằm gần Công viên Thủ Lệ, với các chung cư cao cấp và trung tâm thương mại lớn gần kề như Vincom Liễu Giai, Lotte Mart tòa nhà cao thứ 3 Việt Nam. Nơi hội tụ các thương hiệu hàng đầu về thời trang và mỹ phẩm, công nghệ mua sắm 4.0 áp dụng tiện ích thông minh từ Smart Brochues và Smart Hangers. Hàng nghìn view sống ảo và bất ngờ với khu văn hóa kết hợp trình diễn trải nghiệm công nghệ tương tác thực tế ảo.</p>
        </div>
    </section>


@stop
@section('content-fluid')
    <section class="section section-register-email">
        <div class="container content">
            <h5>Đăng ký để nhận tin nhà đất tại Quận Đống Đa - Hà Nội </h5>
            <div class="form">
                <div class="form-group">
                    <i class="fa fa-envelope-o"></i>
                    <input type="email" class="form-control" placeholder="codethue94@gmail.com">
                </div>
                <div class="form-group">
                    <i class="fa fa-phone"></i>
                    <input type="number" class="form-control" placeholder="0986420994">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-pink btn-radius">Đăng ký nhận tin</button>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        @include('pages.review.location_detail.include._inc_review_location')
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
