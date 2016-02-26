@extends('layouts.admin')

@section('title', 'Products')

@section('content')
<h1>Categorias de {{ $product->title }}</h1>

<form action="{{ route('admin.products.categories', ['id'=>$product->id]) }}"method="POST">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <ul>
    @foreach ($categories as $k=>$v)
        <li>
            <input type="checkbox" name="categories[]" value="{{ $k }}" @if(!empty($checked[$k])) checked @endif /> {{ $v  }}
        </li>
    @endforeach
    </ul>
    <input type="submit">
</form>
@endsection