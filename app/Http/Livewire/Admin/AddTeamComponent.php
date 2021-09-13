<?php

namespace App\Http\Livewire\Admin;

use App\Models\Team;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddTeamComponent extends Component
{
    use WithFileUploads;
    public $title;
    public $bgtitle;
    public $short_description;
    public $member_name;
    public $post;
    public $member_obj;
    public $author_profile;

    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'title'=>'required',
            'bgtitle'=>'required',
            'short_description'=>'required',
            'member_name'=>'required',
            'post'=>'required',
            'member_obj'=>'required',
            'author_profile'=>'required|mimes:jpg,png,jpeg',
        ]);
    }
    public function createMember()
    {
        $this->validate([
            'title'=>'required',
            'bgtitle'=>'required',
            'short_description'=>'required',
            'member_name'=>'required',
            'post'=>'required',
            'member_obj'=>'required',
            'author_profile'=>'required|mimes:jpg,png,jpeg',
        ]);
        $team = new Team();
        $team->title = $this->title;
        $team->bgtitle = $this->bgtitle;
        $team->short_description = $this->short_description;
        $team->member_name = $this->member_name;
        $team->post = $this->post;
        $team->member_obj = $this->member_obj;

        $imageName = Carbon::now()->timestamp. '.' . $this->author_profile->extension();
        $this->author_profile->storeAs('member_profile',$imageName);
        $team->author_profile = $imageName;
        $team->save();
        session()->flash('success','Project has been created successfully!');

    }
    public function render()
    {
        return view('livewire.admin.add-team-component')->layout('layouts.dashboard');
    }
}
