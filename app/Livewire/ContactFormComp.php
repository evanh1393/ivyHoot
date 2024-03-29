<?php

namespace App\Livewire;

use Livewire\Component;
use App\Livewire\Forms\ContactForm;

class ContactFormComp extends Component
{
    public ContactForm $form;

    public function save()
    {
        $this->form->store();
    }

    public function render()
    {
        return view('livewire.contact-form-comp');
    }

    public function updated($value)
    {
        info($value);
    }
}
