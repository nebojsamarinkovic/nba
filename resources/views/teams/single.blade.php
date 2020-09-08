@extends('layouts.main')
@section('title', '| {{$name}}')

@section('content')        
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
                <h5>{{$comment->user_id}}</h5>
                <p>{{$comment->content}}</p>
            </li>
        </ul>
        @endforeach
@endsection