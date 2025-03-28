<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="author" content="">
		<link rel="icon" href="{{ asset('img/brand/favicon.png') }}" type="image/x-icon">
		{!! SEO::generate() !!}
		@if(session('toastr'))
			<script>
				var TYPE_MESSAGE = "{{session('toastr.type')}}";
				var MESSAGE = "{{session('toastr.message')}}";
			</script>
		@endif
		<style>
			@php $style = file_get_contents('css/blog_home.css'); echo $style; @endphp
		</style>
		@yield('css')
		@if(app()->environment() !== 'local')
			<script data-ad-client="ca-pub-5273612154486990" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
		@endif
	</head>

	<body>
		<div class="header_top d-flex">
			<div class="logo">
				<a href="/" title="Kênh chia sẻ kiến thức lập trình">
					<img src="{{ pare_url_file($configuration->logo ?? '') }}" alt="Kênh chia sẻ kiến thức lập trình" class="" style="height: 44px;">
{{--					<img src="{{ asset('images/logo.png') }}" alt="Kênh chia sẻ kiến thức lập trình" class="" style="height: 44px;">--}}
				</a>
			</div>
			<div class="input_search">
				<form action="">
					<input type="text" placeholder="Giao diện, project, đồ án, website ..."
						   class="form-control js-input-search">
				</form>
			</div>
			<button class="button-menu-mobile">
				<img src="{{ asset('images/icon/icon-list-24.png') }}" alt="">
			</button>
		</div>
		<!-- Begin page -->
		<div id="wrapper">
			<!-- ========== Left Sidebar Start ========== -->
			<div class="left side-menu">
				<div class="slimscroll-menu" id="remove-scroll">
					<!--- Sidemenu -->
					<div id="sidebar-menu">
						<!-- Left Menu Start -->
						<ul class="metismenu" id="side-menu">
							@foreach($navBars as $item)
								<li>
									<a href="{{ $item->nb_url }}" rel="{{ $item->nb_rel }}" title="{{ $item->nb_name }}">{{ $item->nb_name }}</a>
								</li>
							@endforeach
{{--							@if (get_data_user('users'))--}}
{{--								<li><a href="{{ route('get.logout') }}" title="Đăng ký" rel="nofollow">Xin chào : <b>{{ get_data_user('users','name') }}</b></a></li>--}}
{{--							@else--}}
{{--								<li><a href="{{ route('get.login') }}" rel="nofollow" title="Đăng nhập">Đăng nhập</a></li>--}}
{{--							@endif--}}
						</ul>
						<div class="copyright-box">
							{!! $configuration->footer_bottom ?? '' !!}
						</div>

					</div>
					<!-- Sidebar -->
					<div class="clearfix"></div>

				</div>
				<!-- Sidebar -left -->

			</div>
			<!-- Left Sidebar End -->

			<div class="page-wrapper">
				@yield('content')
			</div>
		</div>
		<script>
			var URL = '{{ asset("js/app_blog.js") }}'
		</script>
		<script src="{{ asset('js/app_blog_insights.js') }}"></script>
		@yield('script')
		@if (app()->environment() !== 'local')
			<!-- Global site tag (gtag.js) - Google Analytics -->
			<script async src="https://www.googletagmanager.com/gtag/js?id=UA-155131424-1"></script>
			<script>
				window.dataLayer = window.dataLayer || [];

				function gtag() {
					dataLayer.push(arguments);
				}

				gtag('js', new Date());
				gtag('config', 'UA-155131424-1');
				(adsbygoogle = window.adsbygoogle || []).push({});
			</script>
		@endif

		@if (isset($loadPageFace) && $loadPageFace !== '' && app()->environment() !== 'local')
			<div id="fb-root"></div>
			<script>
				window.fbAsyncInit = function () {
					FB.init({
						xfbml: true,
						version: 'v5.0'
					});
				};

				(function (d, s, id) {
					var js, fjs = d.getElementsByTagName(s)[0];
					if (d.getElementById(id)) return;
					js = d.createElement(s);
					js.id = id;
					js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
					fjs.parentNode.insertBefore(js, fjs);
				}(document, 'script', 'facebook-jssdk'));</script>

			<!-- Your customer chat code -->
			<div class="fb-customerchat"
				 attribution=setup_tool
				 page_id="1830362987282762">
			</div>
		@endif
	</body>

</html>
