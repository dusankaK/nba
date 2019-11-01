@extends('layouts.master')
@section('title')
    {{ $player->first_name }} {{ $player->last_name }}
@endsection

@section('content')

    <h3>Player</h3>
    <p>Name: {{ $player->first_name }} {{ $player->last_name }}</p>
    <p>Player email: {{ $player->email}} </p>
    <p>Team: <a href="/teams/{{ $player->team->id }}"> {{ $player->team->name }}</a></p>
    
@endsection
    
    
