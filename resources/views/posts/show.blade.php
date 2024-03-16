<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Post</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 20px;
        }

        .post-container {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-bottom: 20px;
        }

        .post-content {
            font-size: 16px;
            color: #555;
            line-height: 1.6;
            margin-bottom: 15px;
        }

        .post-meta {
            font-size: 14px;
            color: #888;
        }
    </style>
</head>
<body>
<div class="post-container">
    <h1 class="post-meta">Posted by: {{ $post->user->name }}</h1>
    <p class="post-content">{{ $post->post_content }}</p>
</div>
</body>
</html>

