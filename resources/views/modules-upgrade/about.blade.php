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
                        <a href="{{ implode(array_column(json_decode($about->relate_url, true), 'github')) }}"
                           target="_blank" class="mr-2"><i class="fab fa-github"></i></a>
                        <a href="{{ implode(array_column(json_decode($about->relate_url, true), 'twitter')) }}"
                           target="_blank" class="mr-2"><i class="fab fa-twitter"></i></a>
                        <a href="{{ implode(array_column(json_decode($about->relate_url, true), 'linkedin')) }}"
                           target="_blank" class="mr-2"><i class="fab fa-linkedin-in"></i></a>
                        <a href="{{ implode(array_column(json_decode($about->relate_url, true), 'profile_website')) }}"
                           target="_blank"><i class="fas fa-globe"></i></a>
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
