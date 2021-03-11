<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>پنل مدیریت اکاذیب</title>

    <link rel="stylesheet" href="{{ asset('css/app.css' . '?id=' . filemtime('css/app.css')) }}">
    @yield('ex-css')

    <style>
        .nav-item:hover {
            border-radius: 5px;
            background-color: #fee4c5;
        }

        .fa {
            color: #fee4c5;
        }

        .nav-item:hover .fa {
            color: #000;
        }

        * {
            -webkit-touch-callout: unset;
            /* iOS Safari */
            -webkit-user-select: unset;
            /* Safari */
            -khtml-user-select: unset;
            /* Konqueror HTML */
            -moz-user-select: unset;
            /* Firefox */
            -ms-user-select: unset;
            /* Internet Explorer/Edge */
            user-select: unset;
            transition: all 0.5s;
        }

    </style>
</head>

<body class="rtl">

    @include('dashboard.layouts.navbar')

    @include('dashboard.layouts.modal')

    <section>
        <div class="container-fluid" id="app">
            <div class="row">
                <div class="col-lg-10 mr-auto mt-5 rouded">
                    <div class="row p-2 justify-content-center mx-1">
                        <div class="col-12">
                            <h1 class="display-6">@yield('title')</h1>
                        </div>
                        {{-- body of panel --}}
                        @yield('body')
                        {{-- end of body of panel --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="{{ asset('js/app.js') . '?id=' . filemtime('js/app.js') }}"></script>
    @yield('ex-js')
</body>

</html>
