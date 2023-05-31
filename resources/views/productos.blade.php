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
                <form method="post" style="width: 90%;" action="{{route('logout')}}" >
            @csrf
            <li class="text-gray-300 hover:text-white"><input class="cursor-pointer" type="submit" value="Cerrar Sesión"></li>
        </form>
        </ul>
      </div>
    </nav>

<header style ="height: 85vh;"class="py-20">

    <a href="{{route('productos.index')}}" type="submit" class="ml-96 bg-pink-500 text-white font-bold py-2 px-4 rounded focus:outline-none hover:bg-pink-600">Registrar Productos</a>

<div class="mt-10 flex flex-col justiy-center items-center mx-auto text-center">

    <div class="bg-white p-8 rounded shadow-md">

        <h2 class="text-2xl font-bold text-gray-900 mb-4 text-center">Vista de los productos</h2>
        <table class="min-w-full bg-white border border-gray-300">
            <thead>
              <tr>
                <th class="py-2 px-4 border-b">ID</th>
                <th class="py-2 px-4 border-b">Descripción Corta</th>
                <th class="py-2 px-4 border-b">Descripción Larga</th>
                <th class="py-2 px-4 border-b">Precio de Venta</th>
                <th class="py-2 px-4 border-b">Precio de Compra</th>
                <th class="py-2 px-4 border-b">Stock</th>
                <th class="py-2 px-4 border-b">Fecha de Registro</th>
                <th class="py-2 px-4 border-b">Peso del Producto</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
                @foreach ($productos as $producto)
                <tr>
                    <td class="py-2 px-4 border-b">{{ $producto->id }}</td>
                    <td class="py-2 px-4 border-b">{{ $producto->descripcionCorta }}</td>
                    <td class="py-2 px-4 border-b">{{ $producto->descripcionLarga }}</td>
                    <td class="py-2 px-4 border-b">${{ $producto->precioVenta }}</td>
                    <td class="py-2 px-4 border-b">${{ $producto->precioCompra }}</td>
                    <td class="py-2 px-4 border-b">{{ $producto->stock }}</td>
                    <td class="py-2 px-4 border-b">{{ $producto->fechaRegistro }}</td>
                    <td class="py-2 px-4 border-b">{{ $producto->pesoProducto }} kg</td>
                    <td class="py-2 px-4 border-b">
                        <form action="{{ route('productos.delete', ['id' => $producto->id]) }}" method="POST" class="mt-5 flex justify-center items-start flex-col">
                            @csrf
                            @method('DELETE')
                            <button class="hover:bg-red-600 px-4 py-2 bg-red-500 text-white rounded">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
          </table>
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
