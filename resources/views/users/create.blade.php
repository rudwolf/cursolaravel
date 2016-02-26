@extends('layouts.admin')

@section('title', 'New User')

@section('content')
<h1>New User</h1>

@include('validation.messages')

<form action="{{ route('admin.users.store') }}" method="POST">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    Name: <input type="text" name="name" value="{{ old('name') }}" class="form-control"><br>
    E-mail: <input type="email" name="email" value="{{ old('email') }}" class="form-control"><br>
    Password: <input type="password" name="password" class="form-control"><br>
    <input type="submit" value="Insert" class="btn btn-success">
</form>
@endsection