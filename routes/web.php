<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

//RUTAS DEL APARTADO TRABAJADORES
Route::view('/trabajadores', 'trabajadores.index')->name('trabajadores.index');
Route::view('/trabajadores/create', 'trabajadores.create')->name('trabajadores.create');
Route::view('/trabajadores/edit', 'trabajadores.edit')->name('trabajadores.edit');

// Rutas temporales para los formularios
Route::post('/trabajadores', fn() => back())->name('trabajadores.store');
Route::put('/trabajadores/{id}', fn() => back())->name('trabajadores.update');



//RUTAS DEL APARTADO ACTIVIDADES
Route::view('/actividades', 'actividades.index')->name('actividades.index');

Route::view('/actividades/create', 'actividades.create')->name('actividades.create');

Route::view('/actividades/edit', 'actividades.edit')->name('actividades.edit');

// Temporales para los formularios
Route::post('/actividades', fn() => back())->name('actividades.store');

Route::put('/actividades/{id}', fn() => back())->name('actividades.update');



//RUTAS DEL APARTADO PLANES
Route::view('/planes', 'planes.index')->name('planes.index');

Route::view('/planes/imprimir', 'planes.imprimir')->name('planes.imprimir');
