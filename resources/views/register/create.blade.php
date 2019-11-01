@extends('layouts.master')
@section('title', 'Register')
@section('content')

<form method="POST" action="/register">
    @csrf

    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control" id="name">
        @include('partials.error-message' , ['fieldName' => 'name'])
    </div>
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
    <div class="form-group">
        <label for="password_confirmation">Confirm password</label>
        <input type="password" name="password_confirmation" class="form-control" id="password">
        @include('partials.error-message' , ['fieldName' => 'password_confirmation'])
    </div>

    <button type="submit" class="btn btn-primary">Register</button>
</form>
@endsection