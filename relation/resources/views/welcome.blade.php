 <h1>{{ $data->title }}</h1>

<h3>Comments:</h3>
<ul>
    @foreach($data->comments as $comment)
        <li>{{ $comment->comment }}</li>
    @endforeach
</ul>
