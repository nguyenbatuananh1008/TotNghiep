@extends('blog::layouts.app_blog')
@section('content')
    <section class="pt-3">
        <div class="container">
            <div class="row">
                <!-- Content-->
                <div class="col-xl-8">
                    @include('blog::components._inc_article',['articles' => $articles])
                </div>
                <!-- Content end-->

                <!-- Sidebar-->
                <div class="col-xl-4">
                    @include('blog::components.sidebar')
                </div>
                <!-- Sidebar end-->
            </div>

        </div>
        <!-- end container -->
    </section>
    @if($pageContent)
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="page-title">
                            <div class="row">
                                <div class="col-md-9 col-xs-12">
                                    <h1><strong>{{ $pageContent->title_seo }}</strong></h1>
                                    <ins class="adsbygoogle"
                                         style="display:block"
                                         data-ad-client="ca-pub-5273612154486990"
                                         data-ad-slot="7273083301"
                                         data-ad-format="auto"
                                         data-full-width-responsive="true"></ins>
                                    <p class="subtitle text-muted">{{ $pageContent->description_seo }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
@stop