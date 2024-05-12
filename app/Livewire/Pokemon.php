<?php

namespace App\Livewire;

use App\Models\Pokemon as ModelsPokemon;
use App\Models\Type;
use Illuminate\View\View;
use Livewire\Component;

class Pokemon extends Component
{
    public $pokemon;
    public $types;
    public string $search = '';
    public string $typeSearch = ',';

    public function setType($type){
        $this->typeSearch = $type;
    }

    public function render(): View
    {
        $this->types = Type::all();
        $type_ids = explode(',', $this->typeSearch); // Convierte el string en un array

        $this->pokemon = ModelsPokemon::where('name', 'like', '%' . $this->search . '%');

        foreach ($type_ids as $type_id) {
            $this->pokemon = $this->pokemon->Where('type_ids', 'like', '%' . $type_id . '%');
        }

        $this->pokemon = $this->pokemon->get();
        return view('livewire.pokemon');
    }
}
