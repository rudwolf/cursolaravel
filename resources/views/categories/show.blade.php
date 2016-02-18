@extends('layouts.admin')

@section('title', 'Products')

@section('content')
<h3>{{ $data->title }}</h3>

<ul>
    <li>{{ $data->id }}</li>
</ul>
@endsection