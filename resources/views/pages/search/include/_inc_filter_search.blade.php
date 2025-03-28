<div class="search-page__params js-box-show-filter">
    <h2>Bộ lọc tìm kiếm</h2>
    <a href="" class="js-close-filter close-filter"><i class="la la-times"></i></a>
    <form action="">
        <div class="form-location-mb">
            <h6>Địa điểm</h6>
            <div class="form-group">
                <label for="" class="d-block">Điểm xuất phát</label>
                <select name="s"  class="js-select2">
                    <option value="">Điểm xuất phát</option>
                    @foreach($locations ?? [] as $item)
                        <option value="{{ $item->id }}" {{ Request::get('s') == $item->id ? "selected" : "" }}>{{ $item->loc_name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="" class="d-block">Điểm đến</label>
                <select name="d" class="js-select2">
                    <option value="">Điểm đến</option>
                    @foreach($locations ?? [] as $item)
                        <option value="{{ $item->id }}" {{ Request::get('d') == $item->id ? "selected" : "" }}>{{ $item->loc_name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="" class="d-block">Thời gian</label>
                <input data-toggle="datepicker" name="date" value="{{ \Request::get('date') ? \Request::get('date') : \Carbon\Carbon::now()->format('Y-m-d') }}" style="width: 100%" />
            </div>
        </div>
        <h6>Xe</h6>
        <div class="form-group">
            <label for="" class="d-block">Loại xe</label>
            <ul>
                @foreach(getTypeCar() as $key => $item)
                    <li class="js-param-search {{ \Request::get('v_a') == $key ? 'active' : '' }}">
                        <a href="{{ request()->fullUrlWithQuery(['v_a' =>  $key]) }}"> <span>{{ $item }}</span> </a>
                    </li>
                @endforeach
            </ul>
        </div>
        <div class="form-group">
            <label for="" class="d-block">Nhà xe</label>
            <select name="w" class="js-select2">
                <option value="">Chọn nhà xe</option>
                @foreach($guests as $item)
                    <option value="{{ $item->id }}" {{ Request::get('w') == $item->id ? "selected" : "" }}>{{ $item->name }}</option>
                @endforeach
            </select>
        </div>
        <h6>Thời gian</h6>
        <div class="form-group">
            <label for="" class="d-block">Giờ xuất phát</label>
            <select name="t_start" class="js-select2">
                <option value="">__:__</option>
                @for ($i = 1 ; $i <= 24 ; $i ++)
                    <option value="{{ $i }}" {{ Request::get('t_start') == $i ? "selected" : "" }}>{{ $i }}:00</option>
                @endfor
            </select>
        </div>
        <div class="form-group">
            <label for="" class="d-block">Giờ đến</label>
            <select name="t_stop" class="js-select2">
                <option value="">__:__</option>
                @for ($i = 1 ; $i <= 24 ; $i ++)
                    <option value="{{ $i }}" {{ Request::get('t_stop') == $i ? "selected" : "" }}>{{ $i }}:00</option>
                @endfor
            </select>
        </div>

        <div class="form-group">
            <label for="" class="d-block">Loại ghế</label>
            <select name="v_type" class="js-select2">
                <option value="">Chọn loại ghế</option>
                <option value="1" {{ Request::get('v_type') == 1 ? "selected" : "" }}>Nằm</option>
                <option value="2" {{ Request::get('v_type') == 2 ? "selected" : "" }}>Ngồi</option>
            </select>
        </div>
        <div class="form-group text-center">
            <button type="submit" class="btn-orange btn btn-radius" style="width: 150px;"><i class="la la-search"></i> Tìm vé</button>
        </div>
    </form>
</div>