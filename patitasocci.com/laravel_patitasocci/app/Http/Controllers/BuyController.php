<?php

namespace App\Http\Controllers;
use App\Models\Producto;
use Illuminate\Http\Request;

class BuyController extends Controller
{
    public function index()
    {

        $productos = Producto::all();

        // Aquí puedes cargar productos o cualquier otra data necesaria para la vista
        return view('buy', compact('productos'));  // Asegúrate de que 'buy' es el nombre de tu vista
    }
}
