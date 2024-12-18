<form action="{{ route('categoria.update', $categoria->CATEGORIA_ID)}}" method="POST">

    @csrf
    Nome: <input type="text" name="CATEGORIA_NOME" value="{{$categoria->CATEGORIA_NOME}}">
    Categoria: <input type="text" name="CATEGORIA_DEC" value="{{$categoria->CATEGORIA_DESC}}">
    <button type="submit">Salvar!</button>


</form>