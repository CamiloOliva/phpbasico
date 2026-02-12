<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario de Contacto</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="relative min-h-screen flex items-center justify-center">

    <!-- Imagen de fondo -->
    <div class="absolute inset-0">
        <img 
            src="https://images.unsplash.com/photo-1492724441997-5dc865305da7"
            alt="Fondo clásico oficina"
            class="w-full h-full object-cover"
        >
        <!-- Capa oscura encima de la imagen -->
        <div class="absolute inset-0 bg-black bg-opacity-60"></div>
    </div>

    <!-- Contenido -->
    <div class="relative bg-white/90 backdrop-blur-md w-full max-w-md p-8 rounded-2xl shadow-2xl">
        
        <h1 class="text-3xl font-bold text-center text-gray-800 mb-6">
            Formulario de Contacto
        </h1>

        <form action = "/store" method= "GET">
            
            <!-- Campo Email -->
            <div>
                <label class="block text-gray-700 font-semibold mb-2">
                    Correo Electrónico
                </label>
                <input 
                    type="email" 
                    name="email"
                    placeholder="ejemplo@correo.com"
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:outline-none transition duration-300"
                >
            </div>

            <!-- Campo Mensaje -->
            <div>
                <label class="block text-gray-700 font-semibold mb-2">
                    Mensaje
                </label>
                <textarea 
                    name="mensaje"
                    rows="4"
                    placeholder="Escribe tu mensaje aquí..."
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:outline-none transition duration-300"
                ></textarea>
            </div>

            <!-- Botón -->
            <button 
                type="submit"
                class="w-full bg-gradient-to-r from-indigo-600 to-purple-600 text-white font-semibold py-3 rounded-lg shadow-lg hover:scale-105 transform transition duration-300"
            >
                Enviar Mensaje
            </button>

        </form>

    </div>

</body>
</html>
