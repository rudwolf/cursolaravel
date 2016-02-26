@extends('layouts.admin')

@section('title', 'Products')

@section('content')
<h1>Editando {{ $data->name }}</h1>

@include('validation.messages')

<form action="{{ route('admin.users.update', ['id'=>$data->id]) }}"method="POST">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="hidden" name="_method" value="PUT">
    Name: <input type="text" name="name" value="{{ $data->name }}" class="form-control"><br>
    E-mail: <input type="email" name="email" value="{{ $data->email }}" class="form-control"><br>
    Password: <input type="password" name="password" class="form-control"><br>
    <input type="submit" value="Alterar">
</form>
@endsection