<h1>Cadastrar</h1>

@include('validation.messages')

<form action="{{ route('products.store') }}" method="POST">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    Title: <input type="text" name="title" value="{{ old('title') }}"><br>
    Description: <textarea name="body" value="{{ old('body') }}"></textarea><br>
    Value: <input type="text" name="value" value="{{ old('value') }}"><br>
    Quantity: <input type="number" name="qtd" value="{{ old('qtd') }}"><br>
    Url: <input type="text" name="url" value="{{ old('url') }}"><br>
    <input type="submit">
</form>