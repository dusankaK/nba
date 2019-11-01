@extends('layouts.master')
@section('title', 'Teams')

@section('content')

    @foreach($teams as $team)
    <p><a href="/teams/{{ $team->id }}">{{ $team->name }}<a><p>
    @endforeach
@endsection