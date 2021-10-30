<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Cajas;
use Illuminate\Http\Request;

class CajasController extends Controller
{
    public function index (){
        $cajas = Cajas::all();
        return view('clientes.index', compact('cajas'));
    }
}
