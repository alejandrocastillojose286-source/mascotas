<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Citas - El Roble</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-[#EBF5F0] font-sans text-gray-700">

    <nav class="bg-white shadow-sm py-4">
        <div class="max-w-6xl mx-auto px-6 flex justify-between items-center">
            <div class="flex items-center gap-2">
                <i class="fa-solid fa-paw text-[#D97736] text-2xl"></i>
                <span class="font-bold text-xl text-gray-800">El Roble</span>
            </div>
            <div class="space-x-4 text-sm font-medium">
                <a href="{{ route('servicios.index') }}" class="text-gray-600 hover:text-gray-900">Inicio / Servicios</a>
                <a href="{{ route('citas.create') }}" class="bg-[#2A9D8F] text-white px-4 py-2 rounded-lg">Agendar Cita</a>
            </div>
        </div>
    </nav>

    <main class="max-w-6xl mx-auto px-6 py-10">
        @if(session('success'))
            <div class="bg-teal-100 border-l-4 border-teal-500 text-teal-800 p-4 rounded mb-6">
                {{ session('success') }}
            </div>
        @endif

        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold text-gray-800">Citas Agendadas</h1>
            <a href="{{ route('citas.create') }}" class="bg-[#D97736] hover:bg-[#c2652b] text-white font-semibold px-4 py-2 rounded-lg text-sm transition">
                + Nueva Cita
            </a>
        </div>

        <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
            <table class="w-full text-left text-sm text-gray-600">
                <thead class="bg-gray-50 text-gray-700 uppercase text-xs">
                    <tr>
                        <th class="px-6 py-3">Dueño</th>
                        <th class="px-6 py-3">Mascota</th>
                        <th class="px-6 py-3">Teléfono</th>
                        <th class="px-6 py-3">Servicio</th>
                        <th class="px-6 py-3">Fecha y Hora</th>
                        <th class="px-6 py-3">Estado</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    @forelse($citas as $cita)
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 font-medium text-gray-900">{{ $cita->nombre_dueno }}</td>
                            <td class="px-6 py-4">{{ $cita->nombre_mascota }}</td>
                            <td class="px-6 py-4">{{ $cita->telefono }}</td>
                            <td class="px-6 py-4"><span class="bg-teal-50 text-teal-700 px-2.5 py-1 rounded-full text-xs font-semibold">{{ $cita->servicio->nombre ?? 'N/A' }}</span></td>
                            <td class="px-6 py-4">{{ $cita->fecha }} - {{ $cita->hora }}</td>
                            <td class="px-6 py-4">
                                <span class="capitalize px-2.5 py-1 rounded-full text-xs font-semibold bg-yellow-100 text-yellow-800">
                                    {{ $cita->estado }}
                                </span>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="px-6 py-8 text-center text-gray-400">
                                No hay citas registradas aún.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </main>

</body>
</html>