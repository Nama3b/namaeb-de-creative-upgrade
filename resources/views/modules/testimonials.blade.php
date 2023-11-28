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
                            @foreach($client as $key => $item)
                                <div class="carousel-item text-center justify-content-center col-12 @if($key) active @endif">
                                    <div class="col-12" align="center">
                                        <div class="info">
                                            <div class="info-2">
                                                <h2>{{ $item->name }}</h2>
                                                <p>{{ $item->comment }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
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
