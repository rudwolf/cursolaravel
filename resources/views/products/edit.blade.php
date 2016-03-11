@extends('layouts.admin')

@section('title', 'Editar Produto')

@section('content')

<h1>Editando {{ $data->name }}</h1>

@include('validation.messages')

<form class="form" action="{{ route('admin.products.update', ['id'=>$data->id]) }}"method="POST">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="hidden" name="_method" value="PUT">
    Title: <input type="text" name="title" value="{{ $data->title }}" class="form-control"><br>
    Description: <textarea name="body" class="form-control">{{ $data->body }}</textarea><br>
    Value: <input type="number" name="value" value="{{ $data->value }}" class="form-control"><br>
    Quantity: <input type="number" name="qtd" value="{{ $data->qtd }}" class="form-control"><br>
    Url: <input type="text" name="url" value="{{ $data->url }}" class="form-control"><br>

    <input type="submit" value="Alterar" class="btn btn-success btn-lg">
</form>
@endsection