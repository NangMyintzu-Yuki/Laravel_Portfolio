<?php

namespace App\Http\Livewire\Admin;

use App\Models\Contact;
use Livewire\Component;

class AdminViewContactComponent extends Component
{
    public function deleteMessage($id)
    {
        $contact = Contact::find($id);
        $contact->delete();
        session()->flash('success','Message has been deleted successfully!');
    }
    public function render()
    {
        $contacts = Contact::all();
        return view('livewire.admin.admin-view-contact-component',['contacts'=>$contacts])->layout('layouts.dashboard');
    }
}
