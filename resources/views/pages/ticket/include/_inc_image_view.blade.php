<div class="image-view">
    @foreach($albums as $image)
        <div>
            <a href="">
                <img class="lazy" data-src="{{ pare_url_file($image->slug) }}" src="{{ asset('images/preloader.gif') }}" alt="">
            </a>
        </div>
    @endforeach
</div>
