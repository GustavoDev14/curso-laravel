@extends('index')
@section('title', 'Blank')

@section('content')

<section class="">
  <h1>Novo Cliente</h1>
  <a href="{{route('clientes.index')}}">Voltar</a>
  <br>
  <br>

  <form action="{{route('clientes.store')}}" method="POST">
    @csrf
    <input type="text" name="nome">
    <input type="submit" value="Salvar">
  </form>




</section>


@stop