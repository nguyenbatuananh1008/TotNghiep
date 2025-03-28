@php
    $secondary = isset($secondary) ? $secondary : config('menu.nav2');
    $data_tab_menu = isset($data_tab_menu) ? $data_tab_menu : '';
@endphp

<header class="header">
    <div class="header-content {{ isset($container) ? $container : (isset($container_full) ? $container_full : '') }}">
        <div class="brand box-sidebar-icon">
            <a href="/" class="logo js-show-sidebar-account">
                <i class="fa fa-bars"></i>
            </a>
        </div>
        <div class="brand">
            <a href="/" class="logo">
                <img src="{{ pare_url_file($configuration->logo ?? "") }}" alt="limousinevipcactinh.com">
            </a>
        </div>
        <div class="secondary-nav">
            @include('components.header.include.item_nav', ['menus' => $secondary])
            <div class="icon-sidebar">
{{--                <a href="{{ route('get.login') }}" title="Đăng ký, đăng nhập" class="js-show-sidebar">--}}
{{--                    <i class="fa fa-user"></i>--}}
{{--                </a>--}}

                <li class="li-user-login">
                    <a href="" class="flex align-center js-show-drop-menu" style="display: flex !important;">
                        @if(get_data_user('users','avatar'))
                            <img src="{{ pare_url_file(get_data_user('users','avatar')) }}" alt="">
                        @else
                            <img src="{{ asset('images/icon/account-circle.svg') }}" alt="">
                        @endif
                        <span class="fa fa-angle-down ml5"></span>
                    </a>
                    <ul class="drop-menu-user-header">
                        @foreach(config('user.menu_guest') as $item)
                            @if(in_array(get_data_user('users','is_guest'), $item['level']) || get_data_user('users','is_guest') == 1)
                                <li>
                                    @if (\Request::route()->getName())
                                    <a href="{{ route($item['route']) }}" class="{{ \Request::route()->getName() == $item['route'] ? 'active' : '' }}" title="{{ $item['title'] }}">
                                        {{ $item['title'] }}
                                    </a>
                                    @endif;
                                </li>
                            @endif
                        @endforeach
                    </ul>
                </li>
            </div>
        </div>
    </div>
</header>

@includeWhen(isset($tab_menu), 'components.header.include.form_search')
