@extends('layouts.admin')

@section('title', 'Edit Category')

@section('content')
<h3>Edit Category</h3>

@include('validation.messages')

<form action="{{ route('admin.categories.update', ['id'=>$data->id]) }}" method="post">
    <input type="hidden" name="_method" value="PUT">
    <input type="hidden" name="_token" value="{{ csrf_token() }}" class="form-control">
    Title: <input type="text" name="title" value="{{ $data->title }}" class="form-control"><br/>
    <input type="submit" class="btn btn-success" value="Edit">
</form>
@endsection