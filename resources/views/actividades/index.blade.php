<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividades</title>
</head>

<body class="min-h-screen bg-cover bg-center bg-no-repeat"
      style="background-image: url('/images/background.png')">

@include('layouts.header')

<div class="max-w-6xl mx-auto mt-10">

    <div class="flex justify-between items-center mb-6">

        <h1 class="bg-blue-500 text-white text-4xl rounded-lg px-6 py-3 border border-black font-bold">
            Actividades
        </h1>

        <a href="{{ route('actividades.create') }}"
           class="bg-green-500 hover:bg-green-600 text-white px-6 py-3 rounded-lg border border-black font-bold">
            + Agregar Actividad
        </a>

    </div>

    <div class="bg-white rounded-lg shadow-lg overflow-hidden">

        <table class="w-full">

            <thead class="bg-blue-500 text-white">

                <tr>

                    <th class="p-4 border w-20">ID</th>

                    <th class="p-4 border">
                        Descripción
                    </th>

                    <th class="p-4 border w-60">
                        Acciones
                    </th>

                </tr>

            </thead>

            <tbody>

                {{-- @foreach($actividades as $actividad) --}}

                <tr class="text-center hover:bg-gray-100">

                    <td class="border p-3">
                        1
                    </td>

                    <td class="border p-3 text-left">
                        Reparación de fuga domiciliaria
                    </td>

                    <td class="border p-3">

                        <div class="flex justify-center gap-2">

                            <a href="{{ route('actividades.edit',1) }}"
                               class="bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded">

                                Editar

                            </a>

                            <button
                                class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded">

                                Eliminar

                            </button>

                        </div>

                    </td>

                </tr>

                {{-- @endforeach --}}

            </tbody>

        </table>

    </div>

</div>

</body>

</html>