@extends('layouts.master')
@section('title')
    {{ $news->title }}
@endsection

@section('content')
    
    <div class="pt-3">
    <h2>{{ $news->title }}</h2>
    <p>{{ $news->content }}</p>
    </div>

    <div class="border-top mt-5 pt-3">
    <p>Created by <strong>{{ $user->name }}</strong></p>
    </div>
@endsection