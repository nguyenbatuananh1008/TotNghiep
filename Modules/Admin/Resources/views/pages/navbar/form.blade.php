<form class="form-horizontal" autocomplete="off" method="POST" action="">
    @csrf
    <div class="row">
        <div class="col-lg-8">
            <div class="card  box-shadow-0">
                <div class="card-body pt-3">
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Name <span>(*)</span></label>
                        <input type="text" class="form-control" value="{{ old('nb_name', $navBar->nb_name ?? '') }}"
                               name="nb_name">
                        @if($errors->first('nb_name'))
                            <span class="text-danger">{{ $errors->first('nb_name') }}</span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Icon <span>(*)</span></label>
                        <input type="text" class="form-control" value="{{ old('nb_icon', $navBar->nb_icon ?? '') }}"
                               name="m_icon">
                        <span class="d-block"><a href="https://fontawesome.com/v4.7.0/icons/" target="_blank">Click xem mau</a></span>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required" style="margin-right: 10px">Type
                            <span>(*)</span></label>
                        <div class="form-group  d-flex">
                            @foreach($type as $key => $item)
                                <label class="box-checkbox js-type-navbar"
                                       data-url="{{ route('get_admin_ajax.navbar.type', $key) }}"
                                       style="margin-right: 10px;padding-left: 25px">
                                    <input type="radio" name="nb_type"
                                           {{ ($navBar->nb_type ?? ($key == 1 ? 1 : 0)) == $key ? 'checked' : '' }}  value="{{ $key }}">{{ $item['name'] }}
                                    <span class="checkmark"></span>
                                </label>
                            @endforeach
                        </div>
                    </div>
                    <div id="dataType">
                        <div class="form-group">
                            <label for="url" class="required">Url <span>(*)</span></label>
                            <input type="text" class="form-control" value="{{ old('nb_url', $navBar->nb_url ?? '') }}"
                                   name="nb_url">
                            @if($errors->first('nb_url'))
                                <span class="text-danger">{{ $errors->first('nb_url') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Sort <span>(*)</span></label>
                        <input type="number" class="form-control" name="nb_sort"
                               value="{{ old('nb_sort', $navBar->nb_sort ?? '0') }}">
                        <span class="d-block text-warning">Thứ thự được sắp xếp từ bé đến lớn</span>
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
            <div class="card  box-shadow-0 ">
                <div class="card-body pt-3">
                    <div class="form-group">
                        <label for="exampleInputEmail1"> Rel ( Thuộc tính thẻ link) <span>(*)</span></label>
                        <input type="text" class="form-control" name="nb_rel" value="{{ old('nb_rel', $navBar->nb_rel ?? '') }}" id="inputName" placeholder="">
                    </div>
                </div>
            </div>
            <div class="card  box-shadow-0 ">
                <div class="card-body pt-3">
                    <div class="form-group">
                        <label for="exampleInputEmail1"> Status <span>(*)</span></label>
                        <div class="SumoSelect js-sumo-select sumo_somename" tabindex="0" role="button"
                             aria-expanded="true">
                            <select name="nb_status" class="form-control SlectBox SumoUnder" tabindex="-1">
                                <option title="Public" value="1" {{ ($navBar->nb_status ?? 1) == 1 ? "selected" : "" }}>Public</option>
                                <option title="hide" value="0" {{ ($navBar->nb_status ?? 1) == 0 ? "selected" : "" }}>Hide</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
