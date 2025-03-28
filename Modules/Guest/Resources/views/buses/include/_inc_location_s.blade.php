<div class="col flex">
    <div class="form-group w-45 mr20">
        <label for="">Điểm xuất phát</label>
        <select required name="b_starting_point_id[]" class="form-control js-select2">
            <option value="">Điểm xuất phát</option>
            @foreach($locations as $item)
                <option value="{{ $item->id }}" {{ ($buses->b_starting_point_id ?? 0) == $item->id ? "selected" : "" }}>
                    <?php $str = '';for ($i = 0; $i < $item->level; $i++) {
                        echo $str;
                        $str .= '--- ';
                    }?>
                    {{ $item->loc_name }}
                </option>
            @endforeach
        </select>
    </div>
    <div class="form-group w-45">
        <label for="" class="d-block">Giờ đi : </label>
        <input class="datetimepicker" style="width: calc(100%)"
               value="{{ $buses->b_time_start ?? \Carbon\Carbon::now() }}" name="b_time_start[]" type="text">
    </div>
</div>