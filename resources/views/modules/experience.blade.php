<div id="experience">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 fade-in">
                <div class="header-experience" align="center">
                    <div class="display-1">
                        <h2><b>EXPERIENCE</b></h2>
                    </div>
                </div>
                @foreach($experience as $item)
                    <div class="home-main-experience">
                        <div class="col-12 fade-in">
                            <div
                                class="experience-topic col-11 col-xs-11 col-sm-11 col-md-4 col-lg-3 justify-content-center slide-in">
                                <div class="title-ex">
                                    <div class="info"><h3>{{ $item->introduce }}</h3> <i
                                            class="fab fa-laravel"></i></div>
                                    <div class="time-line text-left">
                                        <h2>Begin: {{ date('Y/m', strtotime($item->start_date)) }}<br>
                                            <hr>
                                            Finish: {{ date('Y/m', strtotime($item->end_date)) }}</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="experience-content col-12 col-xs-12 col-sm-12 col-md-8 col-lg-8 slide-in">
                                <ul>
                                    <li><p><b>Project: </b>{{ $item->title }}.</p></li>
                                    <li><p><b>Project description: </b>{{ $item->content }}</p></li>
                                    <li><p><b>Position: {{ $item->position_id }}</b></p></li>
                                    <li><p><b>Technologies: <br> - Front-end: {{ json_decode($item->technology_using)->FE }}
                                                <br> - Back-end: {{ json_decode($item->technology_using)->BE }}</b></p></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
