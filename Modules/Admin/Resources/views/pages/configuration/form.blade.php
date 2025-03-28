<form class="form-horizontal" autocomplete="off" method="POST" action="">
    @csrf
    <div class="row">
        <div class="col-lg-8">
            <div class="card  box-shadow-0">
                <h4 class="card-title pt-3 pl-3 mb-1">Thông tin cơ bản</h4>
                <div class="card-body pt-3">
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Email <span>(*)</span></label>
                        <input type="text" class="form-control"  value="{{ old('email', $configuration->email ?? '') }}" name="email" >
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Company <span>(*)</span></label>
                        <input type="text" class="form-control"  value="{{ old('company', $configuration->company ?? '') }}" name="company" >
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Address <span>(*)</span></label>
                        <input type="text" class="form-control"  value="{{ old('address', $configuration->address ?? '') }}" name="address" >
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Hotline <span>(*)</span></label>
                        <input type="text" class="form-control"  value="{{ old('hotline', $configuration->hotline ?? '') }}" name="hotline" >
                    </div>

                </div>
            </div>
            <div class="card  box-shadow-0">
                <h4 class="card-title pt-3 pl-3 mb-1">Footer</h4>
                <div class="card-body pt-3">
                    <div class="form-group">
                        <textarea name="footer_bottom" class="form-control" id="" cols="30" rows="3">{!! old('footer_bottom', $configuration->footer_bottom ?? '') !!}</textarea>
                    </div>
                </div>
            </div>
            <div class="card  box-shadow-0">
                <h4 class="card-title pt-3 pl-3 mb-1">Map</h4>
                <div class="card-body pt-3">
                    <div class="form-group">
                        <textarea name="map" class="form-control" id="" cols="30" rows="3">{!! old('map', $configuration->map ?? '') !!}</textarea>
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
                        <label for="exampleInputEmail1"> Điểm user đăng ký </label>
                        <input type="number" class="form-control" name="point_register" value="{{ old('email', $configuration->point_register ?? '') }}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1"> Điểm user hoàn thành chuyến đi </label>
                        <input type="number" class="form-control" name="point_ticket_done" value="{{ old('email', $configuration->point_ticket_done ?? '') }}">
                    </div>
                </div>
            </div>
            <div class="card  box-shadow-0 ">
                <div class="card-body pt-3">
                    <div class="form-group">
                        <label for="exampleInputEmail1"> Logo </label>
                        <input type="file" class="filepond" name="avatar">
                        <input type="hidden" value="{{ $configuration->logo ?? '' }}" name="logo" id="avatar_uploads">
                    </div>
                    @if(isset($configuration->logo))
                        <a href="">
                            <img src="{{ pare_url_file($configuration->logo) }}" style="width: 120px;height: 60px" alt="">
                        </a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</form>
