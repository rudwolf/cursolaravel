@extends('layouts.admin')

@section('title', 'Categories')

@section('content')
<h1>Categories</h1>

<a href="{{ route('categories.create') }}" class="btn btn-primary pull-right">New</a>
<table class="table table-hover table-striped">
    <thead>
    <tr>
        <th>id</th>
        <th>title</th>
        <th>actions</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($data as $k=>$v)
        <tr>
            <th>{{ $v->id }}</th>
            <th>{{ $v->title }}</th>
            <th>
                <a href="{{ route('categories.show', ['id'=>$v->id]) }}" class="btn btn-primary btn-xs">view</a>
                <a href="{{ route('categories.edit', ['id'=>$v->id]) }}" class="btn btn-success btn-xs">edit</a>
                <form action="{{ route('categories.show', ['id'=>$v->id]) }}" method="post" class="inlineblock">
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" >
                    <input type="submit" class="btn btn-danger btn-xs" value="remove">
                </form> </th>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection