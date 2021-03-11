<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>نشر اکاذیب - @yield('ex-title')</title>

   @include('layouts.info')

    @include('layouts.style')
    <!-- Styles -->
    </head>
    <body class="rtl">
            <div class="loading" style="left: 0;right: 0;top: 0;bottom: 0;position: absolute;background: white;z-index: 9999;text-align: center;color: #333;">
          <div style="position: relative;top: 50vh; text-decoration: underline black;">Akazib</div>
    </div>
        <nav class="navbar navbar-expand-sm justify-content-center">
            <a href="{{route("root")}}">
                <div id="logo_other" class="img-fluid"></div>
            </a>
          </nav>

        <div class="container">
            @section('content')
            test
            @show
        </div>
        @include('layouts.js')
    </body>
</html>
