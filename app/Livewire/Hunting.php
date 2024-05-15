<?php

namespace App\Livewire;

use App\Models\Pc;
use App\Models\Pokemon;
use Livewire\Component;

class Hunting extends Component
{
    public $pokemon;

    public function getListeners(): array
    {
        return [
            "reset" => 'render',
        ];
    }

    public function mount(){
        $this->pokemon = Pokemon::raw(function ($collection) {
            return $collection->aggregate([
                ['$sample' => ['size' => rand(5, 20)]]
            ]);
        })->all();
    }

    public function catch($id)
    {
        $randomCatch = rand(1, 100);
        $randomReset = rand(1, 6);

        if ($randomCatch <= 100) {
            $pokemon = Pokemon::find($id);

            $abilityId = $pokemon->abilitie_ids[array_rand($pokemon->abilitie_ids)];

            Pc::create([
                'name' => $pokemon->name,
                'pokemon_id' => $pokemon->_id,
                'ability_id' => $abilityId
            ]);

            $this->dispatch('catch', msg: '¡Pokémon capturado con éxito!', icon: 'success');
            $this->dispatch('reset');
        } else {
            $this->dispatch('catch', msg: 'El Pokémon se escapó.', icon: 'error');
        }
        if ($randomReset >= 4) {
            $this->dispatch('reset');
        }

    }

    public function render()
    {
        return view('livewire.hunting');
    }
}
