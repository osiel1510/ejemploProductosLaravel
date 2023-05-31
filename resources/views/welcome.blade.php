@vite('resources/css/app.css')

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Página de Inicio - Ejemplo con Tailwind CSS</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>

  <div class="bg-pink-200 min-h-screen">
    <nav class="bg-pink-500 py-4">
      <div class="container mx-auto flex items-center justify-between px-4">
        <a href="#" class="text-white font-bold text-xl"></a>
        <ul class="flex space-x-4">

        @guest
            <li><a href="{{route('login')}}" class="text-gray-300 hover:text-white">Iniciar Sesión</a></li>
            <li><a href="{{route('registrar-cuenta')}}" class="text-gray-300 hover:text-white">Regístrate</a></li>
        @endguest

        @auth

        <li><a href="" class="text-gray-300 hover:text-white">{{auth()->user()->name}}</a></li>
        <form method="post" style="width: 90%;" action="{{route('logout')}}" >
    @csrf
    <li class="text-gray-300 hover:text-white"><input class="cursor-pointer" type="submit" value="Cerrar Sesión"></li>
</form>
@endauth
        </ul>
      </div>
    </nav>

@guest
<header style ="height: 85vh;" class="py-20">
      <div class="container mx-auto text-center">
        <h1 class="text-5xl font-bold text-gray-900 mb-4">Bienvenido a nuestra página</h1>
        <p class="text-2xl text-gray-700">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      </div>
    </header>
    <section class="bg-white py-16">
      <div class="container mx-auto">
        <h2 class="text-3xl font-bold text-gray-900 mb-8 text-center">Nuestros Servicios</h2>
        <!-- Contenido de los servicios -->
      </div>
    </section>

@endguest

@auth
<header style ="height: 85vh;"class="py-20">
<div class="flex flex-col justiy-center items-center mx-auto text-center">
    <h1 class="text-5xl font-bold text-gray-900 mb-4">Bienvenido {{auth()->user()->name}}</h1>
    <a href="{{route('productos.index')}}" class=" bg-pink-500 text-white font-bold text-2xl p-5 rounded-2xl hover:bg-pink-600">PRODUCTOS</a>
</div>
</header>


@endauth
    <footer class="bg-pink-500 py-4">
      <div class="container mx-auto text-center">
        <p class="text-white">© 2023 Todos los derechos reservados.</p>
      </div>
    </footer>
  </div>
</body>
</html>
