<div class="image-view">
    @for ($i = 0; $i < 3; $i++)
        <div>
            <a href="">
                <img class="lazy" data-src="{{ asset('images/project/4.jpg') }}" src="{{ asset('images/preloader.gif') }}" alt="">
            </a>
        </div>
    @endfor
</div>
