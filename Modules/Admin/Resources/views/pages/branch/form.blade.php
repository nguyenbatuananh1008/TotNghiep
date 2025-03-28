<form class="form-horizontal" autocomplete="off" method="POST" action="">
    @csrf
    <div class="row">
        <div class="col-lg-8">
            <div class="card  box-shadow-0">
                <div class="card-body pt-3">
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Title <span>(*)</span></label>
                        <input type="text" class="form-control" required  value="{{ old('b_title', $branch->b_title ?? '') }}"  name="b_title" >
                        @if($errors->first('b_title'))
                            <span class="text-danger">{{ $errors->first('b_title') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Address <span>(*)</span></label>
                        <input type="text" class="form-control" required placeholder="Địa chỉ chi tiết"  value="{{ old('b_address', $branch->b_address ?? '') }}"  name="b_address" >
                        @if($errors->first('b_address'))
                            <span class="text-danger">{{ $errors->first('b_address') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Time <span>(*)</span></label>
                        <input type="text" class="form-control" required placeholder="Thời gian mở cửa"  value="{{ old('b_business_hours', $branch->b_business_hours ?? '') }}"  name="b_business_hours" >
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Phone <span>(*)</span></label>
                        <input type="text" class="form-control" required placeholder="Số điện thoại"  value="{{ old('b_phone', $branch->b_phone ?? '') }}"  name="b_phone" >
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Parent <span>(*)</span></label>
                        <div class="SumoSelect js-sumo-select sumo_somename" tabindex="0" role="button" aria-expanded="true">
                            <select name="b_location_city_id" class="form-control SlectBox SumoUnder"  tabindex="-1">
                                <option value="0">__City__</option>
                                @foreach($locations as $item)
                                    <option title="{{ $item->loc_name }}" {{ ($branch->b_location_city_id ?? 0 ) == $item->id ? "selected" : "" }} value="{{ $item->id }}">
                                        {{ $item->loc_name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card  box-shadow-0">
                <h4 class="card-title pt-3 pl-3 mb-1">Map</h4>
                <div class="card-body pt-3">
                    <div class="form-group">
                        <textarea name="b_map" class="form-control" id="" placeholder="Nhúng google map" cols="30" rows="3">{!! old('b_map', $branch->b_map ?? '') !!}</textarea>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-lg-4">
            <div class="card  box-shadow-0 ">
                <div class="card-body pt-3">
                    <div class="form-group">
                        <label for="exampleInputEmail1"> Action <span>(*)</span></label>
                        <div>
                            <button class="btn btn-info"><i class="la la-save"></i> Save</button>
                            <button class="btn btn-success"><i class="la la-check-circle"></i> Save & Edit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
