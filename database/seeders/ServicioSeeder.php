<?php

namespace Database\Seeders;

use App\Models\Servicio;
use Illuminate\Database\Seeder;

class ServicioSeeder extends Seeder
{
    public function run(): void
    {
        Servicio::create([
            'nombre' => 'Consulta Veterinaria General',
            'descripcion' => 'Evaluación física completa, chequeo de signos vitales y diagnóstico profesional.',
            'precio' => 20.00,
            'icono' => 'stethoscope',
            'activo' => true,
        ]);

        Servicio::create([
            'nombre' => 'Vacunación y Desparasitación',
            'descripcion' => 'Aplicación de esquemas de vacunación al día y control antiparasitario interno/externo.',
            'precio' => 15.00,
            'icono' => 'syringe',
            'activo' => true,
        ]);

        Servicio::create([
            'nombre' => 'Peluquería y Estética Canina/Felina',
            'descripcion' => 'Baño medicado, corte de pelo según la raza, limpieza de oídos y corte de uñas.',
            'precio' => 25.00,
            'icono' => 'scissors',
            'activo' => true,
        ]);

        Servicio::create([
            'nombre' => 'Cirugía y Traumatología',
            'descripcion' => 'Procedimientos quirúrgicos con quirófano equipado y monitoreo de anestesia.',
            'precio' => 80.00,
            'icono' => 'user-nurse',
            'activo' => true,
        ]);
    }
}