@if($errors->any())
  <div class="ui negative message">
    <i class="close icon"></i>
    <header class="header">Aviso importante</header>
    <p>Ocurrieron algunos errores durante el registro/actualización del producto</p>
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif