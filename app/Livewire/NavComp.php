<?php

namespace App\Livewire;

use Livewire\Component;

class NavComp extends Component
{
    public function render()
    {
        $currentRoute = request()->route()->uri();

        return view('livewire.nav-comp',[
            'currentRoute' => $currentRoute,
        ]);
    }
}
