@extends('index')
@section('title', 'Edit')

@section('content')

<section class="">
  <h1>Editar cliente: {{$cliente['id']}}</h1>
  <a href="{{route('clientes.index')}}">Voltar</a>
  <br>
  <br>

  <form action="{{route('clientes.update', $cliente['id'])}}" method="POST">
    @csrf
    @method("PUT")
    <input type="text" name="nome" value="{{$cliente['nome']}}">
    <input type="submit" value="Editar">
  </form>




</section>


@stop