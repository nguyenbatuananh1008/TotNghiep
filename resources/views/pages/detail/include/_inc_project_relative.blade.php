<div class="project-relative">
    <h3><strong>Danh sách nhà xe khác</strong></h3>
    <div class="list-relative">
        @foreach($guests as $item)
            <div class="col-item">
                <div class="col-item__image">
                    <a href="{{ route('get.garage.detail',['slug' => $item->slug,'id' => $item->id]) }}" title="{{ $item->name }}">
                        <img class="lazy" data-src="{{ pare_url_file($item->avatar) }}" src="{{ asset('images/preloader.gif') }}" alt="">
                    </a>
                </div>
                <div class="col-item__info">
                    <p class="main-info">{{ $item->name }}</p>
                </div>
            </div>
        @endforeach
    </div>
</div>
