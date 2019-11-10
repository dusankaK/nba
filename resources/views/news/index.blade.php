@extends('layouts.master')
@section('title', 'News')

@section('content')
    
    @foreach ($news as $vest)

        <p> <a href="/news/{{ $vest->id }}">{{ $vest->title }}</a> posted by {{ $vest->user->name }} </p>
        
    @endforeach
@endsection