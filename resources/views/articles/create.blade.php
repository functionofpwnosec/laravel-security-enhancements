<!DOCTYPE html>
<html>
<head>
    <title>Create Article</title>
</head>
<body>
    <h1>Create Article</h1>
    <form method="POST" action="{{ route('articles.store') }}">
        @csrf
        <input type="text" name="title" required placeholder="Title">
        <textarea name="content" required placeholder="Content"></textarea>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
