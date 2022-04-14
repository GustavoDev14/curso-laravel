@extends('index')
@section('title', 'Blank')

@section('content')

<section class="">
  <h1>Informações Cliente</h1>
  <a href="{{route('clientes.index')}}">Voltar</a>
  <br>
  <br>

  <p>ID: {{$cliente["id"]}}</p>
  <p>Nome: {{$cliente["nome"]}}</p>



</section>


@stop