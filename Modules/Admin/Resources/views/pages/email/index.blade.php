@extends('admin::layouts.master')
@section('content')
    <div class="container-fluid">
        <!-- breadcrumb -->
        <div class="breadcrumb-header justify-content-between">
            <div class="my-auto">
                <div class="d-flex">
                    <h4 class="content-title mb-0 my-auto">Config Email</h4>
                    <span class="text-muted mt-1 tx-13 ml-2 mb-0">/ Create</span>
                </div>
            </div>
        </div>
        <!-- breadcrumb -->
        <!-- row -->
        <form class="form-horizontal" autocomplete="off" method="POST" action="">
            @csrf
            <div class="row">
                <div class="col-lg-8">
                    <div class="card  box-shadow-0">
                        <div class="card-body pt-3">
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="required">Drive <span>(*)</span></label>
                                <input type="text"  class="form-control" required  name="mail_driver" placeholder="smtp" value="{{ old('mail_driver', $email->mail_driver ?? "") }}">
                                @if($errors->first('mail_driver'))
                                    <span class="text-danger">{{ $errors->first('mail_driver') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="required">Port <span>(*)</span></label>
                                <input type="text"  class="form-control" required  name="mail_port" placeholder="587" value="{{ old('mail_port', $email->mail_port ?? "") }}">
                                @if($errors->first('mail_port'))
                                    <span class="text-danger">{{ $errors->first('mail_port') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="required">Host <span>(*)</span></label>
                                <input type="text"  class="form-control" required placeholder="smtp.mailgun.org"  name="mail_host" value="{{ old('mail_host', $email->mail_host ?? "") }}">
                                @if($errors->first('mail_host'))
                                    <span class="text-danger">{{ $errors->first('mail_host') }}</span>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1" class="required">Username <span>(*)</span></label>
                                <input type="text"  class="form-control" required placeholder="admin@tailieu247.net"  name="mail_username" value="{{ old('mail_username', $email->mail_username ?? "") }}">
                                @if($errors->first('mail_username'))
                                    <span class="text-danger">{{ $errors->first('mail_username') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="required">Password <span>(*)</span></label>
                                <input type="text"  class="form-control" required placeholder="df87f4f6c0d68e8415a8e03c5ba0731a-3e51f8d2-20c7a150"  name="mail_password" value="{{ old('mail_password', $email->mail_password ?? "") }}">
                                @if($errors->first('mail_password'))
                                    <span class="text-danger">{{ $errors->first('mail_password') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="required">Domain <span>(*)</span></label>
                                <input type="text"  class="form-control" required placeholder="Tài liệu 247 - Chuyên tài liệu file word"  name="mail_domain" value="{{ old('mail_domain', $email->mail_domain ?? "") }}">
                                @if($errors->first('mail_domain'))
                                    <span class="text-danger">{{ $errors->first('mail_domain') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="required">User Send  <span>(*)</span></label>
                                <input type="text"  class="form-control" required placeholder="admin@tailieu247.net"  name="mail_from_address" value="{{ old('mail_from_address', $email->mail_from_address ?? "") }}">
                                @if($errors->first('mail_from_address'))
                                    <span class="text-danger">{{ $errors->first('mail_from_address') }}</span>
                                @endif
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

    </div>
@stop
