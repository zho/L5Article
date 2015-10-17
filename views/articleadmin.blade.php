<h1>Article Admin</h1>

<a href="/article/admin/add">Article Add</a>
<table border="1">
    <tr>
        <th>Title</th>
        <th>Teaser</th>
        <th>Action</th>
    </tr>
    @foreach($articlelist as $article)
    <tr>
        <td>{{ $article->title }}</td>
        <td>{{ $article->teaser }}</td>
        <td>
            <a href="/article/admin/edit/{{ $article->id }}">Edit</a> |
            <a href="/article/admin/delete/{{ $article->id }}">Delete</a>
        </td>
    </tr>
    @endforeach
</table>