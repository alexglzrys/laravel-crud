@extends('layout')

@section('content')
    <div class="twelve wide column">
      <h3 class="title">
        Listado de Productos
        <a href="{{ route('products.create') }}" class="ui button primary">Nuevo</a>
      </h3>
      <table class="ui red table striped selectable">
        <thead>
          <tr>
            <th>ID</th>
            <th>Nombre del Producto</th>
            <th colspan="3">&nbsp;</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($products as $product)
              <tr>
              <td>{{ $product->id }}</td>
              <td>
                <strong>{{ $product->name }}</strong>
                {{ $product->short }}
              </td>
              <td>
                <a href="{{ route('products.show', $product->id )}}">Ver</a>
              </td>
              <td>Editar</td>
              <td>Eliminar</td>
              </tr>
          @endforeach
        </tbody>
      </table>
      {!! $products->render() !!}
    </div>
    <div class="four wide column">
      <h3>Mensaje</h3>
    </div>
@endsection