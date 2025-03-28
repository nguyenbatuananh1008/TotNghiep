<section class="sectiion review-locations" style="margin-top: 10px;">
    <div class="header">
        <h3 class="header-title">Khám phá lân cận</h3>
        <div>
            <select name="" id="" class="form-control js-select2-districts">
                <option value="">Quận huyện <i class="fa fa-chevron-down"></i></option>
                <option value="">Quận Ba Đình</option>
                <option value="">Hoàn Kiếm</option>
                <option value="">Quận 1</option>
                <option value="">Quận 2</option>
                <option value="">Quận 10</option>
                <option value="">Quận Bình Thạch</option>
                <option value="">T.T Cầu Giát</option>
            </select>
        </div>
    </div>
    <div class="content review-locations-list carousel-review-location owl-carousel owl-theme">
        @foreach(config('data.estate') as $item)
            <div class="item-review">
                <a href="{{ route('get.review_location.detail', \Str::slug($item['district'])) }}">
                    <img src="{{ $item['avatar'] }}" alt="">
                    <h4>{{ $item['district'] }}</h4>
                </a>
            </div>
        @endforeach
    </div>
</section>
