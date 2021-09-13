<?php

namespace App\Http\Livewire\Admin;

use App\Models\AdminContact;
use Livewire\Component;

class AdminAddContactComponent extends Component
{
    public $phone;
    public $email;
    public $address;
    public $facebook;
    public $twitter;
    public $telegram;
    public $github;
    public $icon;

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

    public function createAdminContact()
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
        $admincontact =new AdminContact();
        $admincontact->phone = $this->phone;
        $admincontact->email = $this->email;
        $admincontact->address = $this->address;
        $admincontact->facebook = $this->facebook;
        $admincontact->twitter = $this->twitter;
        $admincontact->telegram = $this->telegram;
        $admincontact->github = $this->github;
        $admincontact->icon = $this->icon;
        $admincontact->save();
        session()->flash('success','Admin Contact has been created successfully!');

    }
    public function render()
    {
        return view('livewire.admin.admin-add-contact-component')->layout('layouts.dashboard');
    }
}
