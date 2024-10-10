<!DOCTYPE html>
<html>
<head>
    <title>Articles</title>
</head>
<body>
    <h1>Articles</h1>
    <a href="{{ route('articles.create') }}">Create Article</a>
    <ul>
        @foreach ($articles as $article)
            <li>
                <a href="{{ route('articles.show', $article) }}">{{ $article->title }}</a> by {{ $article->user->name }}
                <form method="POST" action="{{ route('articles.destroy', $article) }}" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
                <a href="{{ route('articles.edit', $article) }}">Edit</a>
            </li>
        @endforeach
    </ul>
</body>
</html>
