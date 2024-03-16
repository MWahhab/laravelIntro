<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Posts</title>
</head>
<body>
<h1>All Posts</h1>

<a href="{{ route('posts.create') }}"><button>Add Post</button></a>

<ul>
    @foreach($posts as $post)
        <li>
            <p>Posted by: {{ $post->user->name }}</p>
            <p>Content: {{ $post->post_content }}</p>

            <a href="{{ route('posts.edit', $post->id) }}"><button>Edit Post</button></a>

            <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Delete Post</button>
            </form>
        </li>
    @endforeach

</ul>
</body>
</html>
