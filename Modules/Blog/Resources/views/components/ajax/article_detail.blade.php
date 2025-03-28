<div class="post-header">
	<h1 class="post-title" style="margin-top: 10px;"><strong>{{ $article->a_name }}</strong></h1>
	<ul class="post-meta">
		<li>
			<img src="{{ asset('images/icon/icon-time-25.png') }}" alt="">
			{{ $article->created_at }}
		</li>
		<li>
			<img src="{{ asset('images/icon/icon-tag-25.png') }}" alt="">
			<a href="{{ route('get_blog.render', ['slug' => $article->menu->m_name.'-m']) }}" title="{{ $article->menu->a_name }}">
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
<div class="post-preview">
	<div class="quote-post">
		<blockquote class="blockquote">
			{{ $article->a_description }}
		</blockquote>
	</div>
</div>
<div class="blog-detail-description">
	{!! $content !!}

{{--	<div class="box-messages" style="border: 2px dashed #0db3e3;">--}}
{{--		<p style="margin-bottom: 0">Xin lỗi đây là seri trả phí mong các bạn thông cảm. Nếu muốn được sử dụng và có toàn bộ <b>source</b> <b>`Đồ án xây dựng website bán đồng hồ bằng laravel`</b> cũng như <b>hướng dẫn</b>, <b>hỗ trợ báo cáo</b> hãy liên hệ với mình để thanh toán và được xem và <b>hướng dẫn đồ án</b>--}}
{{--			<a rel="nofollow" target="_blank" href=""> [Link facebook admin]</a>--}}
{{--		</p>--}}
{{--	</div>--}}
</div>
<div class="blog-comment">
	<p style="margin-bottom: 0">Để lại comment của bạn nếu gặp khó khăn</p>
	<div class="fb-comments" id="comments" data-href="{{ \Request::url() }}" data-width="100%"
		 data-numposts="5"></div>
</div>