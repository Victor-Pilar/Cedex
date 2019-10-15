@extends('layouts.menu')
@section('content')

			<form>
			 <div class="form-group col-md-4">
      <thead>
        <th scope="col">Nombre</th>
        <th scope="col">Apellido</th>
        <th scope="col">Fecha</th>
      </thead>
      @foreach($datos as $value)
      <tbody>
        <td>{{$value->nombre}}</td>
        <td>{{$value->appat}} {{$value->apmat}}</td>
        <td>{{$value->created_at}}</td>
     @endforeach
      </tbody>

    </div>
    <div class="form-group col-md-4">
      <label for="inputNombre">Medicamento</label>
    </div>
  <div class="form-group col-md-4">
    <label for="receta">Indicaciones</label>
    <textarea class="form-control" rows="3"></textarea>
    <button type="submit" class="btn btn-primary">Guardar</button>
    <a href="javascript:window.print()">imprimir!</a>
	     </form>
  </div>

@endsection