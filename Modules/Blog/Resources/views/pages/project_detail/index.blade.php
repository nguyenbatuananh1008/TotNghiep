@extends('blog::layouts.app_blog')
@section('content')
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<section>
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="page-title">
						<div class="row">
							<div class="col-xs-12">
								<h1><strong>{{ $product->pro_name }}</strong></h1>
								<p class="subtitle text-muted">{{ $product->pro_description }}</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="projects_detail">
		<div class="container">
			<div class="row">
				<div class="col-sm-8 content blog-detail-description">
					<div class="box-messages">
						<p> </p>

					</div>
					{!! $content !!}
				</div>
				<div class="col-sm-4 sidebar">
					<div id="sidebar">
                        <div class="box" id="box-fix-top">
							@if (isset($product->admin->avatar))
								<div class="box_auth">
									<img src="{{ asset('images/default.png') }}"
											class="lazy" data-src="{{ pare_url_file($product->admin->avatar) }}"
										 alt="{{ $product->admin->name }}">
									<div>
										<b>{{ $product->admin->name }}</b>
										<span>Nhân viên IT</span>
									</div>

								</div>
							@endif
    {{--                        <p>Giá <b>{{ number_format($product->pro_price,0,',','.') }}</b> VNĐ</p>--}}
                            <p class="box_pay">Liên hệ mua code
								<a href="" rel="nofollow" target="_blank">tại đây</a>
							</p>
                        </div>
                        <div class="box bg">
                            <h6>Chúng tôi cam kết</h6>
                            <ul class="sidebar-about">
                                
                            </ul>
                        </div>               
                    </div>
				</div>
			</div>

		</div>
		<!-- end container -->
	</section>
@stop