<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>نشر اکاذیب - @yield('ex-title')</title>

    {{-- meta tag --}}
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="title" content="اکاذیب">
    <meta name="description" content="اکاذیب">
    <meta name="keywords" content="اکاذیب">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="English">
    <meta name="author" content="رضا پارسیان">

    <meta property="og:title" content="اکاذیب">
    <meta property="og:description" content="اکاذیب">
    <meta property="og:image" content="https://akaazib.ir/favicon.ico">
    <meta property="og:url" content="https://akaazib.Ir/">

    <meta name="twitter:title" content="اکاذیب">
    <meta name="twitter:description" content="اکاذیب">
    <meta name="twitter:image" content="https://akaazib.ir/favicon.ico">

    <link rel="shortcut icon" href="/favicon.ico">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css'."?id=".filemtime('css/app.css')) }}">
    @yield('ex-css')
</head>

<body class="rtl">
    <div id="app">
        <div class="loading"
            style="left: 0;right: 0;top: 0;bottom: 0;position: absolute;background: white;z-index: 9999;text-align: center;color: #333;">
            <div style="position: relative;top: 50vh; text-decoration: underline black;">Akazib</div>
        </div>
        <nav class="navbar navbar-expand-sm justify-content-center">
            <a href="{{ route('root') }}">
                <div id="logo_other" class="img-fluid"></div>
            </a>
        </nav>

        <div class="container">
            @section('content')
                test
            @show
        </div>
    </div>
    <script src="{{ asset('js/app.js')."?id=".filemtime('js/app.js') }}"></script>
    @yield('ex-js')
</body>

</html>
