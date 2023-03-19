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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- smooth-scroll -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</head>
<body>
<header id="header-section">
    <nav class="navbar navbar-expand-md fixed-top fade-in">
        <div class="container-fluid">
            <img src="{{asset('image/header-name.png')}}" alt="">
            <button type="button" class="btn btn-dark navbar-toggler navbar-dark" data-toggle="collapse" data-target="#navbarResponsive">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <div class="nav navbar-nav ml-auto navbar-right d-flex text-center" id="nav-active">
                    <div class="nav-item"><a href="#about-link" class="nav-link scroll">ABOUT ME</a></div>
                    <div class="nav-item"><a href="#service" class="nav-link scroll">SERVICE</a></div>
                    <div class="nav-item"><a href="#experience-link" class="nav-link scroll">EXPERIENCE</a></div>
                    <div class="nav-item"><a href="#education-link" class="nav-link scroll">EDUCATION</a></div>
                    <div class="nav-item"><a href="#testimonials" class="nav-link scroll">TESTIMONIALS</a></div>
                    <div class="nav-item"><a href="#contact" class="nav-link">CONTACT</a></div>
                </div>
            </div>
        </div>
    </nav>
</header>
<section id="main">
    <div class="main">
        <div class="container">
            <div class="row text-center">
                <div class="col-12 slide-in">
                    <div class="display-1 fade-in">
                        <div class="">
                            <div class="img-section slide-in">
                                <div class="my-name">
                                    <img src="{{asset('image/about2.png')}}" alt="">
                                </div>
                                <img src="{{asset('image/about1.png')}}" alt="" class="my-name-2">
                            </div>
                            <p>
                                <a href="https://www.facebook.com/lethanhlong8151" target="_blank"><i class="fab fa-facebook"></i></a>
                                <a href="https://stackoverflow.com/users/16786206/lee-thanh-long" target="_blank"><i class="fab fa-stack-overflow"></i></a>
                                <a href="https://github.com/Nama3b" target="_blank"><i class="fab fa-github"></i></a>
                                <a href="https://www.linkedin.com/in/lee-thanh-long-43a349219/" target="_blank"><i class="fab fa-linkedin"></i></a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div id="about-link"></div>
