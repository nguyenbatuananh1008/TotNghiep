<form action="" enctype="multipart/form-data"  id="formRegister" method="POST" autocomplete="off">
    @csrf
    <div class="col-contact">
        <div class="form-group">
            <input type="text" required class="form-control" placeholder="Họ Tên" value="{{ old('name') }}" name="name">
            @if($errors->first('name'))
                <span class="text-danger">{{ $errors->first('name') }}</span>
            @endif
        </div>
        <div class="form-group">
            <input type="text" required class="form-control" value="{{ old('phone') }}" placeholder="Số điện thoại" name="phone">
            @if($errors->first('phone'))
                <span class="text-danger">{{ $errors->first('phone') }}</span>
            @endif
        </div>
        <div class="form-group">
            <label for="">Cấp độ</label>
            <select required name="level_drive" class="form-control">
                <option value="1">Lái xe</option>
                <option value="2">Điều phối xe</option>
                <option value="3">Full quyền</option>
            </select>
        </div>
        <div class="form-group">
            <input type="email" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}">
        </div>
        <div class="form-group">
            <input type="password" required name="password" class="form-control" placeholder="******">
            @if($errors->first('password'))
                <span class="text-danger">{{ $errors->first('password') }}</span>
            @endif
        </div>
        <button type="submit" class="btn btn-blue">Lưu thông tin</button>
    </div>
</form>