<h3>Editar Categoria</h3>

@include('validation.messages')

<form action="{{ route('categories.update', ['id'=>$data->id]) }}" method="post">
    <input type="hidden" name="_method" value="{{ csrf_token() }}">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    Título: <input type="text" name="title" value="{{ $data->title }}"><br/>
    <input type="submit" value="Inserir">
</form>