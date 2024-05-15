<?php

namespace App\Livewire;

use App\Models\Party;
use App\Models\Pc as ModelsPc;
use Livewire\Component;

class Pc extends Component
{
    public $myMons;
    public $newName = '';

    public function getListeners(): array
    {
        return [
            "pokemonChanged" => 'render',
        ];
    }

    public function mount()
    {
        $this->myMons = ModelsPc::all();
    }

    public function changeName($id){
        $mon = ModelsPc::find($id);
        $mon->name = $this->newName;
        $mon->save();
        $this->myMons = ModelsPc::all();
        $this->newName = '';
        $this->dispatch('pokemonChanged');
    }

    public function delete($id)
    {
        $mon = ModelsPc::find($id);
        $mon->delete();
        $this->myMons = ModelsPc::all();
        $this->dispatch('pokemonDeleted');
    }

    public function render()
    {
        return view('livewire.pc');
    }
}
