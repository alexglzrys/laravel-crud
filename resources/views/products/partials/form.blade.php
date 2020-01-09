<div class="field">
  {!! Form::label('name', 'Nombre del Producto') !!}
  {!! Form::text('name', null, ['placeholder' => 'Ingrese el nombre del producto']) !!}
</div>
<div class="field">
  {!! Form::label('short', 'Extracto') !!}
  {!! Form::text('short', null, ['placeholder' => 'Ingrese una descripción corta para el producto']) !!}
</div>
<div class="field">
  {!! Form::label('body', 'Descripción del Producto') !!}
  {!! Form::textarea('body', null, ['placeholder' => 'Descripción detallada del producto']) !!}
</div>
{!! Form::submit('Registrar', ['class' => 'ui button']) !!}
