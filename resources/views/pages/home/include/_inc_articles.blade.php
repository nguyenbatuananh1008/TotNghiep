@if($menu)
    <section class="project">
        <div class="container project-content">
            <h2 class="section-title text-center">{{ $menu->m_name }}</h2>
            <div class="box-estate">
                <div class="list-project" id="list-estate">
                    @foreach($articles ?? [] as $item)
                        <div class="col-item">
                            <div class="col-item__image">
                                <div class="special">
                                    <span>{{ $menu->m_name }}</span>
                                </div>
                                <a href="{{ route('get_blog.render',['slug' => $item->a_slug.'-a']) }}" title="{{ $item->a_name }}">
                                    <img class="lazy" data-src="{{ pare_url_file($item->a_avatar) }}"
                                         src="{{ asset('images/preloader.gif') }}" alt="{{ $item->a_name }}">
                                </a>
                            </div>
                            <div class="col-item__info">
                                <h3>
                                    <a href="{{ route('get_blog.render',['slug' => $item->a_slug.'-a']) }}" title="{{ $item->a_name }}">{{ $item->a_name }}</a>
                                </h3>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>
    </section>
@endif
