<?php

namespace App\Livewire;

use Livewire\Component;

class ContactComp extends Component
{
    public $pageTitle;

    public function __mount()
    {
        $this->pageTitle = "Contacts";
    }

    public function render()
    {
        return view('livewire.contact-comp', [
            'pageTitle' => 'Contact Page'
        ]);
    }
}
