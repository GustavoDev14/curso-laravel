@extends('clientes.layout.index')
@section('title', 'Blank')

@section('content')

<section class="">
  <h1>{{$titulo}}</h1>
  <a href="{{route('clientes.create')}}">Novo Cliente</a>

  @if(count($clientes) > 0)

  <ul>
    @foreach($clientes as $c)
    <li>{{$c["id"]}}: {{$c["nome"]}}
      <a href="{{route('clientes.edit', $c['id'])}}">Editar</a>
      <a href="{{route('clientes.show', $c['id'])}}">Info</a>

      <form action="{{route('clientes.destroy', $c['id'])}}" method="POST">
        @csrf
        @method("DELETE")
        <input type="submit" value="Apagar">
      </form>
    </li><br>
    @endforeach
  </ul>

  <hr>

  @for($i=0; $i < 10; $i++) {{$i}} @endfor <br>




    @else
    <h3>Não exitem clientes cadastrados!</h3>

    @endif




</section>


@stop