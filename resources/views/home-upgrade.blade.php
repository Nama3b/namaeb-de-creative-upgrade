<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Namaeb De Creative</title>

    <link href="{{asset('image/logo.jpg')}}" rel="icon">
    <link rel="stylesheet" href="{{asset('css/home-upgrade.css')}}">
    <link rel="stylesheet" href="{{asset('assets/fontawesome/css/all.css')}}">
    <link rel="stylesheet" href="{{asset('assets/font-awesome-4.7.0/css/font-awesome.min.css')}}">

    <!-- bootstrap -->
    <link rel="stylesheet" type="text/css" href="{{asset('bootstrap/css/bootstrap.min.css')}}">

    <!-- smooth-scroll -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>

    <!-- header -->
    @include('modules-upgrade.header')

    <!-- home main -->
    <div class="home">

        <!-- introduce -->
        @include('modules-upgrade.introduce')

        <!-- about -->
{{--        <div id="about">--}}
{{--            <div class="about">--}}
{{--                <div class="container-fluid">--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-6">--}}
{{--                            <img src="{{ $about->image }}" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="col-6">--}}
{{--                            <div class="about-info">--}}
{{--                                <h4></h4>--}}

{{--                            </div>--}}

{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

    </div>

    <!-- introduce -->

    <!-- experience -->

    <!-- education -->

    <!-- testimonials -->

    <!-- contact -->

    <!-- footer -->
    @include('modules-upgrade.footer')

<!-- ICON -->
<script defer src="{{asset('assets/fontawesome/js/fontawesome.js')}}"></script>
<script src="{{asset('assets/js/index.js')}}"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</body>
