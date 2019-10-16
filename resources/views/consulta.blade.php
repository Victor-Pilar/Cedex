@extends('layouts.menu')
@section('content')
@yield('content')
<form action="{{url('/enviarconsulta')}}" method="post">
  @csrf
  <div class="row">
    <div class="col-8">
    <div class="form-group col-md-8">
      <label for="text">Bascar Paciente</label>
      <input type="text" class="form-control" name="BPaciente" placeholder="Buscar Paciente">
      <br>
      <button type="submit" class="btn btn-primary">Buscar</button>


  <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo">Nuevo Paciente</button>
  <div id="demo" class="collapse">
  <div class="form-row">
    <div class="form-group col-md-8">
      <label for="text">Nombre</label>
      <input type="text" class="form-control" name="nombre" placeholder="Nombre (s)">
    </div>
    <div class="form-group col-md-8">
      <label for="inputappat">Apellido Paterno</label>
      <input type="text" class="form-control" name="appat" placeholder="Apellido Paterno">
    </div>
      <div class="form-group col-md-8">
      <label for="inputapmat">Apellido Materno</label>
      <input type="text" class="form-control" name="apmat" placeholder="Apellido Materno">
    </div>
  </div>

  <!--Datos del Domicilio -->
  <div class="form-row">
    <div class="form-group col-md-8">
      <label>Domicilio</label>
      <input type="text" class="form-control" name="calle" placeholder="Calle">
    </div>
     <div class="form-group col-md-8">
      <label for="inputCol">Colonia</label>
      <input type="text" class="form-control" name="colonia" placeholder="Colonia">
    </div>
    <div class="form-group col-md-8">
      <label for="inputMunicipio">Municipio</label>
      <input type="text" class="form-control" name="mun" placeholder="Municipio">
    </div>
  </div>
  </div>


    </div>
 <!--Datos Médicos Básicos -->
  <div class="form-row">
    <div class="form-group col-md-2">
      <label for="inputtalla">Estatura</label>
      <input type="text" class="form-control" name="Estatura">
    </div>
    <div class="form-group col-md-2">
      <label for="inputtalla">Peso</label>
      <input type="text" class="form-control" name="Peso">
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
  <label for="receta"><h3>Diagnostico</h3></label>
      <div class="form-group col-md-2">
      <label for="inputtalla">Sintomas</label>
      <input type="text" class="form-control" name="talla">
    </div>
    <textarea class="form-control" id="receta" rows="3" name="diagnost"></textarea>
  
  <button type="submit" class="btn btn-primary">Continuar</button>
</form>
    </div>
  </div>
 @endsection

  

