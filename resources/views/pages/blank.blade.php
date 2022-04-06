@extends('index')
@section('title', 'Blank')

@section('content')

<section class="">
  <h1>Blank Page</h1>

  <a href="{{route('app')}}">profile</a>
  <a href="{{route('user')}}">profile</a>
  <a href="{{route('profile')}}">profile</a>
</section>


@stop