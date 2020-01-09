@extends('layout')

@section('content')
  <div class="twelve wide column">
    <h3 class="title">
      Registrar un Producto
      <a href="{{ route('products.index') }}" class="ui button primary">Listado de Productos</a>
    </h3>

    <!-- Mensajes -->
    @include('products.partials.error')

    <!-- Agregar componente de formulario - LaravelCollective 6 -->
    {!! Form::open(['route' => 'products.store', 'class' => 'ui form']) !!}
      @include('products.partials.form')
    {!! Form::close() !!}
  
  </div>
  <div class="four wide column">
    @include('products.partials.aside')
  </div>  
@endsection