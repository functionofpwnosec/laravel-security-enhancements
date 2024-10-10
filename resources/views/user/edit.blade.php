<!DOCTYPE html>
<html>
<head>
    <title>Edit Profile</title>
</head>
<body>
    <h1>Edit Profile</h1>
    <form method="POST" action="{{ route('profile.update') }}">
        @csrf
        @method('PUT')
        <input type="text" name="name" value="{{ $user->name }}" required placeholder="Name">
        <input type="email" name="email" value="{{ $user->email }}" required placeholder="Email">
        <button type="submit">Update Profile</button>
    </form>
</body>
</html>
