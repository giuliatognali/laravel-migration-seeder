<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Trains</title>
    @vite('resources/js/app.js')
</head>

<body>
    <div class="container">
        <h1>Elenco Treni</h1>
        <div class="row">
            @foreach ($trains as $train)
                <ul class='card col-3 m-2'>
                    <li>{{ $train->train_code }} - {{$train->company}}</li>
                    <li>{{ $train->departure_station }} -{{ $train->departure_time }} </li>
                    <li>{{ $train->arrival_station }} - {{ $train->arrival_time }}</li>              
                </ul>
            @endforeach
        </div>
    </div>

</body>

</html>
