<form action="" enctype="multipart/form-data"  id="formRegister" method="POST" autocomplete="off">
    @csrf
    <div class="col-contact">
        <div class="form-group">
            <label for="">Tên xe</label>
            <input type="text" required class="form-control" placeholder="Tên xe" name="v_name" value="{{ $vehicle->v_name ?? '' }}">
        </div>
        <div class="form-group">
            <label for="">Biển số</label>
            <input type="text" required class="form-control" placeholder="Biển số" name="v_license_plate" value="{{ $vehicle->v_license_plate ?? '' }}">
        </div>
        <div class="form-group">
            <label for="" class="d-block">Tiện ích xe</label>
            <textarea name="v_tags" id="" cols="30" class="form-control" rows="5" placeholder="Một số tiẹn nghi nhà xe, nhập cách nhau bởi dấu phẩi (Tiện nghi, sạch sẽ)">{{ $vehicle->v_tags ?? '' }}</textarea>
        </div>
        <div class="form-group">
            <label for="">Số chỗ</label>
            <input type="text" class="form-control" placeholder="Số ghế" name="v_number_seats" required value="{{ $vehicle->v_number_seats ?? '0' }}">
        </div>
        <div class="form-group">
            <label for="" class="d-block">Loại xe</label>
            <select name="v_type" id="" required class="w-100">
                <option value="">Loại xe</option>
                <option value="1" {{ ($vehicle->v_type ?? 0) == 1 ? "selected" : "" }}>Giường nằm</option>
                <option value="2" {{ ($vehicle->v_type ?? 0) == 2 ? "selected" : "" }}>Ngồi</option>
            </select>
        </div>
        <div class="form-group">
            <label for="" class="d-block">Phân Loại</label>
            @foreach(getTypeCar() as $key => $item)
                <label class="box-container"> {{ $item }}
                        <input type="radio" name="v_action" {{ ($vehicle->v_action ?? '') == $key ? "checked" : "" }} class="js-item-ticker"  value="{{ $key }}">
                        <span class="checkmark"></span>
                </label>
            @endforeach
        </div>
        <div class="form-group">
            <label for="">Ảnh xe</label>
            <input type="file" value="" name="v_avatar" class="form-control">
            @if (isset($vehicle->v_avatar))
                <img src="{{ pare_url_file($vehicle->v_avatar) }}" style="width: 200px;height: 80px;object-fit: cover;margin-top: 15px;" alt="">
            @endif
        </div>
        <div class="form-group">
            <label for="">Mô tả vị trí xe</label>
            <input type="file" value="" name="v_map" class="form-control">
            @if (isset($vehicle->v_map))
                <img src="{{ pare_url_file($vehicle->v_map) }}" style="width: 200px;height: 80px;object-fit: cover;margin-top: 15px;" alt="">
            @endif
        </div>
        <button type="submit" class="btn btn-blue">Lưu thông tin</button>
    </div>
</form>