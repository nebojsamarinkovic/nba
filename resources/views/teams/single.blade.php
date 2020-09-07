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
        
        <h1>{{$name}}</h1>
        
        <div>
            <p>Email: {{$email}}</p>
            <p>Adress: {{$adress}}</p>
            <p>City: {{$city}}</p>
        </div>
        <hr>
        <div>
            <h2>Roster</h2>
            @foreach($players as $player)
            <ul>
                <li>
                    <a href="/players/{{$player->id}}">{{$player->first_name}} {{$player->last_name}}</a>
                </li>
            </ul>
            @endforeach
            
        </div>

        <hr>
        <h2>Comments</h2>
        @foreach($comments as $comment)
        <ul>
            <li>
                {{$comment->content}}
            </li>
        </ul>
        @endforeach
    </body>
</html>