<?php

namespace App\Http\Livewire\Admin;

use App\Models\AdminContact;
use Livewire\Component;

class AdminEditContactComponent extends Component
{
    public $phone;
    public $email;
    public $address;
    public $facebook;
    public $twitter;
    public $telegram;
    public $github;
    public $icon;
    public $contact_id;

    public function mount($id)
    {
        $this->id = $id;
        $admincontact = AdminContact::where('id',$id)->first();
        $this->phone = $admincontact->phone;
        $this->email = $admincontact->email;
        $this->address = $admincontact->address;
        $this->facebook = $admincontact->facebook;
        $this->twitter = $admincontact->twitter;
        $this->telegram = $admincontact->telegram;
        $this->github = $admincontact->github;
        $this->contact_id = $admincontact->id;

    }

    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'phone'=>'required',
            'email'=>'required|email',
            'address'=>'required',
            'facebook'=>'required',
            'twitter'=>'required',
            'telegram'=>'required',
            'github'=>'required',

        ]);
    }

    public function updateAdminContact()
    {
        $this->validate([
            'phone'=>'required',
            'email'=>'required|email',
            'address'=>'required',
            'facebook'=>'required',
            'twitter'=>'required',
            'telegram'=>'required',
            'github'=>'required',

        ]);
        $admincontact = AdminContact::find($this->contact_id);
        $admincontact->phone = $this->phone;
        $admincontact->email = $this->email;
        $admincontact->address = $this->address;
        $admincontact->facebook = $this->facebook;
        $admincontact->twitter = $this->twitter;
        $admincontact->telegram = $this->telegram;
        $admincontact->github = $this->github;
        $admincontact->save();
        session()->flash('success','Admin Contact has been created successfully!');

    }
    public function render()
    {
        return view('livewire.admin.admin-edit-contact-component')->layout('layouts.dashboard');
    }
}
