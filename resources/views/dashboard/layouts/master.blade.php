<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>پنل مدیریت اکاذیب</title>

    <link rel="stylesheet" href="/styles/css/bootstrap.min.css">
    <link rel="stylesheet" href="/styles/css/fonts.css">
    <link rel="stylesheet" href="/styles/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="/styles/css/summernote-bs4.css">
    <link rel="stylesheet" href="/styles/css/custom.css">

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
        <div class="container-fluid">
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

    <script src="/styles/js/0-jquery.min.js"></script>
    <script src="/styles/js/1-popper.min.js"></script>
    <script src="/styles/js/2-bootstrap.min.js"></script>
    @yield('ex-js')
</body>

</html>
