<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Edit Article</h1>
    <form action="{{ route('article.update', $articles->id) }}" method="POST">
        @csrf
        <label for="title">Title :</label>
        <br>
        <input type="text" name="title" value="{{ $articles->title }}" required>

        <br>

        <label for="title">Content :</label>
        <br>
        <textarea name="content" cols="30" rows="10" required>{{ $articles->content }}</textarea>

        <br>

        <button type="submit">Save</button>
    </form>
</body>

</html>
