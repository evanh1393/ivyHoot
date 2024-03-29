<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;
use App\Models\Contact;

class ContactForm extends Form
{
    #[Validate('required')]
    public string $fullName;

    #[Validate('required|max:15')]
    public string $mobile;

    #[Validate('required|email')]
    public string $email;

    public Contact $contact;

    public function store()
    {
        info('store hit');
        $this->validate();
    }
}
