<form class="form-horizontal" autocomplete="off" method="POST" action="">
    @csrf
    <div class="row">
        <div class="col-lg-8">
            <div class="card  box-shadow-0">
                <div class="card-body pt-3">
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Name <span>(*)</span></label>
                        <input type="text" class="form-control keypress-count" required data-title-seo=".title_seo" value="{{ old('name', $route->name ?? '') }}" data-slug=".slug" name="name" >
                        @if($errors->first('name'))
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1"> Điểm đón <span>(*)</span></label>
                        <div class="SumoSelect js-sumo-select sumo_somename" tabindex="0" role="button" aria-expanded="true">
                            <select name="starting_point_id" required class="form-control SlectBox SumoUnder"  tabindex="-1">
                                @foreach($locations as $item)
                                    <option value="{{ $item->id }}" {{ ($route->starting_point_id ?? 0) == $item->id ? "selected" : "" }}>{{ $item->loc_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1"> Điểm đến <span>(*)</span></label>
                        <div class="SumoSelect js-sumo-select sumo_somename" tabindex="0" role="button" aria-expanded="true">
                            <select name="destination_id" required class="form-control SlectBox SumoUnder"  tabindex="-1">
                                @foreach($locations as $item)
                                    <option value="{{ $item->id }}" {{ ($route->destination_id ?? 0) == $item->id ? "selected" : "" }}>{{ $item->loc_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
{{--                    <div class="form-group">--}}
{{--                        <label for="exampleInputEmail1" class="required">Sort <span>(*)</span></label>--}}
{{--                        <input type="number"  class="form-control"  name="c_sort" value="{{ old('c_sort', $route->c_sort ?? '0') }}">--}}
{{--                        <span class="d-block text-warning">Thứ thự được sắp xếp từ bé đến lớn</span>--}}
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
            <div class="card  box-shadow-0 ">
                <div class="card-body pt-3">
                    <div class="form-group">
                        <label class="" for="exampleInputEmail1"> Hot </label>
                        <div class="form-group">
                            <label class="box-checkbox"> Nổi bật
                                <input type="radio" name="hot" {{ ($route->hot ?? 0) == 1 ? 'checked' : '' }}  value="1">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="form-group">
                            <label class="box-checkbox"> Không nổi bật
                                <input type="radio" name="hot" {{ ($route->hot ?? 0) ==  0 ? 'checked' : '' }} value="0">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
{{--            <div class="card  box-shadow-0 ">--}}
{{--                <div class="card-body pt-3">--}}
{{--                    <div class="form-group">--}}
{{--                        <label for="exampleInputEmail1"> Avatar </label>--}}
{{--                        <input type="file" class="filepond" name="avatar">--}}
{{--                        <input type="hidden" name="avatar" id="avatar_uploads">--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
    </div>
</form>
