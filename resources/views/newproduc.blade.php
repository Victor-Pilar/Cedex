@extends('layouts.menu')
@section('content')
<form action="{{url('/enviarformulario')}}" method="post">
  @csrf
<!-- agregar datos del producto -->
<div class="container">
  <div class="row">
    <div class="col-4"><label for="text">Producto</label>
     <input type="text" name="producto" class="form-control" placeholder="Producto">
    <br>

<!-- Agregar tipos o clasificación-->
Presentación
<select class="form-control" id="presentacion" name="presentacion">
  <option>Capsula</option>
  <option>Suspención</option>
  <option>Pastillas</option>
</select>
<br>
Cantidad
<input class="form-control" type="text" name="cantidad" placeholder="Cantidad">
</input>
<br>
Medida
<select class="form-control" name="medida">
  <option>ML</option>
  <option>GR</option>
  <option>Capsulas</option>
  <option>Pastillas</option>
</select>
<br>
Precio
<input class="form-control" id="precio" type="text" name="precio" placeholder="Precio">
</input>
<br>
Stock
<input class="form-control" placeholder="Stock" name="stock">
</input>
 
<br><br>
<!--Ingresar Fecha -->
Fecha de Caducidad
<input class="form-control form-control-lg"  id="fechacad" type="date" name="fechacad" placeholder="fecha">

<!--agregar imagen -->

  <div class="form-group">
    <label for="imagen">Imagen de Presentación</label>
    <input type="file" class="form-control-file" name="imagen" id="imagen">
  </div>
  <button type="submit" class="btn btn-primary">Guardar</button>

  </div>
</div>
</div>
</form>
@endsection