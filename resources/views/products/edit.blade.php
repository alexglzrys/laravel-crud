@extends('layout')

@section('content')
    <div class="twelve wide column">
      <h3 class="title">
        Editar Producto
        <a href="{{ route('products.index') }}" class="ui button primary">Listado de Productos</a>
      </h3>

      <!-- Mostrar componente de Formulario - LaravelCollective -->
      {!! Form::model($product, ['route' => ['products.update', $product->id], 'method' => 'PUT', 'class' => 'ui form']) !!}
        @include('products.partials.form')
      {!! Form::close() !!}

    </div>
    <div class="four wide column">
      @include('products.partials.aside')
    </div>
@endsection