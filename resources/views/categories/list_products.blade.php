@extends('layouts.loja')

@section('content')
	<h1>{{$category->title}}</h1>

	@include('layouts.products.list', ['products'=>$category->products])
@endsection