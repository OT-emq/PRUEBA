<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Trabajador</title>
</head>

<body class="min-h-screen bg-cover bg-center bg-no-repeat"
    style="background-image: url('/images/background.png')">

@include('layouts.header')

<div class="max-w-xl mx-auto mt-12 bg-white rounded-lg shadow-xl p-8">

<h1
class="text-4xl text-center font-bold bg-blue-500 text-white rounded-lg p-4 mb-8">
Nuevo Trabajador
</h1>

<form action="{{ route('trabajadores.store') }}" method="POST">

@csrf

<div class="mb-6">

<label class="font-bold">
Nombre
</label>

<input
type="text"
name="nombre"
class="w-full border rounded-lg p-3 mt-2">

</div>

<div class="mb-8">

<label class="font-bold">
Apellido
</label>

<input
type="text"
name="apellido"
class="w-full border rounded-lg p-3 mt-2">

</div>

<div class="flex justify-between">

<a
href="{{ route('trabajadores.index') }}"
class="bg-gray-500 text-white px-6 py-3 rounded-lg">
Cancelar
</a>

<button
class="bg-green-600 text-white px-6 py-3 rounded-lg">
Guardar
</button>

</div>

</form>

</div>

</body>

</html>