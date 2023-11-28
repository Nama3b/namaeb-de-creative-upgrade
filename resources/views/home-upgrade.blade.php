<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Namaeb De Creative</title>

    <link href="{{asset('image/logo.jpg')}}" rel="icon">
    <link rel="stylesheet" href="{{asset('css/home-upgrade.css')}}">
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
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
    @include('modules-upgrade.about')

    <!-- experience -->
    @include('modules-upgrade.experience')

    <!-- education -->
    @include('modules-upgrade.education')

    <!-- contact -->
    @include('modules-upgrade.contact')

</div>


<!-- testimonials -->


<!-- footer -->
@include('modules-upgrade.footer')

<!-- ICON -->
<script defer src="{{asset('assets/fontawesome/js/fontawesome.js')}}"></script>
<script src="{{asset('assets/js/index.js')}}"></script>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</body>
