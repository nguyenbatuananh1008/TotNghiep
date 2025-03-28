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
                <li><a href="/" title="Trang chủ">Đề thi lớp 8 <i class="fa fa-angle-right"></i></a></li>
                <li><span>Đề Khảo sát Chất lượng Theo Chương Vật lý 12 năm 2020 lần 16 (Giải chi tiết)</span></li>
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
            <div class="detail">
                <div class="detail-avatar">
                    <a href="">
                        <img src="{{ asset('images/icon/pdf.svg') }}" alt="">
                    </a>
                </div>
                <div class="detail-info">
                    <h1><strong>Đề Khảo sát Chất lượng Theo Chương Vật lý 12 năm 2020 lần 16 (Giải chi tiết)</strong></h1>
                    <p class="detail-price">
                        <span class="price price-new">200.000 VNĐ</span>
                        <span class="price price-old">220.000 VNĐ</span>
                    </p>
                    <p class="detail-action">
                        <a href="" class="btn btn-radius btn-pink"><i class="fa fa-shopping-bag"></i> Mua ngay</a>
                        <a href="" class="btn btn-radius btn-secondary"><i class="fa fa-eye"></i> Xem thử</a>
                    </p>
                    @if(detectDevice() == 'desktop')
                    <div class="detail-desc">
                        <ul class="">
                            <li> Thầy cô cần file WORD liên hệ số điện thoại: 082.43.23.888</li>
                            <li> Tài liệu, đề thi Hay và Chất lượng.</li>
                            <li> Tài liệu tải xuống định dạng file PDF.</li>
                            <li> Vui lòng kiểm tra trước khi sử dụng.</li>
                        </ul>
                    </div>
                    @endif
                </div>
            </div>
            @if(detectDevice() == 'mobile')
                <div class="detail-desc mb20">
                    <ul class="">
                        <li> Thầy cô cần file WORD liên hệ số điện thoại: 082.43.23.888</li>
                        <li> Tài liệu, đề thi Hay và Chất lượng.</li>
                        <li> Tài liệu tải xuống định dạng file PDF.</li>
                        <li> Vui lòng kiểm tra trước khi sử dụng.</li>
                    </ul>
                </div>
            @endif
            <div class="lists-data">
                <div class="header">
                    <h3> Mô tả tài liệu</h3>
                </div>
                <div class="content">
                    <div class="content-text mt10">
                        60 đề thi thử dự đoán chuẩn năm 2020 môn Ngữ Văn có lời giải chi tiết (BẢN WORD)
                    </div>
                </div>
            </div>
            <div class="lists-data">
                <div class="header">
                    <h3><i class="fa fa-folder"></i> Tài liệu cùng thể thoại</h3>
                </div>
                <div class="content">
                    <div class="lists">
                        @for ($i = 1 ; $i <= 5 ; $i ++)
                            <div class="item">
                                <div class="item-icon" data-type="Hot"></div>
                                <div class="item-info">
                                    <h4><a href="{{ route('document.detail') }}">Đề Khảo sát Chất lượng Theo Chương Vật
                                            lý 12 năm 2020 lần 16 (Giải chi tiết)</a></h4>
                                    <ul class="item-nav">
                                        <li><a href="">Trang chủ <span>/</span></a></li>
                                        <li><a href="{{ route('document.category') }}">Tài liệu lớp 7 <span>/</span></a>
                                        </li>
                                        <li><span>Đề thi</span></li>
                                    </ul>
                                </div>
                            </div>
                        @endfor
                        <div style="clear: both"></div>
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
