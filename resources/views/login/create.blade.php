@extends('layouts.master')
@section('title', 'Login')

@section('content')

    @if (isset($message))
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        
    @endif

<form method="POST" action="/login">
    @csrf

    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" class="form-control" id="email">
        @include('partials.error-message' , ['fieldName' => 'email'])
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name="password" class="form-control" id="password">
        @include('partials.error-message' , ['fieldName' => 'password'])
    </div>

    <button type="submit" class="btn btn-primary">Login</button>
</form>

@endsection