<section id="about">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="header-about fade-in" align="center">
                    <div class="display-1">
                        <h2><b>ABOUT ME</b></h2>
                    </div>
                </div>
                <div class="main-about">
                    <div class="col-12 d-flex fade-in">
                        <div class="col-12 col-xs-12 col-sm-12 col-md-4 col-lg-4 slide-in">
                            <div class="namaeb-img">
                                <img src="images/158174995_519691245667079_6075009444471631746_n.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-12 col-xs-12 col-sm-12 col-md-7 col-lg-7 mb-3 slide-in">
                            <div class="namaeb-info">
                                <h4 class="mb-4">HELLOU! MY NAME'S LE THANH LONG</h4>
                                <h1><b>I'M IN THE DESIGN INDUSTRY WITH 22 YEARS OF EXPERIENCE.</b></h1>
                                <p>With a intern position i want to learning more knowledge, upgrade myself and i want to take advantages of IT skills & experience to become a official employee of the company to contribute my youth and brain matter to bring a lot value to company and your customers. From that, I will contribute to intern of your company.</p>
                                <a href="Le-Thanh-Long-TopCV.vn-280422.122106.pdf" target="_blank"><button class="btn btn-lg btn-outline-danger"><i class="fas fa-download mr-3"></i>My CV</button></a>
                            </div>
                            <hr>
                            <div class="contact-info">
                                <ul class="col-12 col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                    <li><i class="fas fa-user-secret"></i> - Le Thanh Long</li>
                                    <li><i class="fas fa-home"></i> - Ha Noi capital city.</li>
                                </ul>
                                <ul class="col-12 col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                    <li><i class="fas fa-phone-alt"></i> - 038-523-0388</li>
                                    <li><i class="far fa-envelope-open"></i> - leethanhlong7890@gmail.com</li>
                                </ul>
                            </div>
                            <div class="more-contact-info mt-2" align="right">
                                <a href="fb.com/leethanhlong8151" target="_blank" class="mr-2"><i class="fab fa-facebook"></i></a>
                                <a href="https://github.com/Nama3b" target="_blank"><i class="fab fa-github"></i></a>
                                <a href="" target="_blank" class="mr-2"><i class="fab fa-reddit-alien"></i></a>
                            </div>
                        </div>
                    </div>
                    <hr>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="action">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="animation-action col-12 justify-content-center">
                    <div class="col-12" align="center">
                        <div class="water-action-1"></div>
                        <div class="water-action-2"></div>
                        <div class="water-action-3"></div>
                    </div>
                    <div class="service-main justify-content-center">
                        <div class="border-left" align="left"></div>
                        <div class="border-right" align="right"></div>
                        <div>
                            <div class="col-10 div-space"></div>
                            <div class="col-10 d-flex fade-in" align="center" id="service">
                                <div class="col-1"></div>
                                <div class="col-4 service-left slide-in mb-3">
                                    <div class="img">
                                        <img src="images/web_design.png" alt="">
                                        <h4><b>Web design</b></h4>
                                    </div>
                                    <div class="info">
                                        <p>My knowledge: I had experience to work with HTML, CSS, MySQL, Docker, PHP and Laravel, Symfony framework. I had worked with EC-cube an open source CMS developed by Japan to solve the problem of e-commerce base on symfony framework for half year</p>
                                    </div>
                                </div>
                                <div class="col-4"></div>
                                <div class="col-4 service-right slide-in mb-3">
                                    <div class="img">
                                        <img src="images/Web_Development.png" alt="">
                                        <h4><b>Development</b></h4>
                                    </div>
                                    <div class="info">
                                        <p>PHP is my main language and i want to learn and develop intensively on it.</p>
                                    </div>
                                </div>
                                <div class="col-1"></div>
                            </div>
                            <div class="col-10 d-flex fade-in" align="center">
                                <div class="col-1"></div>
                                <div class="col-4 service-left slide-in mb-3">
                                    <div class="img">
                                        <img src="images/Seo.png" alt="">
                                        <h4><b>SEO Friendly</b></h4>
                                    </div>
                                    <div class="info">
                                        <p>Still learn about it and haven't experience to do with SEO.</p>
                                    </div>
                                </div>
                                <div class="col-4"></div>
                                <div class="col-4 service-right slide-in mb-3">
                                    <div class="img">
                                        <img src="images/Graphics_Design.png" alt="">
                                        <h4><b>Graphic Design</b></h4>
                                    </div>
                                    <div class="info">
                                        <p>I know how to use basic figma like cut and edit html, css.</p>
                                    </div>
                                </div>
                                <div class="col-1"></div>
                            </div>
                            <div class="col-10 servive-bottom d-flex fade-in" align="center">
                                <div class="col-1"></div>
                                <div class="col-4 service-left slide-in">
                                    <div class="img">
                                        <img src="images/support.png" alt="">
                                        <h4><b>Support</b></h4>
                                    </div>
                                    <div class="info">
                                        <p>I'll do my best just count on me and give me a chance.</p>
                                    </div>
                                </div>
                                <div class="col-4"></div>
                                <div class="col-4 service-right slide-in">
                                    <div class="img">
                                        <img src="images/Responsive.png" alt="">
                                        <h4><b>Responsive Design</b></h4>
                                    </div>
                                    <div class="info">
                                        <p>Almostly is css and a little js.</p>
                                    </div>
                                </div>
                                <div class="col-1"></div>
                            </div>
                        </div>
                    </div>
                    <div class="service-footer"></div>
                    <hr>
                </div>
            </div>
        </div>
    </div>
