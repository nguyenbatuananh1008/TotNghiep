<div class="content-detail">
    <div class="content-detail__detail">
        <div class="header">
            <h1>{{ $garage->name }}</h1>
            <p>{{ $garage->address }}</p>
        </div>
        <div class="tab-nav">
            <a href="" class="js-tab-nav active" data-id="#tab-about">Giới thiệu</a>
            <a href="" class="js-tab-nav" data-id="#tab-phone">Số điện thoại / Địa chỉ</a>
            <a href="" class="js-tab-nav" data-id="#tab-review">Đánh giá</a>
        </div>
        <div class="tab-content">
            <div class="tab-content-item active" id="tab-about">
                <div class="text-item description">
                    <div class="content-text">
                        {!! $garage->about !!}
                    </div>
                </div>
            </div>
            <div class="tab-content-item" id="tab-phone">
                <div class="text-item description">
                    <ul>
                        <li>Địa chỉ: <b>{{ $garage->address }}</b></li>
                        <li>Phone: <a href="tel:{{ $garage->phone }}" rel="nofollow" title="{{ $garage->phone }}"><b>{{ $garage->phone }}</b></a></li>
                    </ul>
                </div>
            </div>
            @include('pages.detail.include._inc_list_vote')
        </div>
        <div class="contact-bottom">
            <div class="contact-bottom__img">
                <a href="#">
                    <img src="{{ asset('images/icon/account-circle.svg') }}" alt="">
                </a>
                <div>
                    <a href="">
                        <strong>{{ $garage->name_support }}</strong>
                    </a>
                    <p>Nhân viên tư vấn</p>
                </div>
            </div>
            <div class="contact-bottom__info">
                <a href="#" class="btn btn-blue-outline">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                    {{ $garage->phone }}
                </a>
                <a href="#" class="btn btn-blue-outline">
                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
                    Gửi tin nhắn
                </a>
            </div>
        </div>
        <div class="action-bottom">
{{--            <div class="left-action">--}}
{{--                <a href="#" class="btn pj-save btn-radius">--}}
{{--                    <i class="fa fa-heart" aria-hidden="true"></i>--}}
{{--                    Lưu tin--}}
{{--                </a>--}}
{{--                <a href="#" class="pj-report">--}}
{{--                    <i class="la la-exclamation-triangle" aria-hidden="true"></i>--}}
{{--                    Báo cáo vi phạm--}}
{{--                </a>--}}
{{--            </div>--}}
{{--            <div class="right-action">--}}
{{--                <p>Chia sẻ: </p>--}}
{{--                <a href=""><img src="{{ asset('images/icon/circle-facebook.svg') }}" alt=""></a>--}}
{{--                <a href=""><img src="{{ asset('images/icon/circle-messenger.svg') }}" alt=""></a>--}}
{{--                <a href=""><img src="{{ asset('images/icon/circle-zalo.svg') }}" alt=""></a>--}}
{{--                <a href=""><img src="{{ asset('images/icon/circle-copylink.svg') }}" alt=""></a>--}}
{{--            </div>--}}
        </div>
    </div>
    <div class="content-detail__contact">
        <div class="contact-sidebar">
            <div class="contact-sidebar__call-email">
                <a href="#">
                    <img src="{{ asset('images/icon/account-circle.svg') }}" alt="">
                </a>
                <div>
                    <a href="">
                        <strong>{{ $garage->name_support }}</strong>
                    </a>
                    <p>Hỗ Trợ Khách Hàng</p>
                </div>
            </div>
            <div>
                <a href="#" class="btn btn-blue btn-contact">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                    {{ $garage->phone }}
                </a>
            </div>
            <div>
                <a href="#" class="btn btn-blue-outline btn-contact">
                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
                    Gửi tin nhắn
                </a>
            </div>
        </div>
{{--        @include('components.form_contact')--}}
    </div>
</div>
