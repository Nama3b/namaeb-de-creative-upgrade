<div id="education" class="education">
    <div class="container">
        <div class="education-content col-12 fade-in">
            @foreach($education as $item)
                <div class="education-item slide-in">
                    <h2>{{ $item->title }}</h2>
                    <p>{{ $item->certificate }}</p>
                    <hr>
                    <ul>
                        @foreach(json_decode($item->content) as $content_item)
                            <ul>{{ $content_item }}</ul>
                        @endforeach
                    </ul>
                </div>
            @endforeach
        </div>
    </div>
</div>
