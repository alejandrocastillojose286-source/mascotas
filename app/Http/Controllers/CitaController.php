<?php

namespace App\Http\Controllers;

use App\Models\Cita;
use App\Models\Servicio;
use Illuminate\Http\Request;

class CitaController extends Controller
{
    // Muestra la lista de citas creadas
    public function index()
    {
        $citas = Cita::with('servicio')->latest()->get();
        return view('citas.index', compact('citas'));
    }

    // Muestra el formulario para agendar una nueva cita
    public function create()
    {
        $servicios = Servicio::all();
        return view('citas.create', compact('servicios'));
    }

    // Guarda la cita en la base de datos
    public function store(Request $request)
    {
        $request->validate([
            'nombre_dueno'   => 'required|string|max:255',
            'telefono'       => 'required|string|max:20',
            'nombre_mascota' => 'required|string|max:255',
            'servicio_id'    => 'required|exists:servicios,id',
            'fecha'          => 'required|date',
            'hora'           => 'required',
            'notas'          => 'nullable|string',
        ]);

        Cita::create($request->all());

        return redirect()->route('citas.index')->with('success', '¡Cita agendada con éxito!');
    }
}