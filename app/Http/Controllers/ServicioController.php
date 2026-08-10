<?php

namespace App\Http\Controllers;

use App\Models\Servicio;
use Illuminate\Http\Request;

class ServicioController extends Controller
{
    public function index()
    {
        $servicios = Servicio::where('activo', true)->get();
        return view('servicios.index', compact('servicios'));
    }
}