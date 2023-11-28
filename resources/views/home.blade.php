<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Namaeb De Creative</title>

    <link href="{{asset('image/logo.jpg')}}" rel="icon">
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
    <link rel="stylesheet" href="{{asset('assets/fontawesome/css/all.css')}}">
    <link rel="stylesheet" href="{{asset('assets/font-awesome-4.7.0/css/font-awesome.min.css')}}">

    <!-- bootstrap -->
    <link rel="stylesheet" type="text/css" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- smooth-scroll -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>

    <!-- header -->
    @include('modules.header')

    <!-- home main -->
    @include('modules.home-main')

    <!-- about -->
    <div id="about-link"></div>
    @include('modules.about')

    <!-- introduce -->
    @include('modules.introduce')

    <!-- experience -->
    <div id="experience-link"></div>
    @include('modules.experience')

    <!-- education -->
    <div id="education-link"></div>
    @include('modules.education')

    <!-- testimonials -->
    @include('modules.testimonials')

    <!-- contact -->
    <div id="contact-link"></div>
    @include('modules.contact')

    <!-- footer -->
    @include('modules.footer')

<!-- ICON -->
<script defer src="{{asset('assets/fontawesome/js/fontawesome.js')}}"></script>

<script src="{{asset('assets/js/index.js')}}"></script>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
</body>
