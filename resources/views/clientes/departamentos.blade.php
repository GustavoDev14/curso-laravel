@extends('clientes.layout.index')
@section('title', 'Departamentos')

@section('content')

<section class="">
  <h1>Departamentos</h1>
  <a href="{{route('clientes.index')}}">Voltar</a>
  <br>
  <br>

  <ul>
    <li>Computadores</li>
    <li>Eletronicos</li>
    <li>Acessórios</li>
    <li>Roupas</li>
  </ul>

</section>


@stop