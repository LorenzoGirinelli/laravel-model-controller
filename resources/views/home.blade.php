<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Lista dei film</h1>

    @foreach ($movies as $movie)
    <div>
        <h2><a href="{{ route('movie', ['id' => $movie->id]) }}">Title: {{ $movie->title }}</a></h2>
        <p>Nationality: {{ $movie->nationality }}</p>
        <p>Vote: {{ $movie->vote }}</p>
    </div>
    @endforeach
</body>
</html>