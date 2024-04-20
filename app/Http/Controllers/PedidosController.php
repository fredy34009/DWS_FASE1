<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PedidosController extends Controller
{
    function index()
    {
        return view('pedido.index');
    }
    function detalles()
    {
        return view('pedido.detalles');
    }
    function crear()
    {
        return view('pedido.crear');
    }
}
