<h4><b>{{ $item->title }}</b></h4>
<p><u>{{ $item->introduce }}</u></p>
<p><b>Description:</b> {{ $item->content }}</p>
<p><b>Position:</b> {{ $item->position_id }}</p>
<p><b>Technology:</b><br> - FE: {{ json_decode($item->technology_using)->FE }} <br>
    - BE: {{ json_decode($item->technology_using)->BE }}</p>
