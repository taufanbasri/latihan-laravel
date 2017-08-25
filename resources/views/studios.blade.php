<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Studio</title>
</head>
<body>
    @foreach(\App\Studio::with('movies')->get() as $studio)
        <h1>{{ $studio->name }}</h1>
        <ul>
            @forelse($studio->movies as $movie)
                <li>{{ $movie->name }}</li>
            @empty
                Tidak ada film di studio ini.
            @endforelse
        </ul>
    @endforeach
</body>
</html>