<!DOCTYPE html>
<html>
<head>
    <title>Edit Article</title>
</head>
<body>
    <h1>Edit Article</h1>
    <form method="POST" action="{{ route('articles.update', $article) }}">
        @csrf
        @method('PUT')
        <input type="text" name="title" value="{{ $article->title }}" required placeholder="Title">
        <textarea name="content" required placeholder="Content">{{ $article->content }}</textarea>
        <button type="submit">Update</button>
    </form>
</body>
</html>
