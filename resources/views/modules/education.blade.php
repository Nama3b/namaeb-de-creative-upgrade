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
                    @foreach($education as $item)
                    <div>
                        <div class="home-main-education slide-in">
                            <h2>{{ $item->title }}</h2>
                            <p>{{ $item->certificate }}</p>
                            <hr>
                            <ul align="left">
                                @foreach(json_decode($item->content) as $content_item)
                                    <ul>{{ $content_item }}</ul>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
