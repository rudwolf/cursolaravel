@extends('layouts.admin')

@section('title', 'New Product')

@section('content')
<h1>New Product</h1>

@include('validation.messages')

<form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    Title: <input type="text" name="title" value="{{ old('title') }}" class="form-control"><br/>
    Description: <textarea name="body" value="{{ old('body') }}" class="form-control"></textarea><br/>
    Value: <input type="text" name="value" value="{{ old('value') }}" class="form-control"><br/>
    Quantity: <input type="number" name="qtd" value="{{ old('qtd') }}" class="form-control"><br/>
    Url: <input type="text" name="url" value="{{ old('url') }}" class="form-control"><br/>
    Product Image: <input type="file" name="image" id="image" class="form-control"/><br/>
    <input type="submit" value="Insert" class="btn btn-success btn-lg">
</form>
@endsection