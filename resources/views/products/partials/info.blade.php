@if(Session::has('info'))
  <div class="ui message success">
    <i class="close icon"></i>
    <header class="header">Información</header>
    <p>{{ Session::get('info') }}</p>
  </div>
@endif