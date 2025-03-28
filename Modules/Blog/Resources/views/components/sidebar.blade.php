<div class="sidebar" style="margin-top: 10px">
    <div class="sidebar_box">
        @if (isset($playlistArticles->articles))
            <aside class="widget playlists">
                <div class="widget-title">
                    Danh sách bài học
                </div>
                <ul>
                    @foreach($playlistArticles->articles as $key =>  $item)
                        <li>
                            {{--                            js-article-load--}}
                            <a href="{{ route('get.blog.render_view', $item->a_slug) }}"
                               title="{{ $item->a_name}}" data-link="{{ route('ajax.article.slug', $item->a_slug) }}"
                               data-slug="{{ $item->a_slug }}"
                               class=" {{ ($slugArticle ?? '') == $item->a_slug ? 'active' : '' }}">
                                @if ($item->a_preview)
                                    <img src="{{ asset('images/icon/key.png') }}" style="width: 18px;height: 18px;">
                                @endif
                                 {{ $item->a_name ?? "[N\A]" }} {{ $item->id }}</a>
                        </li>
                    @endforeach
                </ul>
            </aside>
        @endif
            <aside class="widget about-widget">
                <ins class="adsbygoogle"
                     style="display:block"
                     data-ad-client="ca-pub-5273612154486990"
                     data-ad-slot="3880633202"
                     data-ad-format="auto"
                     data-full-width-responsive="true"></ins>
        <aside class="widget about-widget">
            <div class="widget-title">Is My</div>
            <div class="text-center">
                <img data-src="{{ asset('auth.jpg') }}" src="{{ asset('images/default.png') }}" alt="About Me"
                     class="rounded-circle lazy">
                <p>Đam mê lập trình, mong muốn tạo ra một cộng đồng về lập trình giúp đỡ nhau, cùng nhau phát triển</p>
            </div>
        </aside>
        <aside class="widget about-widget">
            <ins class="adsbygoogle"
                 style="display:block"
                 data-ad-client="ca-pub-5273612154486990"
                 data-ad-slot="1407572591"
                 data-ad-format="auto"
                 data-full-width-responsive="true"></ins>
        </aside>

        </aside>
        <aside class="widget widget_categories">
            <div class="widget-title">Bài viết nổi bật</div>
            <ul>
                @foreach($articlesSidebar ?? [] as $item)
                    <li>
                        <a href="{{ route('get.blog.render_view', $item->a_slug) }}"
                           title="{{ $item->a_name }}">{{ $item->a_name }}</a>
                    </li>
                @endforeach
                @foreach($productsHot ?? [] as $item)
                    <li>
                        <a href="{{ route('get.project.render_view', $item->pro_slug) }}"
                           title="{{ $item->pro_name }}">{{ $item->pro_name }}</a>
                    </li>
                @endforeach
            </ul>
        </aside>
        <aside class="widget about-widget">
            <div class="widget-title">Liên Kết</div>
            <ul class="socials">
                <li>
                    <a href="" rel="nofollow"
                       title="" target="_blank">
                        <img  src="{{ asset('images/default.png') }}"
                              data-src="{{ asset('images/icon/face.svg') }}" alt="Facebook Trung Phu NA" class="lazy">
                    </a>
                </li>
                <li>
                    <a href="https://www.youtube.com/channel/UCzloMZCKVhxiGKSVH7zJZkA?sub_confirmation=1" rel="nofollow"
                       title="Youtobe Trung Phu NA" target="_blank">
                        <img  src="{{ asset('images/default.png') }}"
                              data-src="{{ asset('images/icon/youtube.svg') }}" alt="" class="lazy">
                    </a>
                </li>
            </ul>
        </aside>
        @if (isset($tagsList))
            <aside class="widget widget_tag_cloud">
                <div class="widget-title">Tags</div>
                <div class="tagcloud">
                    @foreach($tagsList as $tag)
                        <a href="{{ route('get.blog.render_view', $tag->t_slug) }}"
                           title="{{ $tag->t_name }}">{{ $tag->t_name }}</a>
                    @endforeach
                </div>
            </aside>
        @endif
    </div>
</div>