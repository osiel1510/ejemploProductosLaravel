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
        <li><a href="" class="text-gray-300 hover:text-white">{{auth()->user()->name}}</a></li>

        <li><a href="" class="text-gray-300 hover:text-white">{{auth()->user()->name}}</a></li>
        <form method="post" style="width: 90%;" action="{{route('logout')}}" >
    @csrf
    <li class="text-gray-300 hover:text-white"><input class="cursor-pointer" type="submit" value="Cerrar Sesión"></li>
</form>
    </ul>
      </div>
    </nav>

<header style ="height: 85vh;"class="py-20">
<div class="flex flex-col justiy-center items-center mx-auto text-center">


    <div class="bg-white p-8 rounded shadow-md">
        <h2 class="text-2xl font-bold text-gray-900 mb-4 text-center">Formulario de Producto</h2>
        <form method="POST" action="{{route('productos.store')}}">
            @csrf
          <div class="mb-4 flex">
            <label style="width: 200px;" for="descripcionCorta" class=" pr-3 text-gray-700 font-bold">Descripción Corta</label>
            <input type="text" name="descripcionCorta" class="w-3/4 px-3 py-2 border border-gray-300 rounded focus:outline-none focus:border-pink-500" placeholder="Descripción Corta" required>
          </div>
          <div class="mb-4 flex">
            <label style="width: 200px;" for="descripcionLarga" class=" pr-3 text-gray-700 font-bold">Descripción Larga</label>
            <textarea name="descripcionLarga" class="w-3/4 px-3 py-2 border border-gray-300 rounded focus:outline-none focus:border-pink-500" placeholder="Descripción Larga" required></textarea>
          </div>
          <div class="mb-4 flex">
            <label style="width: 200px;" for="precioVenta" class=" pr-3 text-gray-700 font-bold">Precio de Venta</label>
            <input type="number"  step="0.01" name="precioVenta" class="w-3/4 px-3 py-2 border border-gray-300 rounded focus:outline-none focus:border-pink-500" placeholder="Precio de Venta" required>
          </div>
          <div class="mb-4 flex">
            <label style="width: 200px;" for="precioCompra" class=" pr-3 text-gray-700 font-bold">Precio de Compra</label>
            <input type="number"  step="0.01" name="precioCompra" class="w-3/4 px-3 py-2 border border-gray-300 rounded focus:outline-none focus:border-pink-500" placeholder="Precio de Compra" required>
          </div>
          <div class="mb-4 flex">
            <label style="width: 200px;" for="stock" class=" pr-3 text-gray-700 font-bold">Stock</label>
            <input type="number"  step="0.01" name="stock" class="w-3/4 px-3 py-2 border border-gray-300 rounded focus:outline-none focus:border-pink-500" placeholder="Stock" required>
          </div>
          <div class="mb-4 flex">
            <label style="width: 200px;" for="pesoProducto" class=" pr-3 text-gray-700 font-bold">Peso del Producto</label>
            <input type="number"  step="0.01" name="pesoProducto" class="w-3/4 px-3 py-2 border border-gray-300 rounded focus:outline-none focus:border-pink-500" placeholder="Peso del Producto" required>
          </div>
          <button type="submit" class="w-full bg-pink-500 text-white font-bold py-2 px-4 rounded focus:outline-none hover:bg-pink-600">Guardar Producto</button>
        </form>
        <a href="{{route('ver-productos')}}" type="submit" class="w-full bg-pink-500 text-white font-bold py-2 px-4 rounded focus:outline-none hover:bg-pink-600">Ver productos</a>
        @if ($errors->any())
        <p class="font-bold text-red-500">{{ $errors->first() }}</p>
        @endif
      </div>

</div>
</header>

    <footer class="bg-pink-500 py-4">
      <div class="container mx-auto text-center">
        <p class="text-white">© 2023 Todos los derechos reservados.</p>
      </div>
    </footer>
  </div>
</body>
</html>
