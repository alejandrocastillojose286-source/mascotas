<!DOCTYPE html>
<html lang="es" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>El Roble - Veterinaria</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-[#EBF5F0] font-sans text-gray-700 antialiased min-h-screen">

    <!-- Navegación Ancha -->
    <nav class="bg-white/95 backdrop-blur-md shadow-sm py-4 sticky top-0 z-50 w-full px-8 md:px-16 transition-all duration-300">
        <div class="w-full flex justify-between items-center">
            <div class="flex items-center gap-3">
                <i class="fa-solid fa-paw text-[#D97736] text-3xl transition transform hover:rotate-12 duration-300"></i>
                <div class="flex flex-col">
                    <span class="font-extrabold text-2xl text-gray-800 leading-none">El Roble</span>
                    <span class="text-xs text-gray-500 uppercase tracking-widest font-semibold">Veterinaria</span>
                </div>
            </div>
            <div class="hidden md:flex items-center space-x-8 text-base font-medium">
                <a href="{{ route('servicios.index') }}" class="bg-[#2A9D8F] text-white px-5 py-2 rounded-full shadow hover:bg-[#218175] transition-all duration-300 hover:scale-105">Inicio</a>
                <a href="#servicios" class="text-gray-600 hover:text-[#2A9D8F] transition-colors duration-200">Servicios</a>
                <a href="#frutas" class="text-gray-600 hover:text-[#2A9D8F] transition-colors duration-200">Nutrición</a>
                <a href="#guias" class="text-gray-600 hover:text-[#2A9D8F] transition-colors duration-200">Guías</a>
                <a href="#equipo" class="text-gray-600 hover:text-[#2A9D8F] transition-colors duration-200">Equipo</a>
                <a href="{{ route('citas.create') }}" class="text-[#D97736] font-bold hover:text-[#c2652b] transition-colors duration-200">Agendar Cita</a>
                <a href="{{ route('citas.index') }}" class="text-gray-600 hover:text-gray-900 transition-colors duration-200">Ver Citas</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section con Fondo Completo -->
    <section class="relative w-full min-h-[80vh] flex items-center bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1548199973-03cce0bbc87b?q=80&w=1600&auto=format&fit=crop');">
        <!-- Capa oscura superpuesta para legibilidad del texto -->
        <div class="absolute inset-0 bg-gradient-to-r from-black/80 via-black/50 to-transparent"></div>

        <div class="relative z-10 w-full px-8 md:px-16 lg:px-24 py-20 text-white max-w-4xl space-y-6">
            <span class="inline-block bg-[#2A9D8F] text-white text-xs font-extrabold uppercase px-4 py-1.5 rounded-full tracking-wider shadow">
                Atención Médica Veterinaria
            </span>
            <h1 class="text-5xl md:text-6xl lg:text-7xl font-black leading-tight text-white drop-shadow-md">
                Cuidamos a tu mejor amigo con el corazón
            </h1>
            <p class="text-lg md:text-xl text-gray-200 leading-relaxed font-light max-w-2xl">
                Ofrecemos atención médica integral con amor y dedicación profesional para garantizar la salud, bienestar y felicidad de tus mascotas.
            </p>
            <div class="pt-4 flex flex-wrap gap-4">
                <a href="{{ route('citas.create') }}" class="bg-[#D97736] hover:bg-[#c2652b] text-white font-bold text-lg px-8 py-4 rounded-xl shadow-xl transition-all duration-300 hover:-translate-y-1 hover:shadow-2xl flex items-center gap-3">
                    <i class="fa-solid fa-calendar-check"></i> Pedir Cita Ahora
                </a>
                <a href="#servicios" class="bg-white/20 hover:bg-white/30 backdrop-blur-md text-white font-semibold text-lg px-8 py-4 rounded-xl border border-white/30 transition-all duration-300">
                    Ver Servicios
                </a>
            </div>
        </div>
    </section>

    <!-- Sección de Servicios -->
    <section id="servicios" class="w-full px-8 md:px-16 lg:px-24 py-20">
        <h2 class="text-3xl font-extrabold text-gray-800 text-center mb-12">Nuestros Servicios</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            @foreach($servicios as $servicio)
                <div class="bg-white rounded-2xl p-8 text-center shadow-sm hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 border border-gray-100 flex flex-col justify-between">
                    <div>
                        <div class="w-16 h-16 bg-[#E2F0EA] text-[#2A9D8F] rounded-2xl flex items-center justify-center mx-auto mb-6 text-3xl">
                            <i class="fa-solid fa-{{ $servicio->icono ?? 'stethoscope' }}"></i>
                        </div>
                        <h3 class="font-bold text-gray-800 text-xl mb-3">{{ $servicio->nombre }}</h3>
                        <p class="text-gray-500 text-sm mb-6 leading-relaxed">
                            {{ $servicio->descripcion }}
                        </p>
                    </div>
                    <div>
                        <span class="block text-[#D97736] font-extrabold text-2xl mb-4">${{ number_format($servicio->precio, 2) }}</span>
                        <a href="{{ route('citas.create') }}" class="block bg-[#2A9D8F] hover:bg-[#218175] text-white text-sm font-bold py-3 px-6 rounded-xl transition-all duration-200 hover:shadow-lg">
                            Agendar
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <!-- Sección: Frutas Recomendadas -->
    <section id="frutas" class="w-full px-8 md:px-16 lg:px-24 py-20 bg-white/50">
        <h2 class="text-3xl font-extrabold text-gray-800 text-center mb-3">🍉 Frutas Saludables para Perros y Gatos</h2>
        <p class="text-center text-gray-500 text-sm mb-12">Snacks naturales permitidos con moderación (sin semillas ni corazón).</p>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 hover:shadow-lg transition-all duration-300 flex items-center gap-6">
                <img src="https://images.unsplash.com/photo-1560806887-1e4cd0b6cbd6?q=80&w=250&auto=format&fit=crop" class="w-28 h-28 rounded-2xl object-cover" alt="Manzana">
                <div>
                    <span class="bg-green-100 text-green-800 text-xs font-bold px-3 py-1 rounded-full uppercase">Perros y Gatos</span>
                    <h3 class="font-bold text-gray-800 text-lg mt-2">Manzana</h3>
                    <p class="text-sm text-gray-500 mt-1">Rica en vitamina A y C. Siempre servir en trozos pequeños sin semillas.</p>
                </div>
            </div>

            <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 hover:shadow-lg transition-all duration-300 flex items-center gap-6">
                <img src="https://images.unsplash.com/photo-1571771894821-ce9b6c11b08e?q=80&w=250&auto=format&fit=crop" class="w-28 h-28 rounded-2xl object-cover" alt="Banana">
                <div>
                    <span class="bg-yellow-100 text-yellow-800 text-xs font-bold px-3 py-1 rounded-full uppercase">Perros</span>
                    <h3 class="font-bold text-gray-800 text-lg mt-2">Banana / Plátano</h3>
                    <p class="text-sm text-gray-500 mt-1">Excelente fuente de potasio y fibra. Dar ocasionalmente por su azúcar.</p>
                </div>
            </div>

            <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 hover:shadow-lg transition-all duration-300 flex items-center gap-6">
                <img src="https://images.unsplash.com/photo-1587049352847-81a56d773cae?q=80&w=250&auto=format&fit=crop" class="w-28 h-28 rounded-2xl object-cover" alt="Sandía">
                <div>
                    <span class="bg-red-100 text-red-800 text-xs font-bold px-3 py-1 rounded-full uppercase">Perros y Gatos</span>
                    <h3 class="font-bold text-gray-800 text-lg mt-2">Sandía / Patilla</h3>
                    <p class="text-sm text-gray-500 mt-1">92% agua, perfecta para mantenerlos hidratados en días calurosos.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección: Guías Desplegables -->
    <section id="guias" class="w-full px-8 md:px-16 lg:px-24 py-20">
        <h2 class="text-3xl font-extrabold text-gray-800 text-center mb-12">📖 Guías de Cuidado para Dueños</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Guía Perros -->
            <div class="bg-white rounded-3xl border border-gray-100 overflow-hidden shadow-sm hover:shadow-md transition">
                <div class="p-8">
                    <img src="https://images.unsplash.com/photo-1534361960057-19889db9621e?q=80&w=800&auto=format&fit=crop" class="w-full h-64 rounded-2xl object-cover mb-6" alt="Dueño con perro">
                    <h3 class="text-2xl font-bold text-gray-800 mb-2">Guía de Cuidado Canino</h3>
                    <p class="text-sm text-gray-500 mb-6">Recomendaciones esenciales para el bienestar y rutina diaria de tu perro.</p>
                    
                    <details class="group cursor-pointer">
                        <summary class="flex justify-between items-center font-bold text-base text-[#2A9D8F] bg-[#E2F0EA] p-4 rounded-xl group-open:rounded-b-none transition-all">
                            <span>Ver Consejos de Cuidado Canino</span>
                            <i class="fa-solid fa-chevron-down transition-transform group-open:rotate-180"></i>
                        </summary>
                        <div class="p-6 bg-gray-50 text-sm text-gray-600 rounded-b-xl space-y-3 border-t border-gray-100">
                            <p>🐾 <strong>Paseos diarios:</strong> Mínimo 30 minutos de actividad física diaria.</p>
                            <p>🦷 <strong>Higiene dental:</strong> Cepillado 2 a 3 veces por semana para prevenir sarro.</p>
                            <p>💉 <strong>Vacunación:</strong> Mantén al día su control desparasitante y quíntuple.</p>
                        </div>
                    </details>
                </div>
            </div>

            <!-- Guía Gatos -->
            <div class="bg-white rounded-3xl border border-gray-100 overflow-hidden shadow-sm hover:shadow-md transition">
                <div class="p-8">
                    <img src="https://images.unsplash.com/photo-1514888286974-6c03e2ca1dba?q=80&w=800&auto=format&fit=crop" class="w-full h-64 rounded-2xl object-cover mb-6" alt="Dueño con gato">
                    <h3 class="text-2xl font-bold text-gray-800 mb-2">Guía de Cuidado Felino</h3>
                    <p class="text-sm text-gray-500 mb-6">Aprende a enriquecer el entorno y mantener la salud de tu gato en casa.</p>
                    
                    <details class="group cursor-pointer">
                        <summary class="flex justify-between items-center font-bold text-base text-[#2A9D8F] bg-[#E2F0EA] p-4 rounded-xl group-open:rounded-b-none transition-all">
                            <span>Ver Consejos de Cuidado Felino</span>
                            <i class="fa-solid fa-chevron-down transition-transform group-open:rotate-180"></i>
                        </summary>
                        <div class="p-6 bg-gray-50 text-sm text-gray-600 rounded-b-xl space-y-3 border-t border-gray-100">
                            <p>🐱 <strong>Caja de arena:</strong> Limpiar a diario y cambiar la arena semanalmente.</p>
                            <p>💧 <strong>Hidratación:</strong> Ubica fuentes de agua fresca alejadas de su comida.</p>
                            <p>🧗 <strong>Rascadores:</strong> Crucial para proteger sus uñas y reducir el estrés.</p>
                        </div>
                    </details>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección de Equipo -->
    <section id="equipo" class="w-full px-8 md:px-16 lg:px-24 py-20 text-center">
        <h2 class="text-3xl font-extrabold text-gray-800 mb-12">Conoce a Nuestro Equipo</h2>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
            <div class="bg-white p-6 rounded-2xl shadow-sm text-center border border-gray-100 hover:shadow-lg transition">
                <img src="https://images.unsplash.com/photo-1622253692010-333f2da6031d?q=80&w=300&auto=format&fit=crop" class="w-28 h-28 rounded-full mx-auto mb-4 object-cover" alt="Doctor">
                <h4 class="font-bold text-gray-800 text-base">Dr. Roberto Mateo</h4>
                <p class="text-xs text-gray-500">Médico Veterinario</p>
            </div>
            <div class="bg-white p-6 rounded-2xl shadow-sm text-center border border-gray-100 hover:shadow-lg transition">
                <img src="https://images.unsplash.com/photo-1594824813566-78a93272d3f2?q=80&w=300&auto=format&fit=crop" class="w-28 h-28 rounded-full mx-auto mb-4 object-cover" alt="Doctora">
                <h4 class="font-bold text-gray-800 text-base">Dra. Javier Mateo</h4>
                <p class="text-xs text-gray-500">Cirujano</p>
            </div>
            <div class="bg-white p-6 rounded-2xl shadow-sm text-center border border-gray-100 hover:shadow-lg transition">
                <img src="https://images.unsplash.com/photo-1559839734-2b71ea197ec2?q=80&w=300&auto=format&fit=crop" class="w-28 h-28 rounded-full mx-auto mb-4 object-cover" alt="Doctora">
                <h4 class="font-bold text-gray-800 text-base">Dra. Somial Mateo</h4>
                <p class="text-xs text-gray-500">Peluquería Canina</p>
            </div>
            <div class="bg-white p-6 rounded-2xl shadow-sm text-center border border-gray-100 hover:shadow-lg transition">
                <img src="https://images.unsplash.com/photo-1612349317150-e413f6a5b16d?q=80&w=300&auto=format&fit=crop" class="w-28 h-28 rounded-full mx-auto mb-4 object-cover" alt="Doctor">
                <h4 class="font-bold text-gray-800 text-base">Dr. Soledad Selina</h4>
                <p class="text-xs text-gray-500">Asistente</p>
            </div>
        </div>
    </section>

    <!-- Footer Ancho -->
    <footer class="bg-[#D97736] text-white py-10 w-full text-center mt-12">
        <h3 class="text-3xl font-bold mb-2">El Roble - Veterinaria</h3>
        <p class="text-base opacity-90">Atención profesional de calidad para tus compañeros de vida.</p>
    </footer>

</body>
</html>