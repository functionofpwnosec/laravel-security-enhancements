<!DOCTYPE html>
<html>
<head>
    <title>{{ $article->title }}</title>
</head>
<body>
    <h1>{{ $article->title }}</h1>
    <p>{{ $article->content }}</p>
    <p>By {{ $article->user->name }}</p>

    <h2>Comments</h2>
    <form method="POST" action="{{ route('comments.store', $article) }}">
        @csrf
        <textarea name="content" required placeholder="Add a comment"></textarea>
        <button type="submit">Submit</button>
    </form>

    <ul>
        @foreach ($article->comments as $comment)
            <li>
                {{ $comment->content }} - by {{ $comment->user->name }}
                <form method="POST" action="{{ route('comments.destroy', $comment) }}" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>
