@extends('layout')

@section('content')
    <div class="twelve wide column">
      <h3 class="product-name">
        {{ $product->name }}
        <a href="{{ route('products.edit', $product->id) }}" class="ui button inverted editar red">Editar</a>
      </h3>
      <p class="product-excerpt">{{ $product->short }}</p>
      {!! $product->body !!}
    </div>
    <div class="four wide column">
      <h3>Mensaje</h3>
    </div>
@endsection