<?php

use App\Livewire\pokemon;
use App\Livewire\SinglePokemon;
use Illuminate\Support\Facades\Route;

/* Route::get('/', function(){
    return view('welcome');
}); */
Route::get('/', function(){
    return view('welcome');
});
Route::get('/pokedex', pokemon::class);
Route::get('/pokedex/{id}', SinglePokemon::class);
