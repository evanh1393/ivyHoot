<?php

namespace App\Livewire\Forms;

use App\Models\Contact;
use Livewire\Attributes\Validate;
use Livewire\Form;

class ContactForm extends Form
{
    #[Validate('required')]
    public string $fullName;

    #[Validate('required|max:15')]
    public string $mobile;

    #[Validate('required|email')]
    public string $email;

    // create logic
    public function store(): bool
    {
        $this->validate();
        // create logic
        try {
            $contact = new Contact;
            $contact->full_name = $this->fullName;
            $contact->mobile = $this->mobile;
            $contact->email = $this->email;
            $contact->active = true;
            $contact->save();
        } catch (\Exception $e) {
            $errorStr = "Error creating contact: " . $e->getMessage();
            Log::error($errorStr);
            throw new \Exception($errorStr);
            return false;
        }
        return true;
    }
}
