<h3>Nova Categoria</h3>

@include('validation.messages')

<form action="{{ route('categories.index') }}" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    Título: <input type="text" name="title" value="{{ old('title') }}"><br/>
    <input type="submit" value="Inserir">
</form>