@extends('layouts.admin')

@section('title', 'Admin Access')

@section('content')
    <h3 class="text-center">User Auth</h3>
    <p>Type your user and password</p>

    @include('validation.messages')

    <form action="{{ route('auth.login') }}" class="col-md-4 col-md-offset-4" method="post">
        {!! csrf_field() !!}
        Email: <input type="email" name="email" value="{{old('email')}}" class="form-control"><br/>
        Password: <input type="password" name="password" class="form-control"><br/>
        <input type="checkbox" name="remember"> Remember me<br/>
        <input type="submit" value="Login" class="btn btn-primary">
    </form>
@endsection