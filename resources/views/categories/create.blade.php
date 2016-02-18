@extends('layouts.admin')

@section('title', 'New Category')

@section('content')
<h3>New Category</h3>

@include('validation.messages')

<form action="{{ route('categories.index') }}" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    Title: <input type="text" name="title" value="{{ old('title') }}" class="form-control"><br/>
    <input type="submit" value="Insert" class="btn btn-success btn-lg">
</form>
@endsection