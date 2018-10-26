<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EstudiantesController extends Controller
{
    public function mostrarEstudiantes()
    {
        $estudiantes=$this->obtenerTodosLosEstudiantes();

        return view('estudiantes.todos',compact('estudiantes'));

    }

    public function obtenerTodosLosEstudiantes()
    {
        $url="https://apilumen.juandmegon.com/estudiantes";

        $respuesta = $this->realizarPeticion('GET',$url);

        $datos=json_decode($respuesta);

        $estudiantes= $datos->data;

        return $estudiantes;
    }
}
