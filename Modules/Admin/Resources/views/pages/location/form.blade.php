<form class="form-horizontal" autocomplete="off" method="POST" action="">
    @csrf
    <div class="row">
        <div class="col-lg-8">
            <div class="card  box-shadow-0">
                <div class="card-body pt-3">
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Name <span>(*)</span></label>
                        <input type="text" class="form-control keypress-count" required data-title-seo=".title_seo" value="{{ old('loc_name', $location->loc_name ?? '') }}" data-slug=".slug" name="loc_name" >
                        @if($errors->first('loc_name'))
                            <span class="text-danger">{{ $errors->first('loc_name') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Slug <span>(*)</span></label>
                        <input type="text"  class="form-control slug"  required name="loc_slug" value="{{ old('loc_slug', $location->loc_slug ?? '') }}">
                        @if($errors->first('loc_slug'))
                            <span class="text-danger">{{ $errors->first('loc_slug') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Parent <span>(*)</span></label>
                        <div class="SumoSelect js-sumo-select sumo_somename" tabindex="0" role="button" aria-expanded="true">
                            <select name="loc_parent_id" class="form-control SlectBox SumoUnder"  tabindex="-1">
                                <option value="0">__ROOT__</option>
                                @foreach($locations as $item)
                                    <option title="{{ $item->loc_name }}" {{ ($location->loc_parent_id ?? 0 ) == $item->id ? "selected" : "" }} value="{{ $item->id }}">
                                        <?php $str = '';for ($i = 0; $i < $item->level; $i++) {
                                            echo $str;
                                            $str .= '--- ';
                                        }?>
                                        {{ $item->loc_name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
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
