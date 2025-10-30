<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB ;
class AdopcionesCotroller extends Controller
{
    public function  index(Request $request)
    {
//dd($request);
        $edad = $request->get("edad_");
        $raza = $request->get("raza");
        $color = $request->get("color");
        $tipo = $request->get("tipo");
        $tamano = $request->get("tamano");
        $sexo = $request->get("sexo");
        // $castracion = $request->get("castrado");
        // $vacuna = $request->get("vacunas");
        $personalidad = $request->get("personalidad");
        $id = $request->get('id_mascota');

        $message = "¡La mascota ha sido editada de forma correcta!";

        // Inicia la consulta
        $query = DB::table('mascotas')->where('estado', '=', 1); // Solo mascotas disponibles

        // Aplicar filtros opcionales si los valores existen
        if ($color !== null) {
            $query->where('color', 'like', '%' . $color . '%');
        }

        if ($edad !== null) {
            $query->where('edad_', 'like', '%' . $edad . '%');
        }

        if ($raza !== null) {
            $query->where('raza', 'like', '%' . $raza . '%');
        }

        if ($tipo !== null) {
            $query->where('tipo', '=', $tipo);
        }

        if ($tamano !== null) {
            $query->where('tamano', '=', $tamano);
        }

        if ($sexo !== null) {
            $query->where('sexo', '=', $sexo);
        }

        // if ($castracion !== null) {
        //     $query->where('castrado', '=', $castracion);
        // }

        // if ($vacuna !== null) {
        //     $query->where('vacunas', '=', $vacuna);
        // }

        if ($personalidad !== null) {
            $query->where('personalidad', 'like', '%' . $personalidad . '%');
        }

        // Ejecutar la consulta
        $mascotas = $query->get();

        // Depuración de los resultados para verificar que la consulta funcione correctamente
     

        // Finalmente, retornar la vista con las mascotas filtradas
        return view('pet', compact('mascotas'))->with('message', $message);

    }
}

