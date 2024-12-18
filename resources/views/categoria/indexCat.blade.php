<a href="{{route('categoria.create')}}">CRIAR NOVA CATEGORIA</a>

<ul>
    @foreach ($categorias as $item)
        <li>{{$item->CATEGORIA_ID }} - {{$item->CATEGORIA_NOME }} - <a href="{{ route('categoria.edit',$item->CATEGORIA_ID) }}">editar</a>
        <a href="#">{{$item->CATEGORIA_NOME}} ({{$item->Produtos->count()}})</a>
    </li>

        
    @endforeach    
</ul>