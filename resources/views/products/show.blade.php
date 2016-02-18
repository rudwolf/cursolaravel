@extends('layouts.admin')

@section('title', 'Products')

@section('content')
<h1 class="page-header">{{ $data->title }}</h1>
<ul>
    <li>value: {{ $data->value }}</li>
    <li>qtd: {{ $data->qtd }}</li>
    <li>url: {{ $data->url }}</li>
    <li>cadastro: {{ $data->created_at }}</li>
    <li>atualização: {{ $data->updated_at }}</li>
</ul>
<hr>
<p>Description</p>
{{ $data->body }}
@endsection