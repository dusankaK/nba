@extends('layouts.master')
@section('title')
    {{ $team->name }}
@endsection


@section('content')

    <h3>Team</h3>
    <p>Name: {{ $team->name }}<p>
    <p>Email: {{ $team->email }}<p>
    <p>Address: {{ $team->address }}<p>
    <p>City: {{ $team->city }}<p>  
    
    <h3>Players:</h3>

    @foreach ($team->players as $player)
        <ul>
            <li>
                <a href="/players/{{ $player->id }}">{{ $player->first_name}} {{$player->last_name}}</a>
            </li>
        </ul>
    @endforeach    
    
@endsection