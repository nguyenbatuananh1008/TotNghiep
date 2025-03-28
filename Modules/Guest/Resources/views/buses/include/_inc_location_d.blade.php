<div class="col flex">
    <div class="form-group w-45 mr20">
        <label for="">Điểm đến</label>
        <select required name="b_destination_id[]" class="form-control js-select2">
            <option value="">Điểm đến</option>
            @foreach($locations as $item)
                <option value="{{ $item->id }}" {{ ($buses->b_destination_id ?? 0) == $item->id ? "selected" : "" }}>
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
        <label for="" style="width: 100px">Giờ đến : </label>
        <input class="datetimepicker" style="width: calc(100% - 100px)"
               value="{{ $buses->b_time_stop ?? \Carbon\Carbon::now() }}" name="b_time_stop[]" type="text">
    </div>
</div>