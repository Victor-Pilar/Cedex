@extends('layouts.menu')
@section('content')
@yield('content')
<table class="table table-borderless">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Producto</th>
      <th scope="col">Cantidad</th>
      <th scope="col">Fecha de Caducidad</th>
      <th scope="col">Stock</th>
    </tr>
  </thead>
  <tbody>
    <!--Aquí se muestra la lista de inventario -->
   @foreach($productos as $value)
   <tr>
      <th scope="row">{{$value->id}}</th>
      <td>{{$value->producto}}</td>
      <td>{{$value->cantidad}} {{$value->medida}}</td>
      <!--<td>{{$value->presentacion}}</td>-->
      <td>{{$value->fechacad}}</td>
      <td>{{$value->stock}}</td>
    </tr>
    @endforeach
  
  </tbody>
</table>

<button href="javascript:window.print()" class="btn btn-primary">Imprimir</button>
@endsection