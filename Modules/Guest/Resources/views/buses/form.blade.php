<form action="" enctype="multipart/form-data" id="formRegister" method="POST" autocomplete="off">
    @csrf
    <div class="col-contact">
        <div class="form-group">
            <label for="">Xe</label>
            <select required name="b_vehicle_id" class="form-control js-select2">
                <option value="">Chọn xe</option>
                @foreach($vehicles as $item)
                    <option value="{{ $item->id }}" {{ ($buses->b_vehicle_id ?? 0) == $item->id ? "selected" : "" }}>{{ $item->v_name }}</option>
                @endforeach
            </select>
        </div>
        <div class="card">
            <h4>Điểm đón / thời gian đón</h4>
            @if(isset($buses))
                @foreach($mapsStart ?? [] as $itemMap)
                    <div class="col flex" style="position: relative">
                        <div class="form-group w-45 mr20">
                            <label for="">Điểm xuất phát</label>
                            <select required name="b_starting_point_id[]" class="form-control js-select2">
                                <option value="">Điểm xuất phát</option>
                                @foreach($locations as $item)
                                    <option value="{{ $item->id }}" {{ ($itemMap->bl_location_id ?? 0) == $item->id ? "selected" : "" }}>
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
                                   value="{{ $itemMap->bl_time ?? \Carbon\Carbon::now() }}" name="b_time_start[]" type="text">
                        </div>
                        <a class="js-delete" style="position:absolute ;top: 50%;transform: translateY(-50%);color: red;right: 0" href="{{ route('ajax_get_guest.buses.delete_location', $itemMap->id) }}">Huỷ bỏ</a>
                    </div>
                    <input type="hidden" name="mapStart[]" value="{{ $itemMap->id }}">
                @endforeach
            @else
                @include('guest::buses.include._inc_location_s')
            @endif

            <a  href="{{ route('ajax_get_guest.buses.location',['type' => 1,'id' => $buses->id ?? 0]) }}" class="js-add" style="color: #ef7733">Thêm mới <i class="fa fa-plus-circle"></i></a>
        </div>
        <div class="card mt20">
            <h4>Điểm đón / thời gian đón</h4>
            @if(isset($buses))
                @foreach($mapsStop ?? [] as $itemMap)
                    <div class="col flex tr" style="position: relative">
                        <div class="form-group w-45 mr20">
                            <label for="">Điểm đến</label>
                            <select required name="b_destination_id[]" class="form-control js-select2">
                                <option value="">Điểm đến</option>
                                @foreach($locations as $item)
                                    <option value="{{ $item->id }}" {{ ($itemMap->bl_location_id ?? 0) == $item->id ? "selected" : "" }}>
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
                                   value="{{ $itemMap->bl_time ?? \Carbon\Carbon::now() }}" name="b_time_stop[]" type="text">
                        </div>
                        <input type="hidden" name="mapStop[]" value="{{ $itemMap->id }}">
                        <a class="js-delete" style="position:absolute ;top: 50%;transform: translateY(-50%);color: red;right: 0" href="{{ route('ajax_get_guest.buses.delete_location', $itemMap->id) }}">Huỷ bỏ</a>
                    </div>
                @endforeach
            @else
                @include('guest::buses.include._inc_location_d')
            @endif
            <a href="{{ route('ajax_get_guest.buses.location',['type' => 2,'id' => $buses->id ?? 0]) }}" class="js-add" style="color: #ef7733">Thêm mới <i class="fa fa-plus-circle"></i></a>
        </div>
        <div class="form-group">
            <label for="">Giá vé</label>
            <input type="text" class="form-control price" placeholder="300,000" name="b_price" required
                   value="{{ number_format($buses->b_price ?? 0,0,'',',' ?? 0) }}">
        </div>
        <button type="submit" class="btn btn-blue">Lưu thông tin</button>
    </div>
</form>