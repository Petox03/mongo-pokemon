<?php

namespace App\Livewire;

use App\Models\Pokemon as ModelsPokemon;
use Illuminate\View\View;
use Livewire\Component;

class Pokemon extends Component
{
    public $pokemon;
    public $types;
    public function mount()
    {
        $this->pokemon = ModelsPokemon::all();
    }
    public function render(): View
    {
        /* $this->abilities = Ability::find('66384b26636fe4fbfc051b15')->get(); */
        return view('livewire.pokemon');
    }
}
