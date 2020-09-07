<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

       
    </head>
    <body>
        <h1>Teams</h1>
        @foreach($teams as $team)
        <div>
                <a href="/teams/{{$team->id}}"</a>
                <p>Email: {{$team->email}}</p>
                <p>Adress: {{$team->adress}}</p>
                <p>City: {{$team->city</p>
        </div>
       @endforeach
    </body>
</html>