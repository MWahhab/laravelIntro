<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Post</title>
</head>
<body>
<h1>Create Post</h1>

<form method="POST" action="{{ route('posts.store') }}">
    @csrf

    <label for="user_id">User ID:</label><br>
    <input type="text" id="user_id" name="user_id" value=""><br>

    <label for="post_content">Post Content:</label><br>
    <textarea id="post_content" name="post_content"></textarea><br>

    <button type="submit">Submit</button>
</form>
</body>
</html>
