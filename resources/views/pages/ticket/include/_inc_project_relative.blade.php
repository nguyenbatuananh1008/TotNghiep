<div class="project-relative">
    <h3><strong>Danh sách nhà xe khác</strong></h3>
    <div class="list-relative">
        @foreach(config('data.estate') as $item)
            <div class="col-item">
                <div class="col-item__image">
                    <a href="#">
                        <img class="lazy" data-src="{{ $item['avatar'] }}" src="{{ asset('images/preloader.gif') }}" alt="">
                    </a>
                </div>
                <div class="col-item__info">
{{--                    <h3>--}}
{{--                        <a href="#">450 triệu</a>--}}
{{--                    </h3>--}}
                    <p class="main-info">{{ $item['address'] }}</p>
                </div>
            </div>
        @endforeach
    </div>
</div>
