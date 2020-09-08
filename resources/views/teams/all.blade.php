@extends('layouts.main')
@section('title', '| Index')

@section('content')
        
        <h1>Teams</h1>
        @foreach($teams as $team)
        <div>
                <a href="/teams/{{$team->id}}">{{$team->name}}</a>              
        </div>
       @endforeach
       
@endsection
