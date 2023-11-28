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
                                <img src="{{ $about->image }}" alt="">
                            </div>
                        </div>
                        <div class="col-12 col-xs-12 col-sm-12 col-md-7 col-lg-7 mb-3 slide-in">
                            <div class="namaeb-info">
                                <h4 class="mb-4">HELLOU! MY NAME'S {{ $about->name }}</h4>
                                <h1><b>{{ $about->title }}</b></h1>
                                <p>{{ $about->description }}</p>
                                <a href="{{ $about->cv_url }}" target="_blank"><button class="btn btn-lg btn-outline-danger"><i class="fas fa-download mr-3"></i>My CV</button></a>
                            </div>
                            <hr>
                            <div class="contact-info">
                                <ul class="col-12 col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                    <li><i class="fas fa-user-secret"></i> - {{ $about->name }}</li>
                                    <li><i class="fas fa-home"></i> - {{ $about->address }}</li>
                                </ul>
                                <ul class="col-12 col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                    <li><i class="fas fa-phone-alt"></i> - {{ $about->phone_number }}</li>
                                    <li><i class="far fa-envelope-open"></i> - {{ $about->email }}</li>
                                </ul>
                            </div>
                            <div class="more-contact-info mt-2" align="right">
                                <a href="{{ implode(array_column(json_decode($about->relate_url, true), 'github')) }}" target="_blank" class="mr-2"><i class="fab fa-github"></i></a>
                                <a href="{{ implode(array_column(json_decode($about->relate_url, true), 'twitter')) }}" target="_blank" class="mr-2"><i class="fab fa-twitter"></i></a>
                                <a href="{{ implode(array_column(json_decode($about->relate_url, true), 'linkedin')) }}" target="_blank" class="mr-2"><i class="fab fa-linkedin-in"></i></a>
                                <a href="{{ implode(array_column(json_decode($about->relate_url, true), 'profile_website')) }}" target="_blank"><i class="fas fa-globe"></i></a>
                            </div>
                        </div>
                    </div>
                    <hr>
                </div>
            </div>
        </div>
    </div>
</section>
