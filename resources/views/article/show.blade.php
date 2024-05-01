<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show Article</title>
</head>

<body>
    <a href="{{ route('article.index') }}"><button>kembail</button></a>
    <h1>{{ $articles->title }}</h1>
    <p>{{ $articles->content }}</p>
</body>

</html>
