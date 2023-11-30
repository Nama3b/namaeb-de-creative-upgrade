<div id="experience" class="experience">
    <div class="container">
        <div class="exp-content">
            @foreach($experience as $key => $item)
                <div class="d-flex">
                    @if($key % 2 == 0)
                        <div class="exp-item-left col-10 col-md-5">
                            @include('modules-upgrade.common.experience-item')
                        </div>
                    @else
                        <div class="exp-item-left-empty col-10 col-md-5">
                        </div>
                    @endif
                    <div class="col-2">
                        <p class="start-date">{{ date('Y/m', strtotime($item->start_date)) }}</p>
                        <i class="far fa-dot-circle"></i>
                        <p class="end-date">{{ date('Y/m', strtotime($item->end_date)) }}</p>
                        <div class="vertical-line"></div>
                    </div>
                    @if($key % 2 != 0)
                        <div class="exp-item-right col-10 col-md-5">
                            @include('modules-upgrade.common.experience-item')
                        </div>
                    @endif
                </div>
            @endforeach
        </div>
    </div>
</div>
