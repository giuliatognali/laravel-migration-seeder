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
                    <li> <h5 class='pt-2'>{{ $train->departure_station }}</h5> 
                         {{\Carbon\Carbon::parse ($train->departure_time)->locale('it_IT')->isoFormat('LLLL');}} </li>
                    <li> <h5 class='pt-2'>{{ $train->arrival_station }}</h5> 
                        {{\Carbon\Carbon::parse ($train->arrival_time)->locale('it_IT')->isoFormat('LLLL');}}</li>     
                </ul>
            @endforeach
        </div>
    </div>
</body>

</html>