</section>
<div id="experience-link"></div>
<section id="experience">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 fade-in">
                <div class="header-experience" align="center">
                    <div class="display-1">
                        <h2><b>EXPERIENCE</b></h2>
                    </div>
                </div>
                <div class="main-experience">
                    <div class="col-12 fade-in">
                        <div class="experience-topic col-11 col-xs-11 col-sm-11 col-md-4 col-lg-3 justify-content-center slide-in">
                            <div class="title-ex d-flex text-center">
                                <div class="info"><h3>Back-end Web Developer at Entetsu Viet Nam</h3> <i class="fab fa-laravel"></i></div>
                                <div class="time-line text-left"><h2>Begin: 3-2023<br><hr>Finish: 4-2023</h2></div>
                            </div>
                        </div>
                        <div class="experience-content col-12 col-xs-12 col-sm-12 col-md-8 col-lg-8 slide-in">
                            <ul>
                                <li><p><b>Project: </b>ERP (CMS: Nova).</p></li>
                                <li><p><b>Project description:</b>Lorem, ipsum, dolor sit amet consectetur adipisicing elit. Adipisci expedita dolorem repellendus sed aliquid soluta laborum earum odio mollitia perferendis.</p></li>
                                <li><p><b>Team size: 1</b></p></li>
                                <li><p><b>Technologies: CMS: Nova (laravel), MySQL</b></p></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="main-experience">
                    <div class="col-12 fade-in">
                        <div class="experience-topic col-11 col-xs-11 col-sm-11 col-md-4 col-lg-3 justify-content-center slide-in">
                            <div class="title-ex d-flex text-center">
                                <div class="info"><h3>Back-end Web Developer at Entetsu Viet Nam</h3> <i class="fab fa-redhat"></i></div>
                                <div class="time-line text-left"><h2>Begin: 10-2022<br><hr>Finish: 3-2023 (delay)</h2></div>
                            </div>
                        </div>
                        <div class="experience-content col-12 col-xs-12 col-sm-12 col-md-8 col-lg-8 slide-in">
                            <ul>
                                <li><p><b>Project: </b>EC-cube (PHP symfony)</p></li>
                                <li><p><b>Project description:</b> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officia mollitia ipsam atque laudantium repudiandae magni soluta cum, praesentium dolor dolores, provident, unde aliquid vel, voluptas? Nesciunt modi dignissimos maxime.</p></li>
                                <li><p><b>Team size: 4</b></p></li>
                                <li><p><b>Technologies: CMS: EC-cube (Symfony), Docker, MySQL</b></p></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="main-experience">
                    <div class="col-12 fade-in">
                        <div class="experience-topic col-11 col-xs-11 col-sm-11 col-md-4 col-lg-3 justify-content-center slide-in">
                            <div class="title-ex d-flex text-center">
                                <div class="info"><h3>Back-end Web Developer at Entetsu Viet Nam</h3> <i class="fab fa-laravel"></i></div>
                                <div class="time-line text-left"><h2>Begin: 6-2022<br><hr>Finish: 9-2022</h2></div>
                            </div>
                        </div>
                        <div class="experience-content col-12 col-xs-12 col-sm-12 col-md-8 col-lg-8 slide-in">
                            <ul>
                                <li><p><b>Project: </b>Assist Be (PHP laravel).</p></li>
                                <li><p><b>Project description:</b> Lorem ipsum dolor sit amet consectetur adipisicing elit. At eum nulla ratione quia, debitis asperiores veritatis pariatur quidem soluta impedit incidunt iure.</p></li>
                                <li><p><b>Team size: 2</b></p></li>
                                <li><p><b>Technologies: PHP (laravel), MySQL</b></p></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="main-experience">
                    <div class="col-12 fade-in">
                        <div class="experience-topic col-11 col-xs-11 col-sm-11 col-md-4 col-lg-3 justify-content-center slide-in">
                            <div class="title-ex d-flex text-center">
                                <div class="info"><h3>Full stack web developer </h3> <i class="fab fa-laravel"></i></div>
                                <div class="time-line text-left"><h2>Begin: 5-2021<br><hr>Finish: 6-2021</h2></div>
                            </div>
                        </div>
                        <div class="experience-content col-12 col-xs-12 col-sm-12 col-md-8 col-lg-8 slide-in">
                            <ul>
                                <li><p><b>Project:</b> EngZ0N3.</p></li>
                                <li><p><b>Project description:</b> A free website for helping people learning English and it's have shopping book service, blog post service, admin manager dashboard and more features.</p></li>
                                <li><p><b>Team size: 1</b></p></li>
                                <li><p><b>Technologies: Front-end: HTML, CSS, Js. Back-end: pure PHP, MySQL. </b></p></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="main-experience">
                    <div class="col-12 fade-in">
                        <div class="experience-topic col-11 col-xs-11 col-sm-11 col-md-4 col-lg-3 justify-content-center slide-in">
                            <div class="title-ex d-flex text-center">
                                <div class="info"><h3>PHP: Laravel framework </h3> <i class="fab fa-php mt-2"></i></div>
                                <div class="time-line text-left"><h2>Begin: 3-2022<br><hr>Finish: 4-2022</h2></div>
                            </div>
                        </div>
                        <div class="experience-content col-12 col-xs-12 col-sm-12 col-md-8 col-lg-8 slide-in">
                            <ul>
                                <li><p><b>Project:</b> ProjectN.</p></li>
                                <li><p><b>Project description:</b> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quaerat nesciunt impedit eligendi dolores cumque! Ad explicabo magni, nam!</p></li>
                                <li><p><b>Team size: 1</b></p></li>
                                <li><p><b>Technologies: Front-end: HTML, CSS, Js. Back-end: PHP, Laravel Framework, MySQL. </b></p></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div id="education-link"></div>
