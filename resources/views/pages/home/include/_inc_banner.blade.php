<div class="banner">
    <div class="container banner-content">
        <div class="box-search">
            <h1>{{ $pageContent->name ?? "" }}</h1>
{{--            <div class="box-search__services">--}}
{{--                <ul id="tab-menu-search">--}}
{{--                    <li class="active tab-1" data-class="tab-1">Mua bán</li>--}}
{{--                    <li class="tab-2" data-class="tab-2">Cho thuê</li>--}}
{{--                    <li class="tab-3" data-class="tab-3">Dự án</li>--}}
{{--                </ul>--}}
{{--            </div>--}}
            <form action="{{ route('get.search') }}" class="form-search" method="get">
                <select name="s" id="" class="js-select2 location-one" style="font-family:FontAwesome;">
                    <option value="" class="option">
                        Điểm xuất phát
                    </option>
                    @foreach($locations ?? [] as $item)
                        <option value="{{ $item->id }}" {{ Request::get('s') == $item->id ? "selected" : "" }}>{{ $item->loc_name }}</option>
                    @endforeach
                </select>
                <select name="d" id="" class="js-select2">
                    <option value=""> Điểm đến</option>
                    @foreach($locations ?? [] as $item)
                        <option value="{{ $item->id }}" {{ Request::get('d') == $item->id ? "selected" : "" }}>{{ $item->loc_name }}</option>
                    @endforeach
                </select>
                <input data-toggle="datepicker" name="date" value="{{ \Carbon\Carbon::now()->format('Y-m-d') }}" />
                <div class="form-search__banner-btn">
                    <button type="submit" class="btn btn-blue btn-lg btn-search">
                        <i class="la la-search"></i> Tìm vé
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
