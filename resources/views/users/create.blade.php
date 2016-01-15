<h1>Cadastrar</h1>

@include('validation.messages')

<form action="{{ route('users.store') }}" method="POST">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    Nome: <input type="text" name="name" value="{{ old('name') }}"><br>
    Email: <input type="email" name="email" value="{{ old('email') }}"><br>
    Senha: <input type="password" name="password"><br>
    <input type="submit" value="Inserir">
</form>