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
    <div id="about" class="about">
        <div class="container">
            <div class="about-content">
                <div class="col-5">
                    <div class="about-item">
                        <h4><b>Hellou! My name's {{ $about->name }}</b></h4>
                        <p>{{ $about->title }}</p>
                        <div class="contact-info">
                            <ul class="col-12 col-xs-12 col-sm-12 col-md-5 col-lg-5">
                                <li><i class="fas fa-user-secret"></i> - {{ $about->name }}</li>
                                <li><i class="fas fa-home"></i> - {{ $about->address }}</li>
                            </ul>
                            <ul class="col-12 col-xs-12 col-sm-12 col-md-7 col-lg-7">
                                <li><i class="fas fa-phone-alt"></i> - {{ $about->phone_number }}</li>
                                <li><i class="far fa-envelope-open"></i> - {{ $about->email }}</li>
                            </ul>
                        </div>
                        <div class="more-contact-info">
                            <a href="{{ implode(array_column(json_decode($about->relate_url, true), 'github')) }}" target="_blank" class="mr-2"><i class="fab fa-github"></i></a>
                            <a href="{{ implode(array_column(json_decode($about->relate_url, true), 'twitter')) }}" target="_blank" class="mr-2"><i class="fab fa-twitter"></i></a>
                            <a href="{{ implode(array_column(json_decode($about->relate_url, true), 'linkedin')) }}" target="_blank" class="mr-2"><i class="fab fa-linkedin-in"></i></a>
                            <a href="{{ implode(array_column(json_decode($about->relate_url, true), 'profile_website')) }}" target="_blank"><i class="fas fa-globe"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-7">
                    <div class="about-item">
                        <p>{{ $about->description }}</p>
                    </div>
                    <div class="about-item">
                        @foreach(json_decode($about->hobby) as $item)
                            <p>- {{ $item }}</p>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- experience -->
    <div id="experience" class="experience">
        <div class="container">
            <div class="exp-content">
                @foreach($experience as $key => $item)
                    <div class="d-flex">
                        <div class="exp-item-left col-5">
                            @if($key % 2 == 0)
                                @include('modules-upgrade.common.experience-item')
                            @endif
                        </div>
                        <div class="col-2">
                            <p>{{ date('Y/m', strtotime($item->start_date)) }}</p>
                            <i class="far fa-dot-circle"></i>
                            <p style="top: 0; right: 15px">{{ date('Y/m', strtotime($item->end_date)) }}</p>
                            <div class="vertical-line"></div>
                        </div>
                        <div class="exp-item-right col-5">
                            @if($key % 2 != 0)
                                @include('modules-upgrade.common.experience-item')
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

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
