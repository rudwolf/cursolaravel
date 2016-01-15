<h1>Usuários</h1>
<style>
    form {
        display: inline-block;
    }
    .buttonAsLink {
        background:none!important;
        border:none;
        padding:0!important;
        font: inherit;
        /*border is optional*/
        text-decoration: underline;
        cursor: pointer;
    }
</style>
<a href="{{ route('users.create') }}">Novo</a>
<table>
    <thead>
    <tr>
        <th>id</th>
        <th>nome</th>
        <th>email</th>
        <th>actions</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($data as $k=>$v)
        <tr>
            <th>{{ $v->id }}</th>
            <th>{{ $v->name }}</th>
            <th>{{ $v->email }}</th>
            <th>
                <a href="{{ route('users.show', ['id'=>$v->id]) }}">view</a>
                <a href="{{ route('users.edit', ['id'=>$v->id]) }}">edit</a>
                <form action="{{ route('users.show', ['id'=>$v->id]) }}" method="post">
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" >
                    <input type="submit" class="buttonAsLink" value="remove">
                </form> </th>
            </tr>
    @endforeach
    </tbody>
    </table>