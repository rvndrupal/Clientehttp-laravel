@extends('master')

@section('content')

    @if(sizeof($estudiantes)>0)

    <div class="alert alert-success" role="alert">
      <h4 class="alert-heading">Bien !</h4>
      <p>Si hay Estudiantes</p>
      <p class="mb-0"></p>
    </div>


    @else 

        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong>Ups</strong> No hay estudiantes en este Momento

        </div>

    @endif




<div class="container">
    <div class="row">
        <div class="col-lg-10 offset-lg-1 ">
            <table class="table table-{1:striped|sm|bordered|hover|inverse} table-inverse table-responsive">
                    <thead class="thead-inverse|thead-default">
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Dirección</th>
                            <th>Teléfono</th>
                            <th>Carrera</th>
                            <th>Creación</th>
                            <th>Actualización</th>
                        </tr>
                        </thead>
                        <tbody>
                           @foreach ($estudiantes as $estudiante )
                           <tr>
                               <td>{{ $estudiante->id }}</td>
                               <td>{{ $estudiante->nombre }}</td>
                               <td>{{ $estudiante->direccion }}</td>
                               <td>{{ $estudiante->telefono }}</td>
                               <td>{{ $estudiante->carrera }}</td>
                               <td>{{ $estudiante->created_at }}</td>
                               <td>{{ $estudiante->updated_at }}</td>
                           </tr>
                               
                           @endforeach
                        </tbody>
                </table>
         </div>

    </div>
</div>
   





    

@endsection