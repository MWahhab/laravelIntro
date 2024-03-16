<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Post</title>
    <style>
body {
    font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 20px;
        }

        .form-container {
    background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-bottom: 20px;
        }

        .form-input {
    width: 100%;
    padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 16px;
        }

        .form-input:focus {
    outline: none;
    border-color: #007bff;
            box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
        }

        .form-submit {
    background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        .form-submit:hover {
    background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h1>Edit Post</h1>
        <form method="POST" action="{{ route('posts.update', $post->id) }}">
@csrf <!-- CSRF Token -->
@method('PUT') <!-- HTTP Method Spoofing for PUT request -->

<label for="post_content">Post Content:</label><br>
<textarea id="post_content" name="post_content" class="form-input">{{ $post->post_content }}</textarea><br>

<button type="submit" class="form-submit">Update Post</button>
</form>
</div>
</body>
</html>
