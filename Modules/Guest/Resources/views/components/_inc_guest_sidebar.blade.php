<div class="box">
    <ul>
        <li><a href="">
                <img src="{{ asset('images/icon/money.svg') }}" style="width:24px;height: 24px " alt="">
                <b>{{ get_data_user('users','point') }} điểm</b></a>
        </li>
        @foreach(config('user.menu_guest') as $item)
            @if(in_array(get_data_user('users','is_guest'), $item['level']) || get_data_user('users','is_guest') == 1)
                <li>
                    <a href="{{ route($item['route']) }}" class="{{ \Request::route()->getName() == $item['route'] ? 'active' : '' }}" title="{{ $item['title'] }}">
                        <img src="{{ asset($item['img']) }}" style="width: 24px;height: 24px;" alt="">
                        <span>{{ $item['title'] }}</span>
                    </a>
                </li>
            @endif
        @endforeach
    </ul>
</div>