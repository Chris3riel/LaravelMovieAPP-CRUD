<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('registroPelicula', \App\Livewire\RegistrarPelicula::class);
Route::get('eliminarPelicula', \App\Livewire\EliminaPelicula::class);

Route::get('registroActor', \App\Livewire\RegistrarActor::class);
Route::get('eliminarActor', \App\Livewire\EliminarActor::class);

Route::get('registroDirector', \App\Livewire\RegistrarDirector::class);
Route::get('eliminarDirector', \App\Livewire\EliminarDirector::class);

Route::get('registroPremio', \App\Livewire\RegistrarPremio::class);
Route::get('eliminarPremio', \App\Livewire\EliminarPremio::class);

Route::get('registroValoracion', \App\Livewire\RegistrarValoracion::class);
Route::get('eliminarValoracion', \App\Livewire\EliminarValoracion::class);