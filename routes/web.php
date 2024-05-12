<?php

use App\Livewire\Hunting;
use App\Livewire\Pc;
use App\Livewire\pokemon;
use App\Livewire\SinglePokemon;
use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return view('welcome');
});
Route::get('/pokedex', pokemon::class);
Route::get('/pokedex/{id}', SinglePokemon::class);
route::get('/hunting', Hunting::class);
route::get('/pc', Pc::class);
