<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendar Cita - El Roble</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-[#EBF5F0] font-sans text-gray-700 min-h-screen py-10">

    <div class="max-w-2xl mx-auto bg-white rounded-2xl shadow-sm border border-gray-100 p-8">
        <div class="flex justify-between items-center mb-6">
            <div class="flex items-center gap-2">
                <i class="fa-solid fa-paw text-[#D97736] text-xl"></i>
                <h2 class="text-2xl font-bold text-gray-800">Agendar Cita Médica</h2>
            </div>
            <a href="{{ route('servicios.index') }}" class="text-xs text-[#2A9D8F] font-semibold hover:underline">
                ← Volver al Inicio
            </a>
        </div>

        <form action="{{ route('citas.store') }}" method="POST" class="space-y-4">
            @csrf
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="block text-xs font-bold text-gray-700 uppercase mb-1">Nombre del Dueño</label>
                    <input type="text" name="nombre_dueno" required placeholder="Ej: Alejandro Castillo" class="w-full bg-[#F8FAFC] border border-gray-200 rounded-lg px-4 py-2 text-sm focus:outline-none focus:border-[#2A9D8F]">
                </div>
                <div>
                    <label class="block text-xs font-bold text-gray-700 uppercase mb-1">Teléfono</label>
                    <input type="text" name="telefono" required placeholder="Ej: 0412-1234567" class="w-full bg-[#F8FAFC] border border-gray-200 rounded-lg px-4 py-2 text-sm focus:outline-none focus:border-[#2A9D8F]">
                </div>
                <div>
                    <label class="block text-xs font-bold text-gray-700 uppercase mb-1">Nombre de la Mascota</label>
                    <input type="text" name="nombre_mascota" required placeholder="Ej: Firulais" class="w-full bg-[#F8FAFC] border border-gray-200 rounded-lg px-4 py-2 text-sm focus:outline-none focus:border-[#2A9D8F]">
                </div>
                <div>
                    <label class="block text-xs font-bold text-gray-700 uppercase mb-1">Servicio</label>
                    <select name="servicio_id" required class="w-full bg-[#F8FAFC] border border-gray-200 rounded-lg px-4 py-2 text-sm focus:outline-none focus:border-[#2A9D8F]">
                        <option value="">Selecciona un servicio</option>
                        @foreach($servicios as $servicio)
                            <option value="{{ $servicio->id }}">{{ $servicio->nombre }} (${{ number_format($servicio->precio, 2) }})</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label class="block text-xs font-bold text-gray-700 uppercase mb-1">Fecha</label>
                    <input type="date" name="fecha" required min="{{ date('Y-m-d') }}" class="w-full bg-[#F8FAFC] border border-gray-200 rounded-lg px-4 py-2 text-sm focus:outline-none focus:border-[#2A9D8F]">
                </div>
                <div>
                    <label class="block text-xs font-bold text-gray-700 uppercase mb-1">Hora</label>
                    <input type="time" name="hora" required class="w-full bg-[#F8FAFC] border border-gray-200 rounded-lg px-4 py-2 text-sm focus:outline-none focus:border-[#2A9D8F]">
                </div>
            </div>

            <div>
                <label class="block text-xs font-bold text-gray-700 uppercase mb-1">Notas (Opcional)</label>
                <textarea name="notas" rows="3" placeholder="Detalles o síntomas de la consulta..." class="w-full bg-[#F8FAFC] border border-gray-200 rounded-lg px-4 py-2 text-sm focus:outline-none focus:border-[#2A9D8F]"></textarea>
            </div>

            <button type="submit" class="w-full bg-[#D97736] hover:bg-[#c2652b] text-white font-bold py-2.5 rounded-lg transition text-sm shadow">
                Guardar Cita
            </button>
        </form>
    </div>

</body>
</html>