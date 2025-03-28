<div class="box-quick-view box-quick-view-{{$garage->id}}">
    <div class="project-action">
        <div class="project-action__button">
{{--            <a href="#" class="btn btn-blue-outline btn-follow">--}}
{{--                <i class="fa fa-heart"></i>--}}
{{--                Theo dõi--}}
{{--            </a>--}}
            <a href="{{ route('get.garage.detail',['slug' => $garage->slug,'id' => $garage->id]) }}" class="btn btn-blue" target="_blank">
                <i class="fa fa-eye"></i>
                Xem chi tiết
            </a>
        </div>
        <a href="#" class="js-pj-close">
            <i class="la la-times" aria-hidden="true"></i>
        </a>
    </div>

    <div class="project-info">
        <h3>
            <a href="#">{{ $garage->name }}</a>
        </h3>
        <p class="item-info place">{{ $garage->address }}</p>
        <div class="images item-info">
            @foreach($albums as $image)
                <img src="{{ pare_url_file($image->slug) }}" alt="">
            @endforeach
        </div>

        <div class="tab-nav">
            <a href="" class="js-tab-nav active" data-id="#tab-about">Giới thiệu</a>
            <a href="" class="js-tab-nav" data-id="#tab-phone">Số điện thoại / Địa chỉ</a>
            <a href="" class="js-tab-nav" data-id="#tab-review">Đánh giá</a>
        </div>
        <div class="tab-content">
            <div class="tab-content-item active" id="tab-about">
                <div class="text-item description">
                    <div class="content-text">
                        {!! $garage->about !!}
                    </div>
                </div>
            </div>
            <div class="tab-content-item" id="tab-phone">
                <div class="text-item description">
                    <ul>
                        <li>Địa chỉ: <b>{{ $garage->address }}</b></li>
                        <li>Phone: <a href="tel:{{ $garage->phone }}" rel="nofollow" title="{{ $garage->phone }}"><b>{{ $garage->phone }}</b></a></li>
                    </ul>
                </div>
            </div>
            @include('pages.detail.include._inc_list_vote')
        </div>
    </div>
</div>
