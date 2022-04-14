@extends('clientes.layout.index')
@section('title', 'Produtos')

@section('content')

<section class="">
  <h1>Produtos</h1>
  <a href="{{route('clientes.index')}}">Voltar</a>
  <br>
  <br>

  <ul>
    <li>PC</li>
    <li>Notebook</li>
    <li>Mouse</li>
    <li>Camiseta Polo</li>
  </ul>

</section>


@stop