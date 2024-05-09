<?php

namespace App\Livewire;

use App\Models\Pokemon;
use Livewire\Component;

class SinglePokemon extends Component
{
    public $pokemon;

    public function mount($id){
        $this->pokemon = Pokemon::find($id);
    }

    public function render()
    {
        return view('livewire.single-pokemon');
    }
}
