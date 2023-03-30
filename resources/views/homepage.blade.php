<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movies</title>

    @vite('resources/js/app.js')
</head>
<body>
    <div class="container">
        <h1>Movies</h1>
        <div class="row">
           @foreach ($movies as $movie)
                <div class="col-5 g-2">
                    <div class="card" style="width: 18rem;">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Titolo: <strong>{{$movie -> title}}</strong></li>
                            <li class="list-group-item">Nazionalità: <strong>{{$movie -> nationality}}</strong></li>
                            <li class="list-group-item">Voto: <strong>{{$movie -> vote}}</strong></li>
                        </ul>
                    </div>
                </div>
            @endforeach 
        </div>

    </div>

</body>
</html>