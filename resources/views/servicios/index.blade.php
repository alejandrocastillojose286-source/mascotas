<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>El Roble - Veterinaria</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-[#EBF5F0] font-sans text-gray-700">

    <!-- Navegación -->
    <nav class="bg-white shadow-sm py-4 sticky top-0 z-50">
        <div class="max-w-6xl mx-auto px-6 flex justify-between items-center">
            <div class="flex items-center gap-2">
                <i class="fa-solid fa-paw text-[#D97736] text-2xl"></i>
                <div class="flex flex-col">
                    <span class="font-bold text-xl text-gray-800 leading-none">El Roble</span>
                    <span class="text-xs text-gray-500 uppercase tracking-widest">Veterinaria</span>
                </div>
            </div>
            <div class="hidden md:flex items-center space-x-6 text-sm font-medium">
                <a href="{{ route('servicios.index') }}" class="bg-[#2A9D8F] text-white px-4 py-1.5 rounded-full">Inicio</a>
                <a href="#servicios" class="text-gray-600 hover:text-gray-900">Servicios</a>
                <a href="#equipo" class="text-gray-600 hover:text-gray-900">Equipo</a>
                <a href="{{ route('citas.create') }}" class="text-[#D97736] font-semibold hover:underline">Agendar Cita</a>
                <a href="{{ route('citas.index') }}" class="text-gray-600 hover:text-gray-900">Ver Citas</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="max-w-6xl mx-auto px-6 py-12 grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
        <div>
            <h1 class="text-4xl font-extrabold text-gray-900 leading-tight">
                Cuidamos a tu mejor amigo con el corazón
            </h1>
            <p class="text-gray-600 mt-4 text-base">
                Ofrecemos atención médica integral con amor y dedicación profesional para garantizar la salud y felicidad de tus mascotas.
            </p>
            <a href="{{ route('citas.create') }}" class="inline-block mt-6 bg-[#D97736] hover:bg-[#c2652b] text-white font-semibold px-6 py-3 rounded-md shadow transition">
                Pedir Cita
            </a>
        </div>
        <div class="flex justify-center">
            <img src="https://images.unsplash.com/photo-1576201836106-db1758fd1c97?q=80&w=600&auto=format&fit=crop" 
                 alt="Veterinaria con perro" 
                 class="rounded-xl shadow-md w-full max-w-md object-cover">
        </div>
    </section>

    <!-- Sección de Servicios Dinámicos desde la BD -->
    <section id="servicios" class="max-w-6xl mx-auto px-6 py-12">
        <h2 class="text-2xl font-bold text-gray-800 text-center mb-8">Nuestros Servicios</h2>
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
            @foreach($servicios as $servicio)
                <div class="bg-white rounded-xl p-6 text-center shadow-sm hover:shadow-md transition border border-gray-100 flex flex-col justify-between">
                    <div>
                        <div class="w-14 h-14 bg-[#E2F0EA] text-[#2A9D8F] rounded-full flex items-center justify-center mx-auto mb-4 text-2xl">
                            <i class="fa-solid fa-{{ $servicio->icono ?? 'stethoscope' }}"></i>
                        </div>
                        <h3 class="font-bold text-gray-800 text-lg mb-2">{{ $servicio->nombre }}</h3>
                        <p class="text-gray-500 text-xs mb-4 leading-relaxed">
                            {{ $servicio->descripcion }}
                        </p>
                    </div>
                    <div>
                        <span class="block text-[#D97736] font-bold text-lg mb-3">${{ number_format($servicio->precio, 2) }}</span>
                        <a href="{{ route('citas.create') }}" class="block bg-[#2A9D8F] hover:bg-[#218175] text-white text-xs font-semibold py-2 px-4 rounded transition">
                            Agendar
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <!-- Conoce a Nuestro Equipo -->
    <section id="equipo" class="max-w-6xl mx-auto px-6 py-12 text-center">
        <h2 class="text-2xl font-bold text-gray-800 mb-8">Conoce a Nuestro Equipo</h2>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
            <div class="bg-white p-4 rounded-xl shadow-sm text-center">
                <img src="https://images.unsplash.com/photo-1622253692010-333f2da6031d?q=80&w=200&auto=format&fit=crop" class="w-24 h-24 rounded-full mx-auto mb-3 object-cover" alt="Doctor">
                <h4 class="font-bold text-gray-800 text-sm">Dr. Roberto Mateo</h4>
                <p class="text-xs text-gray-500">Médico Veterinario</p>
            </div>
            <div class="bg-white p-4 rounded-xl shadow-sm text-center">
                <img src="https://images.unsplash.com/photo-1594824813566-78a93272d3f2?q=80&w=200&auto=format&fit=crop" class="w-24 h-24 rounded-full mx-auto mb-3 object-cover" alt="Doctora">
                <h4 class="font-bold text-gray-800 text-sm">Dra. Javier Mateo</h4>
                <p class="text-xs text-gray-500">Cirujano</p>
            </div>
            <div class="bg-white p-4 rounded-xl shadow-sm text-center">
                <img src="https://images.unsplash.com/photo-1559839734-2b71ea197ec2?q=80&w=200&auto=format&fit=crop" class="w-24 h-24 rounded-full mx-auto mb-3 object-cover" alt="Doctora">
                <h4 class="font-bold text-gray-800 text-sm">Dra. Somial Mateo</h4>
                <p class="text-xs text-gray-500">Peluquería Canina</p>
            </div>
            <div class="bg-white p-4 rounded-xl shadow-sm text-center">
                <img src="https://images.unsplash.com/photo-1612349317150-e413f6a5b16d?q=80&w=200&auto=format&fit=crop" class="w-24 h-24 rounded-full mx-auto mb-3 object-cover" alt="Doctor">
                <h4 class="font-bold text-gray-800 text-sm">Dr. Soledad Selina</h4>
                <p class="text-xs text-gray-500">Asistente</p>
            </div>
        </div>
    </section>

    <!-- Footer Banner -->
    <footer class="bg-[#D97736] text-white py-8 mt-12 text-center">
        <h3 class="text-2xl font-bold mb-2">El Roble - Veterinaria</h3>
        <p class="text-sm opacity-90">Atención profesional de calidad para tus compañeros de vida.</p>
    </footer>

</body>
</html>