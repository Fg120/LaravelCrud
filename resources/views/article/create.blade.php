<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Create Article</h1>
    <form action="{{ route('article.store') }}" method="POST">
        @csrf
        <label for="title">Title :</label>
        <br>
        <input type="text" name="title" required>

        <br>

        <label for="title">Content :</label>
        <br>
        <textarea name="content" cols="30" rows="10" required></textarea>

        <br>

        <button type="submit">Save</button>
    </form>
</body>

</html>
