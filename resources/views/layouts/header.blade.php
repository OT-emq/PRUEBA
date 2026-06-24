<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>

<body>
    <div class="bg-[#8DC2FF] flex p-1">
        <img class="h-20 self-center" src="{{ asset('images/logo.png') }}" alt="Logo">
        <h1 class="font-bold text-white text-[20px] mx-auto self-center">GENERACION PARA ORDEN DE TRABAJO (OT)</h3>
    </div>
 
    <div class="flex mx-auto max-w-200">
       
        <button class="flex-1 m-3 text-white border border-black bg-[#6ADA6E] rounded-[7px] py-1 px-3 font-bold">Inicio</button>
        <button class="flex-1 m-3 text-white border border-black bg-[#6ADA6E] rounded-[7px] py-1 px-3 font-bold">Trabajadores</button>
        <button class="flex-1 m-3 text-white border border-black bg-[#6ADA6E] rounded-[7px] py-1 px-3 font-bold">Plan diario</button>
        <button class="flex-1 m-3 text-white border border-black bg-[#6ADA6E] rounded-[7px] py-1 px-3 font-bold">Actividades</button>
       
    </div>

</body>

</html>
