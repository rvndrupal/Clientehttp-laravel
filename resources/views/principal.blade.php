@extends('master')

@section('content')




<div class="list-group">
        <div class="list-group">
            <a href="{{ route('estudiantes') }}" class="list-group-item ">Obtener todos los Estudiantes</a>
            <a href="#" class="list-group-item ">Obtener todos los Profesores</a>
            <a href="#" class="list-group-item ">Obtener todos los Cursos</a>
        </div>


        <div class="list-group">
                <a href="#" class="list-group-item ">Obtener Un Estudiante</a>
                <a href="#" class="list-group-item ">Obtener Un Profesor</a>
                <a href="#" class="list-group-item ">Obtener Un Curso</a>
            </div>

    </div>
@endsection