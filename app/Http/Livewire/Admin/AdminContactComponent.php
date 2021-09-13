<?php

namespace App\Http\Livewire\Admin;

use App\Models\AdminContact;
use Livewire\Component;

class AdminContactComponent extends Component
{
    public function deleteAdminContact($id)
    {
        $admin_contact = AdminContact::find($id);
        $admin_contact->delete();
        session()->flash('success','Admin contact has been deleted successfully');
    }
    public function render()
    {
        $admin_contacts = AdminContact::all();
        return view('livewire.admin.admin-contact-component',['admin_contacts'=>$admin_contacts])->layout('layouts.dashboard');
    }
}
