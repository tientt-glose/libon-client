<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>@yield('title') | {{ env('APP_NAME') }} </title>

    <!-- bootstrap v4.3.1 -->
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/plugins.css') }}" />

    @yield('before-theme-styles-end')

    <!-- css -->
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/main.css') }}" />

    <!-- Custom css -->
    @yield('before-styles-end')

    <!-- favicons -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
</head>

<body>
    <!-- Preloader -->
    {{-- todo --}}
    <main>
        <div class="site-wrapper" id="top">
            <!-- Header -->
            @include('layouts.header')

            <!-- Header for mobile -->
            @include('layouts.header-mobile')

            <!-- Fixed header when scroll -->
            @include('layouts.header-fixed')

            @yield('content')

        </div>

        <!-- Footer -->
        <div class="site-footer">
            @include('layouts.footer')
        </div>
    </main>

    <!-- popper -->
    <script src="{{ asset('plugins/popper/popper.min.js') }}"></script>
    <!-- jQuery Scripts -->
    <script src="{{ asset('js/plugins.js') }}"></script>
    <script src="{{ asset('js/ajax-mail.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>

    @yield('script')
</body>

</html>
