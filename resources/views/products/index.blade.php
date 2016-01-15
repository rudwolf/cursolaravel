<h1>Produtos</h1>
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
<a href="{{ route('products.create') }}">Novo</a>
<table>
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
            <th>{{ $product->id }}</th>
            <th>{{ $product->title }}</th>
            <th>
                <a href="{{ route('products.show', ['id'=>$product->id]) }}">view</a>
                <a href="{{ route('products.edit', ['id'=>$product->id]) }}">edit</a>
                <form action="{{ route('products.show', ['id'=>$product->id]) }}" method="post">
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" >
                    <input type="submit" class="buttonAsLink" value="remove">
                </form> </th>
            </tr>
    @endforeach
    </tbody>
    </table>