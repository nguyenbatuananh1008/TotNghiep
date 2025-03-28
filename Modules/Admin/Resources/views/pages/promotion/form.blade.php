<form class="form-horizontal" autocomplete="off" method="POST" action="">
    @csrf
    <div class="row">
        <div class="col-lg-8">
            <div class="card  box-shadow-0">
                <div class="card-body pt-3">
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Price <span>(*)</span></label>
                        <input type="text" class="form-control" required  value="{{ old('pc_price', $promotion->pc_price ?? '') }}"  name="pc_price" >
                        @if($errors->first('pc_price'))
                            <span class="text-danger">{{ $errors->first('pc_price') }}</span>
                        @endif
                        <span class="d-block text-warning">Mỗi mã khuyến mãi sẽ được áp dụng / 1 đơn cho nhiều vé</span>
                    </div>
{{--                    <div class="form-group">--}}
{{--                        <label for="exampleInputEmail1" class="required">Price <span>(*)</span></label>--}}
{{--                        <input type="text" class="form-control" required  value="{{ old('pc_price', $location->loc_name ?? '') }}"  name="pc_price" >--}}
{{--                        @if($errors->first('pc_price'))--}}
{{--                            <span class="text-danger">{{ $errors->first('pc_price') }}</span>--}}
{{--                        @endif--}}
{{--                    </div>--}}
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

{{--            <div class="card  box-shadow-0 ">--}}
{{--                <div class="card-body pt-3">--}}
{{--                    <div class="form-group">--}}
{{--                        <label class="" for="exampleInputEmail1"> Hot </label>--}}
{{--                        <div class="form-group">--}}
{{--                            <label class="box-checkbox"> Nổi bật--}}
{{--                                <input type="radio" name="c_hot" {{ ($location->c_hot ?? 0) == 1 ? 'checked' : '' }}  value="1">--}}
{{--                                <span class="checkmark"></span>--}}
{{--                            </label>--}}
{{--                        </div>--}}
{{--                        <div class="form-group">--}}
{{--                            <label class="box-checkbox"> Không nổi bật--}}
{{--                                <input type="radio" name="c_hot" {{ ($location->c_hot ?? 0) ==  0 ? 'checked' : '' }} value="0">--}}
{{--                                <span class="checkmark"></span>--}}
{{--                            </label>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
    </div>
</form>
