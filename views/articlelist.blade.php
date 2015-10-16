<h1>Laravel 5 Simple Article Module</h1>
<ul>
    @foreach($articlelist as $article)
        <li><a href="/article/{{ $article->id }}">{{ $article->title }}</a></li>
    @endforeach
</ul>