@extends('layouts.master')
@section('title')
    News of {{ $team->name }}
@endsection

@section('content')
    @foreach ($teamNews as $news)
        <ul>
            <li>
                <a href="/news/{{ $news->id }}"> {{ $news->title }} </a> <br>
            </li>
        </ul>
    @endforeach
@endsection