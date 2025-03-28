<div class="content-detail">
    <form action="" method="POST">
        @csrf
        <div class="content-detail__detail">
            @if(isset($buses->starting) && isset($buses->destination))
                <div class="header">
                    <h1>[Đặt vé] {{ $buses->starting->loc_name }} đi {{ $buses->destination->loc_name }}</h1>
                    <p>[Nhà xe] {{ $guest->name }}</p>
                </div>
            @endif
            <div class="text-item main-text">
                <h4>Thông tin chính</h4>
                <div class="list-info">
                    <ul>
                        <li><span>Giá : </span>{{ number_format($buses->b_price,0,',','.') }}đ</li>
                        <li><span>Giờ xuất phát : </span>{{ (new \Carbon\Carbon($buses->b_time_start))->format('H:i')  }}</li>
                        <li><span>Giờ đến: </span>{{ (new \Carbon\Carbon($buses->b_time_stop))->format('H:i')  }}</li>
                        <li>
                            <span>Ngày đi: </span>
                            <input data-toggle="datepicker" name="date" id="date-ticket" data-url="{{ route('get.ticket.process', $id) }}" required value="{{ \Carbon\Carbon::now()->format('Y-m-d') }}" />
                            <input type="hidden" id="actionID" value="{{ $id }}"><span style="color: red;font-size: 14px">Click để thay đổi ngày đi</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="text-item description">
                <div class="flex">
                    <div class="w-50">
                        <h4>Điểm xuất phát</h4>
                        <div class="lists">
                            @foreach($mapsStart as $key => $item)
                                <div class="item" style="width: 100% !important;">
                                    <label class="box-container"><b>{{ (new \Carbon\Carbon($item->bl_time))->format('H:i')  }}</b> • {{ $item->location->loc_name ?? "[N\A]" }}
                                        <input type="radio" required name="location_start" {{ $key == 0 ? "checked" : "" }} class=""  value="{{ $item->id }}">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="w-50">
                        <h4 style="text-align: left">Điểm đến</h4>
                        <div class="lists">
                            @foreach($mapsStop as $key => $item)
                                <div class="item" style="width: 100% !important;">
                                    <label class="box-container"><b>{{ (new \Carbon\Carbon($item->bl_time))->format('H:i')  }}</b> • {{ $item->location->loc_name ?? "[N\A]" }}
                                        <input type="radio" {{ $key == 0 ? "checked" : "" }} required name="location_stop" class=""  value="{{ $item->id }}">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            @endforeach
                        </div>

                    </div>
                </div>
                <div class="flex">
                    <div class="form-group w-30">
                        <label class="box-container js-pick-home"><b>Đón tại nhà</b>
                            <input type="checkbox" name="address_current"  class=""  value="1">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                    <div class="form-group w-70 hide js-box-pick-home">
                        <label for="">Điểm đón tại nhà</label>
                        <input type="text" name="address_pick_home" class="form-control" disabled >
                    </div>
                </div>
            </div>
            <div class="text-item description item-lists-ticket" style="display: flex">
                <div class="w-40">
                    <h4>Chọn vé</h4>
                    <div class="lists" id="lists-ticket">
                        @include('pages.ticket.include._inc_ticket',['buses' => $buses,'tickers' => $tickers,'vehicle' => $vehicle])
                        @if($errors->first('tickets'))
                            <span class="text-danger">{{ $errors->first('tickets') }}</span>
                        @endif
                    </div>
                    @if($guest->about_price)
                        <p><b><i>{{ $guest->about_price }}</i></b></p>
                    @endif
                    <hr>
                    <h4>Chú thích</h4>
                    <div style="display: flex;justify-content: space-between;">
                        <label class="box-container-disabled js-add-ticket">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="25" viewBox="0 0 28 44" style="width: 22px; height: 37px;">
                                <g fill="#fff" stroke="#000" stroke-width=".5"><g>
                                        <rect width="28" height="44" rx="4" stroke="none"></rect>
                                        <rect x=".25" y=".25" width="27.5" height="43.5" rx="3.75" fill="none"></rect>
                                    </g>
                                    <g transform="translate(2)"><rect width="24" height="34" rx="2" stroke="none"></rect>
                                        <rect x=".25" y=".25" width="23.5" height="33.5" rx="1.75" fill="none"></rect>
                                    </g>
                                    <g transform="translate(6 36)">
                                        <rect width="16" height="8" rx="2" stroke="none"></rect>
                                        <rect x=".25" y=".25" width="15.5" height="7.5" rx="1.75" fill="none"></rect>
                                    </g>
                                </g>
                            </svg>
                            <span>Còn trống</span>
                        </label>
                        <label class="box-container-disabled js-add-ticket active-current">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="25" viewBox="0 0 28 44" style="width: 22px; height: 37px;">
                                <g fill="#fff" stroke="#000" stroke-width=".5"><g>
                                        <rect width="28" height="44" rx="4" stroke="none"></rect>
                                        <rect x=".25" y=".25" width="27.5" height="43.5" rx="3.75" fill="none"></rect>
                                    </g>
                                    <g transform="translate(2)"><rect width="24" height="34" rx="2" stroke="none"></rect>
                                        <rect x=".25" y=".25" width="23.5" height="33.5" rx="1.75" fill="none"></rect>
                                    </g>
                                    <g transform="translate(6 36)">
                                        <rect width="16" height="8" rx="2" stroke="none"></rect>
                                        <rect x=".25" y=".25" width="15.5" height="7.5" rx="1.75" fill="none"></rect>
                                    </g>
                                </g>
                            </svg>
                            <span>Đã đặt</span>
                        </label>
                        <label class="box-container-disabled js-add-ticket active">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="25" viewBox="0 0 28 44" style="width: 22px; height: 37px;">
                                <g fill="#fff" stroke="#000" stroke-width=".5"><g>
                                        <rect width="28" height="44" rx="4" stroke="none"></rect>
                                        <rect x=".25" y=".25" width="27.5" height="43.5" rx="3.75" fill="none"></rect>
                                    </g>
                                    <g transform="translate(2)"><rect width="24" height="34" rx="2" stroke="none"></rect>
                                        <rect x=".25" y=".25" width="23.5" height="33.5" rx="1.75" fill="none"></rect>
                                    </g>
                                    <g transform="translate(6 36)">
                                        <rect width="16" height="8" rx="2" stroke="none"></rect>
                                        <rect x=".25" y=".25" width="15.5" height="7.5" rx="1.75" fill="none"></rect>
                                    </g>
                                </g>
                            </svg>
                            <span>Đã chọn</span>
                        </label>

                    </div>
                </div>
                <div class="w-60">
                    <h4 style="text-align: center">Ảnh mô tả</h4>
                    <div class="lists">
                        <img src="{{ pare_url_file($buses->vehicle->v_map) }}" alt="" style="width:250px;height: auto;object-fit: contain;margin: 0 auto;display: block">
                    </div>
                    <div style="clear: both"></div>
                </div>
            </div>
            <div class="text-item description">
                <h4>Thông tin cá nhân</h4>
                <div>
                    <div class="form-group">
                        <label for="">Họ tên</label>
                        <input type="text" required class="form-control" placeholder="Họ Tên" name="name" value="{{ $user->name ?? '' }}">
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" class="form-control" placeholder="Email" name="email" value="{{ $user->email ?? '' }}">
                    </div>
                    <div class="form-group">
                        <label for="">Số điện thoại</label>
                        <input type="text" required class="form-control" placeholder="Số điện thoại" name="phone"
                               value="{{ $user->phone ?? '' }}">
                    </div>
                    <div class="form-group">
                        <label for="">Địa chỉ</label>
                        <input type="text" required class="form-control" placeholder="Địa chỉ" name="address" value="{{ $user->address ?? '' }}">
                    </div>
                </div>
            </div>
            <div class="text-item description">
                {{--<h4>Mã khuyến mãi</h4>--}}
                {{--<div>--}}
                    {{--<div class="form-group">--}}
                        {{--<label for="">Mã code</label>--}}
                        {{--<input type="text" class="form-control" placeholder="Nhập mã code nếu có" name="code" value="">--}}
                    {{--</div>--}}
                {{--</div>--}}
                <div class="form-group">
                    <button type="submit" name="" class="btn btn-success">Đặt vé</button>
                    <button type="submit" name="" class="btn btn-success">Đặt vé và thanh toán</button>
                </div>
            </div>
        </div>
    </form>
    <div class="content-detail__contact">
        <div class="box-fix">
            <div class="contact-sidebar">
                <a href="" title="{{ $guest->name }}">
                    <img src="{{ asset(pare_url_file($guest->avatar)) }}" alt="{{ $guest->name }}" style="max-width: 100%;width: 100%">
                </a>
                <div class="contact-sidebar__call-email">
                    <a href="#">
                        <img src="{{ asset('images/icon/account-circle.svg') }}" alt="">
                    </a>
                    <div>
                        <a href="">
                            <strong>{{ $guest->name_support }}</strong>
                        </a>
                        <p>Hỗ Trợ Khách Hàng</p>
                    </div>
                </div>
                <div>
                    <a href="#" class="btn btn-blue btn-contact">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        {{ $guest->phone }}
                    </a>
                </div>
                <div>
                    <a href="#" class="btn btn-blue-outline btn-contact">
                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                        Gửi tin nhắn
                    </a>
                </div>
            </div>
            <div class="card">
                <div class="links">
                    <h5>Tuyến đường</h5>
                    <ul>
                        @foreach($routes as $item)
                            <li>
                                <a href="{{ route('get.route.detail',['slug' => $item->slug,'id' => $item->id]) }}" title="{{ $item->name }}">{{ $item->name }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="card mt20">
                <div class="links">
                    <h5>Các nhà xe nổi tiếng</h5>
                    <ul>
                        @foreach($guests as $item)
                            <li>
                                <a href="{{ route('get.garage.detail',['slug' => $item->slug,'id' => $item->id]) }}" title="{{ $item->name }}">{{ $item->name }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        {{--        @include('components.form_contact')--}}
    </div>
</div>
