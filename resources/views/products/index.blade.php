@extends('layouts.admin')

@section('title', 'Products')

@section('content')
<h1>Products</h1>

<a href="{{ route('products.create') }}" class="btn btn-primary pull-right">New</a>
<table class="table table-hover table-striped">
    <thead>
    <tr>
        <th>id</th>
        <th>title</th>
        <th>actions</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($data as $k=>$product)
        <tr>
            <td>{{ $product->id }}</td>
            <td>{{ $product->title }}</td>
            <td>
                <a href="{{ route('products.edit', ['id'=>$product->id]) }}" class="btn btn-primary btn-xs">edit</a>
                <a href="{{ route('products.show', ['id'=>$product->id]) }}" class="btn btn-success btn-xs">view</a>
                <a href="{{ route('products.categories', ['id'=>$product->id]) }}" class="btn btn-info btn-xs">categories</a>
                <form action="{{ route('products.show', ['id'=>$product->id]) }}" method="post" class="inlineblock">
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" >
                    <input type="submit" class="btn btn-danger btn-xs" value="remove">
                </form> </td>
            </tr>
    @endforeach
    </tbody>
    </table>
@endsection