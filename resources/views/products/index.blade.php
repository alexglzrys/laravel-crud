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
                <a href="{{ route('products.show', $product->id )}}" class="ui green mini basic button">Ver</a>
              </td>
              <td>Editar</td>
              <td>
                <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                  @csrf
                  @method('delete')
                  <button class="ui red mini basic button">Eliminar</button>
                </form>
              </td>
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