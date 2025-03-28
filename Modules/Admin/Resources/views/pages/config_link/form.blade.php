<form class="form-horizontal" autocomplete="off" method="POST" action="">
    @csrf
    <div class="row">
        <div class="col-lg-8">
            <div class="card  box-shadow-0">
                <div class="card-body pt-3">
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Name <span>(*)</span></label>
                        <input type="text" class="form-control" required value="{{ old('loc_name', $link->cl_title ?? '') }}"  name="cl_title" >
                        @if($errors->first('cl_title'))
                            <span class="text-danger">{{ $errors->first('cl_title') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Sort <span>(*)</span></label>
                        <input type="number" class="form-control" required value="{{ old('cl_sort', $link->cl_sort ?? '1') }}"  name="cl_sort" >
                        @if($errors->first('cl_sort'))
                            <span class="text-danger">{{ $errors->first('cl_sort') }}</span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="card  box-shadow-0">
                <div class="card-body pt-3">
                    @if(isset($listsLink) && !empty($listsLink))
                        @foreach($listsLink as $key => $item)
                            <div class="row {{ $key == 0 ? 'box-clone' : '' }}">
                                <div class="form-group col-sm-5">
                                    <label for="exampleInputEmail1" class="required">Tiêu đề <span>(*)</span></label>
                                    <input type="text" class="form-control" required value="{{ $item['title'] }}"  name="title[]" >
                                </div>
                                <div class="form-group col-sm-7">
                                    <label for="exampleInputEmail1" class="required">Link <span>(*)</span></label>
                                    <input type="text" class="form-control" required value="{{ $item['url'] }}"  name="link[]" >
                                </div>
                            </div>
                        @endforeach
                    @else
                    <div class="row box-clone">
                        <div class="form-group col-sm-5">
                            <label for="exampleInputEmail1" class="required">Tiêu đề <span>(*)</span></label>
                            <input type="text" class="form-control" required value=""  name="title[]" >
                        </div>
                        <div class="form-group col-sm-7">
                            <label for="exampleInputEmail1" class="required">Link <span>(*)</span></label>
                            <input type="text" class="form-control" required value=""  name="link[]" >
                        </div>
                    </div>
                    @endif
                    <a href="" class="js-add-group">Thêm mới</a>
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
