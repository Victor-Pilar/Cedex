@extends('layouts.menu')
@section('content')
@yield('content')
<form action="{{url('/enviarconsulta')}}" method="post">
  @csrf
  <div class="row">
    <div class="col-8">
    <!--Datos Principales -->
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="text">Nombre</label>
      <input type="text" class="form-control" name="nombre" placeholder="Nombre (s)">
    </div>
    <div class="form-group col-md-4">
      <label for="inputappat">Apellido Paterno</label>
      <input type="text" class="form-control" name="appat" placeholder="Apellido Paterno">
    </div>
      <div class="form-group col-md-4">
      <label for="inputapmat">Apellido Materno</label>
      <input type="text" class="form-control" name="apmat" placeholder="Apellido Materno">
    </div>
  </div>

  <!--Datos del Domicilio -->
  <div class="form-row">
    <div class="form-group col-md-4">
      <label>Domicilio</label>
      <input type="text" class="form-control" name="calle" placeholder="Calle">
    </div>
     <div class="form-group col-md-4">
      <label for="inputCol">Colonia</label>
      <input type="text" class="form-control" name="colonia" placeholder="Colonia">
    </div>
    <div class="form-group col-md-4">
      <label for="inputMunicipio">Municipio</label>
      <input type="text" class="form-control" name="mun" placeholder="Municipio">
    </div>
  </div>
 <!--Datos Médicos Básicos -->
  <div class="form-row">
    <div class="form-group col-md-2">
      <label for="inputtalla">Talla</label>
      <input type="text" class="form-control" name="talla">
    </div>
    <div class="form-group col-md-2">
      <label for="inputSex">Sexo</label>
      <select name="sex" class="form-control">
        <option>Masculino</option>
        <option>Femenino</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Edad</label>
      <input type="text" class="form-control" name="edad">
    </div>
  </div>
  <label for="receta">Diagnostico</label>
    <textarea class="form-control" id="receta" rows="3" name="diagnost"></textarea>
  
  <button type="submit" class="btn btn-primary">Siguiente</button>
</form>
    </div>
  </div>
 @endsection

  