<section id="education">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-12">
                <div class="header-education fade-in" align="center">
                    <div class="display-1">
                        <h2><b>EDUCATION</b></h2>
                    </div>
                </div>
                <div class="col-12 fade-in">
                    <div class="">
                        <div class="main-education slide-in">
                            <h2>MSC OF INTERNATIONAL INNOVATION (COMPUTER SCIENCE PATHWAY)</h2>
                            <p>Goethe University Frankfurt, Germany</p>
                            <hr>
                            <ul align="left">
                                <li>Lorem ipsum dolor sit, amet consectetur, adipisicing elit. Accusamus! Lorem ipsum dolor, sit amet consectetur adipisicing elit. Lorem, ipsum, dolor.</li>
                                <li>Lorem ipsum dolor sit amet consectetur, adipisicing, elit. Dolor, minima. Lorem ipsum dolor sit, amet consectetur, adipisicing elit.</li>
                                <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis, ad officiis expedita. Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="">
                        <div class="main-education slide-in">
                            <h2>BACHELOR DEGREE</h2>
                            <p>Bachkhoa-aptech, Viet Nam</p>
                            <hr>
                            <ul align="left">
                                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et, soluta. Lorem ipsum dolor sit amet consectetur adipisicing, elit.</li>
                                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur, eum a! Lorem, ipsum dolor sit amet consectetur adipisicing elit.</li>
                                <li>Lorem ipsum dolor sit, amet consectetur adipisicing, elit. Error, natus, obcaecati? Lorem ipsum dolor sit amet consectetur. Lorem ipsum dolor, consectetur.</li>
                                <li>Lorem ipsum consectetur adipisicing elit. Voluptatum, eos fugiat. Lorem ipsum, dolor sit amet consectetur adipisicing elit.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="testimonials">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-12">
                <div class="header-testimonials">
                    <div class="display-1">
                        <h2><b>TESTIMONIALS</b></h2>
                    </div>
                </div>
                <div id="slides" class="carousel slide carousel-fade fade-in" data-ride="carousel">
                    <div class="carousel-inner col-12">
                        <img src="images/carousel-1.jpg" alt="" class="d-block mx-auto slide-in" align="center" width="97%">
                        <div class="carousel-items slide-in">
                            <div class="carousel-item text-center justify-content-center col-12 active">
                                <div class="col-12" align="center">
                                    <div class="info">
                                        <div class="info-2">
                                            <h2>DeSvck F4C3</h2>
                                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing, elit. Neque? lorem ipsum dolor sit, amet consectetur, adipisicing elit.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item text-center justify-content-center col-12">
                                <div class="col-12" align="center">
                                    <div class="info">
                                        <div class="info-2">
                                            <h2>Bill gate</h2>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea. ipsum dolor sit amet consectetur adipisicing elit.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item text-center justify-content-center col-12">
                                <div class="col-12" align="center">
                                    <div class="info">
                                        <div class="info-2">
                                            <h2>Steve Jobs</h2>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing, elit. Excepturi, pariatur? ipsum dolor sit amet consectetur adipisicing elit.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev carousel-nav" href="#slides" data-slide="prev">
                        <span class="carousel-space"></span></a>
                    <a class="carousel-control-next carousel-nav" href="#slides" data-slide="next">
                        <span class="carousel-space"></span></a>
                </div>
            </div>
        </div>
    </div>
</section>
<div id="contact-link"></div>
<section id="contact">
    <div class="container-fluid">
        <div class="row justify-content-center text-center">
            <div class="col-12">
                <div class="header-contact fade-in" align="center">
                    <div class="display-1">
                        <h2><b>CONTACT</b></h2>
                    </div>
                </div>
                <div class="main-contact fade-in">
                    <div class="col-12 d-flex">
                        <div class="col-6"></div>
                        <div class="col-6 contact-form" align="right">
                            <form>
                                <div class="form-group input-1 fade-in slide-in">
                                    <input type="text" class="form-control" name="" placeholder="Type your name">
                                    <i class="fas fa-user-circle" id="input_img"></i>
                                </div>
                                <div class="form-group input-2 fade-in slide-in">
                                    <input type="text" class="form-control" name="" placeholder="Enter your email">
                                    <i class="fas fa-mail-bulk" id="input_img"></i>
                                </div>
                                <div class="form-group input-3 fade-in slide-in">
                                    <input type="text" class="form-control" name="" placeholder="Enter your phone number">
                                    <i class="fa fa-phone-square" id="input_img"></i>
                                </div>
                                <div class="form-group input-4 fade-in slide-in">
                                    <input type="text" class="form-control" name="" placeholder="Enter your message">
                                    <i class="fab fa-facebook-messenger" id="input_img"></i>
                                </div>
                                <button class="btn btn-outline-danger">submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<footer id="footer">
    <div class="container-fluid">
        <div class="row text-center">
            <div class="col-12 d-flex">
                <div class="col-6"><img src="{{asset('image/about3.png')}}" alt="" width="100%"></div>
                <div class="col-6" align="right"><p>Made with <i class="fa fa-keyboard-o"></i> and <i class="fa fa-hand-stop-o">.</i></p><h5><b>Designed by Le Thanh Long.</b></h5></div>
            </div>
        </div>
    </div>
</footer>

<!-- ICON -->
<script defer src="{{asset('assets/fontawesome/js/fontawesome.js')}}"></script>

<script src="{{asset('assets/js/index.js')}}"></script>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
