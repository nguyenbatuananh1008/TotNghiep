<footer class="footer {{ isset($container) ? $container : (isset($container_full) ? $container_full : '') }}">
    <div class="footer__info ">
        <div class="info-logo">
            <div class="info-logo__content">
                <a href="/" class="item logo" title="Về trang chủ">{{ $configuration->company ?? "[N\A]" }}</a>
                <p class="item">{{ $configuration->address ?? "[N\A]" }}</p>
                <p class="item">Email: {{ $configuration->email ?? "[N\A]" }}</p>
                <p>Hãy gọi cho chúng tôi để được tư vấn 24/7</p>
                <div class="call">
                    <a href="#">
                        <i class="la la-phone"></i>
                        {{ $configuration->hotline ?? "[N\A]" }}
                    </a>
                </div>
            </div>
        </div>
        <div class="info-link">
            <div class="item-link">
                <h3 class="">
                    Về Chúng tôi
                </h3>
                <div class="">
                    <a href="{{ route('get.about') }}" title="Giới thiệu">Giới thiệu</a>
                    <a href="{{ route('get.contact') }}" title="Liên hệ">Liện hệ</a>
                    @if (get_data_user('users'))
                        <a href="{{ route('get_user.info') }}" title="Đăng ký" rel="nofollow">Xin chào :
                            <b>{{ get_data_user('users','name') }}</b></a>
                        <a href="{{ route('get_guest.index') }}" title="Nhà xe">Nhà Xe</a>
                    @else
                            <a href="{{ route('get.login') }}" title="Login">Đăng nhập</a>
                    @endif

                    {{--                    <a href="#" target="_blank">Tuyển dụng</a>--}}
                    {{--                    <a href="#" target="_blank">Chính sách bảo mật</a>--}}
                </div>
            </div>
            <div class="item-link">
                <h3 class="">
                    Hỗ trợ
                </h3>
                <div class="">
                    <a href="#" target="_blank">Bảo mật thông tin</a>
                    <a href="#" target="_blank">Bảo mật thông tin thanh toán</a>
                    <a href="#" target="_blank">Câu hỏi thường gặp</a>
                    <a href="#" target="_blank">Chính sách bảo mật</a>
                </div>
            </div>
        </div>
    </div>
    <div class="footer__line"></div>
    <div class="footer__more-info">
        <div class="">
            <p class="copyright">{!! $configuration->footer_bottom ?? "[N\A]" !!}</p>
        </div>
        <div class="col-more-6">
{{--            <div class="col-more-4">--}}
{{--                <p>Đăng ký nhận thông tin mới nhất từ Propzy</p>--}}
{{--                <form action="">--}}
{{--                    <div class="form-group">--}}
{{--                        <input class="textinput" type="text" id="ft-subscribe-email" name="email"--}}
{{--                               placeholder="Nhập email để nhận thông tin">--}}
{{--                    </div>--}}
{{--                    <button type="submit" class="btn btn-blue">--}}
{{--                        <i class="fa fa-angle-right" aria-hidden="true"></i>--}}
{{--                    </button>--}}
{{--                </form>--}}
{{--            </div>--}}
            <div class="col-more-2">
                <p>Kết nối với chúng tôi</p>
                <ul>
                    <li>
                        <a href="#" class="la la-facebook-f" aria-hidden="true"></a>
                    </li>
                    <li>
                        <a href="#" class="la la-youtube" aria-hidden="true">
                        </a>
                    </li>
                    <li>
                        <a href="#" class="la la-twitch" aria-hidden="true">

                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
        <p class="footer_bottom_text">Thiết kế website<a href="" style="color: #ef7733"></a> </p>
</footer>
