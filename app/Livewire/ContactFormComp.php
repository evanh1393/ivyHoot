<?php

namespace App\Livewire;

use Livewire\Component;
use App\Livewire\Forms\ContactForm;

class ContactFormComp extends Component
{
    public ContactForm $form;

    public function save()
    {
        if($this->form->store()) {
            session()->flash([
                'alertColor' => 'success', 
                'message' => 'Contact was saved successfully.'
            ]);
        } else {
            session()->flash(['alertColor' => 'danger', 'message' => 'Contact was not saved successfully.']);
        }
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
