<ul class="header-menu">
    @foreach($navBars ?? [] as $nav)
        <li class="">
            <a href="{{ $nav->nb_url }}" title="{{ $nav->nb_name }}">{{ $nav->nb_name }}</a>
        </li>
    @endforeach
    @foreach($menus ?? [] as $item)
        <li class="{{ isset($item['class']) ? $item['class'] : '' }}">
            @if(isset($item['title']))
                <a href="#" class="{{ isset($item['post']) ? $item['post'] : '' }}">{{ $item['title'] }}</a>
            @else
                <a href="">
                    <i class="{{ $item['icon'] }}" aria-hidden="true"></i>
                </a>
            @endif
        </li>
    @endforeach
    @if (get_data_user('users'))
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
                            <a href="{{ route($item['route']) }}" class="{{ \Request::route()->getName() == $item['route'] ? 'active' : '' }}" title="{{ $item['title'] }}">
                                {{ $item['title'] }}
                            </a>
                        </li>
                    @endif
                @endforeach
            </ul>
        </li>
    @else
        <li>
            <a href="{{ route('get.login') }}" title="Login">Đăng nhập</a>
        </li>
    @endif

</ul>
