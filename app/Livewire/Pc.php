<?php

namespace App\Livewire;

use App\Models\Party;
use App\Models\Pc as ModelsPc;
use Livewire\Component;

class Pc extends Component
{
    public $myMons;

    public function mount()
    {
        $this->myMons = ModelsPc::all();
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
