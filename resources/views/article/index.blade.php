<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Article Index</title>
</head>

<body>
    <h1>Data Article</h1>
    <a href="{{ route('article.create') }}">
        <button>create</button>
    </a>

    <table border="1">
        <thead>
            <tr>
                <td>No</td>
                <td>Title</td>
                <td>Action</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($articles as $i)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $i->title }}</td>
                    <td>
                        <a href="{{ route('article.edit', $i->id) }}"><button>edit</button></a>
                        <a href="{{ route('article.show', $i->id) }}"><button>view</button></a>
                        <a href="{{ route('article.destroy', $i->id) }}"><button>delete</button></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
