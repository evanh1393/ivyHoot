<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Program;

class ProgramComponent extends Component
{
    public function render()
    {
        //dd(Program::all());
        return view('livewire.program-component');
    }
}
