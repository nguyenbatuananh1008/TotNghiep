@foreach($articles as $article)
	<!-- Post-->
	<article class="post">
		<div class="post-header">
			<h2 class="post-title"><a href="{{ route('get_blog.render', ['slug' => $article->a_slug.'-a']) }}">{{ $article->a_name  }}</a></h2>
			<ul class="post-meta">
				<li>
					<img src="{{ asset('images/icon/icon-time-25.png') }}" alt="">
					{{ $article->created_at }}
				</li>
				<li>
					<img src="{{ asset('images/icon/icon-tag-25.png') }}" alt="">
					<a href="{{ route('get_blog.render', ['slug' => $article->menu->a_slug.'-m']) }}" title="{{ $article->menu->mn_name }}">
						{{ $article->menu->mn_name }}
					</a>
				</li>
                <li>
                    <img src="{{ asset('images/default.png') }}" class="lazy"
                                         data-src="{{ asset('images/icon/eye.svg') }}" alt="">
                    <a href="javascript:;void(0)" rel="nofollow">{{ $article->a_view }}</a>
                </li>

			</ul>
		</div>
		<div class="post-box-content">
			<div class="post-preview">
				<a href="{{ route('get_blog.render', ['slug' => $article->a_slug.'-a']) }}" title="{{ $article->a_name }}">
					<img data-src="{{ pare_url_file($article->a_avatar) }}"
						 src="{{ asset('images/default.png') }}"
						 alt="{{ $article->a_name }}"
						 class="img-fluid rounded lazy"></a>
			</div>
			<div class="post-content">
				<h4>{{ $article->a_description }}</h4>
				@if (isset($article->tags))
					<p class="post-tags">
						@foreach($article->tags as $tag)
							<a href="{{ route('get_blog.render', $tag->t_slug) }}"
							   title="{{ $tag->t_name }}">{{ $tag->t_name }}</a>
						@endforeach
					</p>
				@endif
				<a href="{{ route('get_blog.render', ['slug' => $article->a_slug.'-a']) }}"  title="{{ $article->a_name }}"
				   class="post-content-load-more">Xem thêm <i class="mdi mdi-arrow-right"></i></a>
			</div>
		</div>
	</article>
	<!-- Post end-->
@endforeach

<!-- Pagination-->
<div class="row">
	<div class="col-lg-12">
		@if ($articles instanceof \Illuminate\Pagination\LengthAwarePaginator)
			{{ $articles->links('vendor/pagination/default') }}
		@endif
	</div>
</div>
<!-- Pagination end-->