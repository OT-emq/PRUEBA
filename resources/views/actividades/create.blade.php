<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nueva Actividad</title>
</head>

<body class="min-h-screen bg-cover bg-center bg-no-repeat"
      style="background-image: url('/images/background.png')">

@include('layouts.header')

<div class="max-w-xl mx-auto mt-12 bg-white rounded-xl shadow-xl p-8">

    <h1 class="bg-blue-500 text-white text-4xl font-bold rounded-lg p-4 text-center mb-8">

        Nueva Actividad

    </h1>

    <form action="{{ route('actividades.store') }}" method="POST">

        @csrf

        <div class="mb-8">

            <label class="font-bold text-lg">

                Descripción

            </label>

            <textarea
                name="descripcion"
                rows="5"
                class="w-full border rounded-lg p-3 mt-2 resize-none"
                placeholder="Ingrese la actividad"></textarea>

        </div>

        <div class="flex justify-between">

            <a href="{{ route('actividades.index') }}"
               class="bg-gray-500 hover:bg-gray-600 text-white px-6 py-3 rounded-lg">

                Cancelar

            </a>

            <button
                class="bg-green-600 hover:bg-green-700 text-white px-6 py-3 rounded-lg">

                Guardar

            </button>

        </div>

    </form>

</div>

</body>

</html>