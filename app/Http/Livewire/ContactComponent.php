<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use Livewire\Component;

class ContactComponent extends Component
{
    public function render()
    {
        return view('livewire.contact-component')->layout('layouts.dashboard');
    }
}
