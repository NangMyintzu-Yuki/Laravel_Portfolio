<?php

namespace App\Http\Livewire;

use App\Models\About;
use App\Models\AdminContact;
use App\Models\Contact;
use App\Models\Main;
use App\Models\Project;
use App\Models\Skill;
use App\Models\Service;
use App\Models\Team;
use Livewire\Component;
use Livewire\WithPagination;

class HomeComponent extends Component
{
    use WithPagination;
    public $name;
    public $email;
    public $discussion_title;
    public $message;
    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'name'=>'required',
            'email'=>'required|email',
            'discussion_title'=>'required',
            'message'=>'required',
        ]);
    }
    public function sendMessage()
    {
        $this->validate([
            'name'=>'required',
            'email'=>'required|email',
            'discussion_title'=>'required',
            'message'=>'required',
        ]);
        $contact = new Contact();
        $contact->name = $this->name;
        $contact->email = $this->email;
        $contact->discussion_title = $this->discussion_title;
        $contact->message = $this->message;
        $contact->save();
        session()->flash('success','Your message has been sent!');
    }
    public function render()
    {
        $mains = Main::first();
        $abouts = About::first();
        $skills = Skill::all();
        $services = Service::all();
        $projects = Project::paginate(6);
        $teams = Team::paginate(2);
        $admin_contacts = AdminContact::first();

        return view('livewire.home-component',['mains'=>$mains,'abouts'=>$abouts,'skills'=>$skills,'services'=>$services,'projects'=>$projects,'teams'=>$teams,'admin_contacts'=>$admin_contacts])->layout('layouts.base');
    }
}
