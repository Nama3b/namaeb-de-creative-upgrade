<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>My Portfolio</title>

    <link href="{{asset('image/logo.jpg')}}" rel="icon">
    <link rel="stylesheet" href="{{asset('css/home-cv.css')}}">
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">

    <!-- font-awesome -->
    <link rel="stylesheet" href="{{asset('assets/fontawesome/css/all.css')}}">
    <link rel="stylesheet" href="{{asset('assets/font-awesome-4.7.0/css/font-awesome.min.css')}}">

    <!-- bootstrap -->
    <link rel="stylesheet" type="text/css" href="{{asset('bootstrap/css/bootstrap.min.css')}}">

    <!-- smooth-scroll -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>

<div id="home-cv" class="home-cv">
    <div id="profile-side" class="profile-side">
        <div class="introduce">
            <h4>LE THANH LONG</h4>
            <p>Lorem ipsum dolor sit amet.</p>
            <img
                src="https://scontent.fhan14-3.fna.fbcdn.net/v/t1.15752-9/403669435_875919380936417_1536252136765944219_n.jpg?stp=dst-jpg_s2048x2048&_nc_cat=104&ccb=1-7&_nc_sid=8cd0a2&_nc_ohc=W0gvWcdHqmYAX8F3Bfn&_nc_ht=scontent.fhan14-3.fna&oh=03_AdSONvomgq2AuuD1Wb_YNyftrd7VO9LpCnHOWa3ouzQB0g&oe=65866F11"
                alt="">
        </div>
        {{--        <div class="contact">--}}
        {{--            <h4><i class=""></i>CONTACT ME</h4>--}}
        {{--            <ul>--}}
        {{--                <li><i class=""></i>038-523-0377</li>--}}
        {{--                <li><i class=""></i>https://www.facebook.com/lethanhlong8151</li>--}}
        {{--                <li><i class=""></i>Dong Anh, Ha Noi, Viet Nam.</li>--}}
        {{--            </ul>--}}
        {{--        </div>--}}
        <div class="description">
            <div class="education">
                <h4><i class="fas fa-graduation-cap"></i>EDUCATION</h4>
                <div class="education-item">
                    <h6><b>STANFORD UNIVERSITY</b></h6>
                    <p>Lorem ipsum dolor sit amet, consectetur.</p>
                    <small>2018 - 2021</small>
                </div>
                <div class="education-item">
                    <h6><b>HARVARD UNIVERSITY</b></h6>
                    <p>Lorem ipsum dolor sit consectetur.</p>
                    <small>2021 - Now</small>
                </div>
            </div>
            <div class="reference">
                <h4><i class="fas fa-users"></i>REFERENCES</h4>
                <div class="reference-item">
                    <h6><b>DARWIN R.EREN</b></h6>
                    <p>2813 Shabe Lane Mances, CO</p>
                    <p>Tel: +1-970-533-3393</p>
                    <p>Email: noobust3r@gmail.com</p>
                </div>
                <div class="reference-item">
                    <h6><b>ROBERT J.ERWIN</b></h6>
                    <p>2119 Fairfax Drive Newalk, NJ</p>
                    <p>Tel: +1-970-533-8888</p>
                    <p>Email: leeDang07@gmail.com</p>
                </div>
            </div>
        </div>
    </div>
    <div id="mainBody" class="profile-body">
        <div class="container">
            <div class="about">
                <div class="col-1">
                    <i class="far fa-dot-circle"></i>
                    <div class="vertical-line"></div>
                </div>
                <div class="col-11">
                    <div class="about-item">
                        <h4><i class="fas fa-user-circle"></i>ABOUT ME</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus at libero molestias
                            mollitia
                            neque nesciunt quo sint voluptatum! Ad dicta distinctio eveniet exercitationem nam! Atque,
                            doloribus
                            eveniet iure laborum laudantium nisi reiciendis sapiente suscipit! Aspernatur beatae
                            delectus
                            deserunt eius eos esse, et id inventore minus, modi nostrum quidem, suscipit tempore.</p>
                    </div>
                </div>
            </div>
            <div class="experience">
                <div class="col-1">
                    <i class="far fa-dot-circle"></i>
                    <div class="vertical-line"></div>
                </div>
                <div class="col-11">
                    <h4><i class="fas fa-briefcase"></i>JOB EXPERIENCE</h4>
                    <div class="experience-item">
                        <div class="d-flex">
                            <div class="col-8">
                                <h5>MIDDLE WEB DEVELOPER</h5>
                                <small>Creative Agency / Chicago</small>
                            </div>
                            <div class="col-4 text-right">
                                <b>2021 - 2022</b>
                            </div>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic provident reiciendis veritatis
                            voluptatibus? Fugiat laboriosam necessitatibus vero! Dicta distinctio eaque fuga itaque,
                            laborum
                            mollitia quo quod sed, sequi similique unde!</p>
                    </div>
                    <div class="experience-item">
                        <div class="d-flex">
                            <div class="col-8">
                                <h5>BRIDGE SOFTWARE ENGINEER</h5>
                                <small>Team lead / Silicon Valley</small>
                            </div>
                            <div class="col-4 text-right">
                                <b>2022 - 2023</b>
                            </div>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic provident reiciendis veritatis
                            voluptatibus? Fugiat laboriosam necessitatibus vero! Dicta distinctio eaque fuga itaque,
                            laborum
                            mollitia quo quod sed, sequi similique unde!</p>
                    </div>
                    <div class="experience-item">
                        <div class="d-flex">
                            <div class="col-8">
                                <h5>CHIEF TECHNOLOGY OFFICER</h5>
                                <small>Team lead / Silicon Valley</small>
                            </div>
                            <div class="col-4 text-right">
                                <b>2023 - Now</b>
                            </div>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic provident reiciendis veritatis
                            voluptatibus? Fugiat laboriosam necessitatibus vero! Dicta distinctio eaque fuga itaque,
                            laborum
                            mollitia quo quod sed, sequi similique unde!</p>
                    </div>
                </div>
            </div>
            <div class="skill">
                <div class="col-1">
                    <i class="far fa-dot-circle"></i>
                    <div class="vertical-line"></div>
                </div>
                <div class="col-11">
                    <h4><i class="fas fa-chart-pie"></i>SKILLS</h4>
                    <div class="skill-content">
                        <div class="skill-item">
                            <div class="col-4">
                                <p>PHP laravel</p>
                            </div>
                            <div class="col-8">
                                <div class="laravel-progress"></div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <div class="col-4">
                                <p>VueJs</p>
                            </div>
                            <div class="col-8">
                                <div class="vuejs-progress"></div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <div class="col-4">
                                <p>DevOps</p>
                            </div>
                            <div class="col-8">
                                <div class="devops-progress"></div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <div class="col-4">
                                <p>Project Manager</p>
                            </div>
                            <div class="col-8">
                                <div class="pm-progress"></div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <div class="col-4">
                                <p>General Manager</p>
                            </div>
                            <div class="col-8">
                                <div class="gm-progress"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="lang-hob">
                <div class="col-1">
                    <i class="far fa-dot-circle"></i>
                    <div class="vertical-line"></div>
                </div>
                <div class="col-11">
                    <div class="col-6">
                        <h4><i class="fas fa-globe-asia"></i>LANGUAGE</h4>
                        <ul class="language">
                            <li>Vietnamese</li>
                            <li>English</li>
                            <li>Japanese</li>
                        </ul>
                    </div>
                    <div class="col-6">
                        <h4><i class="fas fa-flag-checkered"></i>HOBBIES</h4>
                        <ul class="hobby">
                            <li>Video games</li>
                            <li>Badminton</li>
                            <li>Jogging</li>
                            <li>Traveling</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<!-- ICON -->
<script defer src="{{asset('assets/fontawesome/js/fontawesome.js')}}"></script>
<script src="{{asset('assets/js/index.js')}}"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>
