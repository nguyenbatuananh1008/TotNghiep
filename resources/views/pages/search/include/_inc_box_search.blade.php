<form action="" class="box-search-main-top">

    <select name="s" class="js-select2">
        <option value="">Điểm xuất phát</option>
        @foreach($locations ?? [] as $item)
            <option value="{{ $item->id }}" {{ Request::get('s') == $item->id ? "selected" : "" }}>{{ $item->loc_name }}</option>
        @endforeach
    </select>

    <select name="d" class="js-select2">
        <option value="">Điểm đến</option>
        @foreach($locations ?? [] as $item)
            <option value="{{ $item->id }}" {{ Request::get('d') == $item->id ? "selected" : "" }}>{{ $item->loc_name }}</option>
        @endforeach
    </select>

    <input data-toggle="datepicker" name="date"
           value="{{ \Request::get('date') ? \Request::get('date') : \Carbon\Carbon::now()->format('Y-m-d') }}"
           style="width: 100%"/>
    <button type="submit" class="btn"><i class="la la-search"></i> Tìm vé</button>
</form>