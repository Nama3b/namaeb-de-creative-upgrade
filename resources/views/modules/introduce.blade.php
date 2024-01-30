<div id="introduce">
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
                            <div class="service-content fade-in" align="center" id="service">
                                @foreach($service as $item)
                                    <div class="service-item slide-in mb-3">
                                        <div class="img">
                                            <img src="{{ asset($item->image_thumbnail) }}" alt="">
                                            <h4><b>{{ $item->title }}</b></h4>
                                        </div>
                                        <div class="info">
                                            <p>{{ $item->content }}</p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="service-footer"></div>
                    <hr>
                </div>
            </div>
        </div>
    </div>
</div>
