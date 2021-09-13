<?php

namespace App\Http\Livewire\Admin;

use App\Models\Project;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddProjectComponent extends Component
{
    use WithFileUploads;
    public $title;
    public $bgtitle;
    public $short_description;
    public $pj_title;
    public $language;
    public $image;

    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'title'=>'required',
            'bgtitle'=>'required',
            'short_description'=>'required',
            'pj_title'=>'required',
            'language'=>'required',
            'image'=>'required|mimes:jpg,png,jpeg',
        ]);
    }
    public function createProject()
    {
        $this->validate([
            'title'=>'required',
            'bgtitle'=>'required',
            'short_description'=>'required',
            'pj_title'=>'required',
            'language'=>'required',
            'image'=>'required|mimes:jpg,png,jpeg',
        ]);
        $project = new Project();
        $project->title = $this->title;
        $project->bgtitle = $this->bgtitle;
        $project->short_description = $this->short_description;
        $project->pj_title = $this->pj_title;
        $project->language = $this->language;

        $imageName = Carbon::now()->timestamp. '.' . $this->image->extension();
        $this->image->storeAs('projects',$imageName);
        $project->image = $imageName;
        $project->save();
        session()->flash('success','Project has been created successfully!');

    }
    public function render()
    {
        return view('livewire.admin.add-project-component')->layout('layouts.dashboard');
    }
}
