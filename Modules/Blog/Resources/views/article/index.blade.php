@extends('layouts.app_default')
@section('css')
	<style>
		.sg ins {
			margin: auto;
		}
		<?php $style = file_get_contents('assets/css/article.min.css');echo $style;?>
	</style>
@stop

@section('not_container')
	@include('components.header.header', [
        'container' => 'container'
    ])
	<section class="breadcrumb">
		<div class="container breadcrumb-content">
			<ul>
				<li><a href="/" title="Conha.vn">limousinevipcactinh.com <i class="fa fa-angle-right"></i></a></li>
				<li><a href="/" title="Conha.vn"> bài viết<i class="fa fa-angle-right"></i></a></li>
				<li><span>{{ $article->a_name }}</span></li>
			</ul>
		</div>
	</section>
@stop
@section('content')
	<div class="content-detail mt5">
		<div class="content-detail__detail">
			<div class="header">
				<h1>{{ $article->a_name }}</h1>
				<p>{{ $article->a_description }}</p>
			</div>
			<div class="text-item description">
				<div class="content-text">
					{!! $article->a_content !!}
				</div>
			</div>
			<div class="action-bottom">
				<div class="right-action">
					<p>Chia sẻ: </p>
					<a href="https://www.facebook.com/sharer/sharer.php?u={{ \Request::url() }}" rel="nofollow" target="_blank"><img src="{{ asset('images/icon/circle-facebook.svg') }}" alt=""></a>
{{--					<a href=""><img src="{{ asset('images/icon/circle-messenger.svg') }}" alt=""></a>--}}
{{--					<a href=""><img src="{{ asset('images/icon/circle-zalo.svg') }}" alt=""></a>--}}
{{--					<a href=""><img src="{{ asset('images/icon/circle-copylink.svg') }}" alt=""></a>--}}
				</div>
			</div>
		</div>
		<div class="content-detail__contact">
			<div class="box-fix">
				<div class="card">
					<div class="links">
						<h5>Tuyến đường</h5>
						<ul>
							@foreach($routes ?? [] as $item)
								<li>
									<a href="{{ route('get.route.detail',['slug' => $item->slug,'id' => $item->id]) }}" title="{{ $item->name }}">{{ $item->name }}</a>
								</li>
							@endforeach
						</ul>
					</div>
				</div>
				<div class="card mt20">
					<div class="links">
						<h5>Các nhà xe nổi tiếng</h5>
						<ul>
							@foreach($guests ?? [] as $item)
								<li>
									<a href="{{ route('get.garage.detail',['slug' => $item->slug,'id' => $item->id]) }}" title="{{ $item->name }}">{{ $item->name }}</a>
								</li>
							@endforeach
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

@stop

@section('not_container_bottom')
	@include('components.footer.footer', [
        'container' => 'container'
    ])
@stop

@section('script')
	<script type="text/javascript">
		<?php $style = file_get_contents('assets/js/detail.js');echo $style;?>
	</script>
@stop
