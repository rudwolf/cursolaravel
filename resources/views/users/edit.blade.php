<h1>Editando {{ $data->name }}</h1>

@include('validation.messages')

<form action="{{ route('users.update', ['id'=>$data->id]) }}"method="POST">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="hidden" name="_method" value="PUT">
    Nome: <input type="text" name="name" value="{{ $data->name }}"><br>
    Email: <input type="email" name="email" value="{{ $data->email }}"><br>
    Senha: <input type="password" name="password"><br>
    <input type="submit" value="Alterar">
</form>