<!DOCTYPE html>
<html lang="es-MX">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{ asset('semantic/semantic.css') }}">
  <link rel="stylesheet" href="{{ asset('generic.css') }}">
  <title>Laravel CRUD</title>
</head>
<body>
  <div class="ui container">
    <div class="ui column grid">
      <div class="row">
        <div class="column center aligned">
          <a href="{{ route('products.index')}}">
            <h1 class="ui icon header">
              <i class="settings icon"></i>
              <div class="content">Laravel CRUD versión 6.x</div>
              <div class="sub header">Administrador de productos genéricos.</div>
            </h1>
          </a>
        </div>
      </div>
      <div class="row">
        @yield('content')
      </div>
    </div>
   
  </div>

  <script
  src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
  <script src="{{ asset('semantic/semantic.js') }}"></script>
  <script src="{{ asset('generic.js') }}"></script>
</body>
</html>