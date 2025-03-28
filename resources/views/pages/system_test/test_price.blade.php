@extends('layouts.app_test')
@section('content_test')
    <div class="col-sm-8">
        <form class="form-inline" action="" method="GET">
            <label for="email2" class="mb-2 mr-sm-2">Nhập giá:</label>
            <input type="text" value="{{ Request::get('price') }}" class="form-control mb-2 mr-sm-2" placeholder="1200000000" name="price">
            <button type="submit" class="btn btn-primary mb-2">Kết quả</button>
        </form>
        <p>Kết quả : <b>{{ $price }}</b></p>
    </div>
@stop
