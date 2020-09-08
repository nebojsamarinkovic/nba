@extends('layouts.main')
@section('title', '| {{$first_name}} {{$last_name}}')

@section('content')
        <h1>{{$first_name}} {{$last_name}}</h1>
        
        <div>
                 <a href="/teams/{{$team->id}}">Team: {{$team->name}}</a>
                 <p>Email: {{$email}}</p>
                
        </div>
@endsection