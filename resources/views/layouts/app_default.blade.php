<!DOCTYPE html>
<html lang="vi">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <meta name="ROBOTS" content="NOINDEX, NOFOLLOW">
    {!! SEO::generate() !!}
    <link rel="icon" href="{{ asset('favicon.ico') }}" sizes="32x32" />
    @if(session('toastr'))
        <script>
            var TYPE_MESSAGES = "{{ session('toastr.type') }}"
            var MESSAGE = "{{ session('toastr.message') }}"
        </script>
    @endif
    @yield('css')
</head>
<body>
    @if(detectDevice() == 'mobile')
        <div class="global-sidebar">
            @include('components.header.include.item_nav')
        </div>
    @endif
    @yield('not_container')
    @yield('breadcrumb')
    <div class="container {{--{{ !isset($not_mh) ? 'container-mh' : '' }}--}}">
        @yield('content')
    </div>
    @yield('content-fluid')
    @yield('not_container_bottom')
    @include('components.footer.footer_mobile')
    @yield('script')
</body>
</html>
