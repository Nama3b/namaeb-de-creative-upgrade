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
