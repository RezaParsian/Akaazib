@extends('layouts.master')

@section('ex-title', 'صفحه اصلی')
@section('ex-css')
    <style>
        #logo_other{
            display: none;
        }
    </style>
@endsection
@section('content')
    <div class="loading"
        style="left: 0;right: 0;top: 0;bottom: 0;position: absolute;background: white;z-index: 9999;text-align: center;color: #333;">
        <div style="position: relative;top: 50vh; text-decoration: underline black;">Akazib</div>
    </div>
    <div class="container">

        <div class="row justify-content-center mt-3 text-center">
            <div class="col-8 d-block d-md-none">
                <a href="{{ route('root') }}">
                    <img src="/img/logo.png" alt="logo" class="img-fluid">

                </a>
            </div>
        </div>

        <div class="row justify-content-center pt-md-5 mt-md-5 text-center">
            <div class="col pt-3 ltr">
                <div class="col my-lg-5 p-0">
                    <a href="{{ route('note') }}">
                        <h1 class="h1">یادداشت</h1>
                    </a>
                </div>
                <div class="col my-lg-5 p-0">
                    <a href="#">
                        <h1 class="h1">کتاب</h1>
                    </a>
                </div>
                <div class="col my-lg-5 p-0">
                    <a href="#">
                        <h1 class="h1">روزنگاره</h1>
                    </a>
                </div>
            </div>

            <div class="col-6 col-md-4 d-none d-md-block">
                <a href="{{ route('root') }}">
                    <!--<img src="/img/logo.png" alt="logo" id="logo" class="img-fluid">-->
                    <div id="lottie"></div>
                </a>
            </div>

            <div class="col pt-3 rtl ">
                <div class="col my-lg-5 p-0">
                    <a href="#">
                        <h1 class="h1">درباره</h1>
                    </a>
                </div>
                <div class="col my-lg-5 p-0">
                    <a href="{{ route('contact') }}">
                        <h1 class="h1">ارتباط</h1>
                    </a>
                </div>
                <div class="col my-lg-5 p-0">
                    <a href="#">
                        <h1 class="h1">فهرست</h1>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('ex-js')
    <script src="./logo/data.js"></script>
    <script>
        var animationData = animationData;
        var params = {
            container: document.getElementById('lottie'),
            renderer: 'svg',
            autoplay: true,
            loop: true,
            animationData: animationData
        };

        var anim;

        anim = lottie.loadAnimation(params);

    </script>
@endsection
