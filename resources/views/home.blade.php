<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body  class="h-screen bg-cover bg-center bg-no-repeat" style="background-image: url('/images/background.png')">
    @include('layouts.header')

    <div class="flex-col py-auto ">
        <h1 class="bg-blue-500 text-white text-5xl rounded-[7px] p-4 border border-black w-fit mx-auto my-auto">Años disponibles</h1>

        <div class="flex justify-center m-10 ">
        <button class="text-6xl rounded-[7px] text-white bg-blue-500 p-4 m-[10px] border border-black">2025</button>
        <button class="text-6xl rounded-[7px] text-white bg-blue-500 p-4 m-[10px] border border-black">2026</button>
        </div>

    </div>
</body>

</html>
