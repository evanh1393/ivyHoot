<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Contact;
use App\Models\Program;

class ContactComp extends Component
{
    use WithPagination;

    public $pageTitle;

    public $search;

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        sleep(1);

        $query = Contact::query();

        if ($this->search) {
            // MongoDB is schema-less, but for simple attribute queries like this, 
            // the standard Laravel query builder syntax should suffice.
            $query->where(function ($q) {
                $q->where('full_name', 'like', '%' . $this->search . '%')
                  ->orWhere('email', 'like', '%' . $this->search . '%')
                  ->orWhere('mobile', 'like', '%' . $this->search . '%');
            });
        }

        return view('livewire.contact-comp', [
            'pageTitle' => 'Contact Page',
            'contacts' => $query->paginate(10),
        ]);
    }
}
