<ul>
    @foreach($articlelist as $article)
        <li>{{ $article->title }}</li>
    @endforeach
</ul>