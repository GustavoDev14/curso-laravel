<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <link href="" rel="icon" type="image/png">

  <title>{{ config('app.name') }} - @yield('title')</title>

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>

<body>

  <div id="app">

    <div class="layoutClientes">
      <div class="row">
        <div class="col1">
          <div class="menu">
            <ul>
              <li><a class="{{request()->routeIs('clientes.index') ? 'active' : '' }}" href="{{route('clientes.index')}}">Clientes</a></li>
              <li><a class="{{request()->routeIs('clientes.produtos') ? 'active' : '' }}" href="{{route('clientes.produtos')}}">Produtos</a></li>
              <li><a class="{{request()->routeIs('clientes.departamentos') ? 'active' : '' }}" href="{{route('clientes.departamentos')}}">Departamentos</a></li>
            </ul>
          </div>
        </div>
        <div class="col2">
          @yield('content')
        </div>
      </div>

    </div>
  </div>

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}"></script>

</body>

</html>