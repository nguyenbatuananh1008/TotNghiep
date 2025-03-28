@foreach(config('data.estate') ?? [] as $item)
    <div class="col-item">
        <div class="col-item__image">
            <div class="special">
                <span>Bến xe khách</span>
            </div>
            <a href="">
                <img class="lazy" data-src="{{ $item['avatar'] }}" src="{{ asset('images/preloader.gif') }}" alt="">
            </a>
{{--            <span class="count-img">12 hình</span>--}}
        </div>
        <div class="col-item__info">
            <h3>
                <a href="#">{{ $item['name'] }}</a>
            </h3>
        </div>
    </div>
@endforeach
