<?php

namespace App\Http\Livewire\Admin;

use App\Models\Team;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditTeamComponent extends Component
{
    use WithFileUploads;
    public $title;
    public $bgtitle;
    public $short_description;
    public $member_name;
    public $post;
    public $member_obj;
    public $author_profile;
    public $new_profile;
    public $member_id;

    public function mount($id)
    {
        $this->id = $id;
        $team = Team::where('id',$id)->first();
        $this->title = $team->title;
        $this->bgtitle = $team->bgtitle;
        $this->short_description = $team->short_description;
        $this->member_name = $team->member_name;
        $this->post = $team->post;
        $this->member_obj = $team->member_obj;
        $this->author_profile = $team->author_profile;
        $this->member_id = $team->id;

    }

    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'title'=>'required',
            'bgtitle'=>'required',
            'short_description'=>'required',
            'member_name'=>'required',
            'post'=>'required',
            'member_obj'=>'required',
        ]);
        if($this->new_profile)
        {
            $this->validateOnly($fields,[
                'new_profile'=>'required|mimes:jpg,png,jpeg',
            ]);
        }
    }
    public function updateMember()
    {
        $this->validate([
            'title'=>'required',
            'bgtitle'=>'required',
            'short_description'=>'required',
            'member_name'=>'required',
            'post'=>'required',
            'member_obj'=>'required',
        ]);
        if($this->new_profile)
        {
            $this->validate([
                'new_profile'=>'required|mimes:jpg,png,jpeg',
            ]);
        }
        $team = Team::find($this->member_id);
        $team->title = $this->title;
        $team->bgtitle = $this->bgtitle;
        $team->short_description = $this->short_description;
        $team->member_name = $this->member_name;
        $team->post = $this->post;
        $team->member_obj = $this->member_obj;

        if($this->new_profile)
        {
            unlink('assets/images/member_profile' . '/' . $team->author_profile);
            $imageName = Carbon::now()->timestamp . '.' . $this->new_profile->extension();
            $this->new_profile->storeAs('member_profile',$imageName);
            $team->author_profile = $imageName;
        }
        $team->save();
        session()->flash('success','Project has been created successfully!');

    }
    public function render()
    {
        return view('livewire.admin.edit-team-component')->layout('layouts.dashboard');
    }
}
