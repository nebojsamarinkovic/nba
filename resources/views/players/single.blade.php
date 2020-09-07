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
        <h1>{{$first_name}} {{$last_name}}</h1>
        
        <div>
                 <a href="/teams/{{$team->id}}">{{$team->name}}</a>
                 <p>Email: {{$email}}</p>
                
        </div>
       
    </body>
</html>