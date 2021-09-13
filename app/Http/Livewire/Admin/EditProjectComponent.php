<?php

namespace App\Http\Livewire\Admin;

use App\Models\Project;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditProjectComponent extends Component
{
    use WithFileUploads;
    public $title;
    public $bgtitle;
    public $short_description;
    public $pj_title;
    public $language;
    public $image;
    public $newimage;
    public $project_id;

    public function mount($id)
    {
        $this->id = $id;
        $project = Project::where('id',$id)->first();
        $this->title = $project->title;
        $this->bgtitle = $project->bgtitle;
        $this->short_description = $project->short_description;
        $this->pj_title = $project->pj_title;
        $this->language = $project->language;
        $this->image = $project->image;
        $this->project_id = $project->id;

    }
    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'title'=>'required',
            'bgtitle'=>'required',
            'short_description'=>'required',
            'pj_title'=>'required',
            'language'=>'required',
        ]);
        if($this->newimage)
        {
            $this->validateOnly($fields,[
                'newimage'=>'required|mimes:jpg,png,jpeg',
            ]);
        }
    }
    public function updateProject()
    {
        $this->validate([
            'title'=>'required',
            'bgtitle'=>'required',
            'short_description'=>'required',
            'pj_title'=>'required',
            'language'=>'required',
        ]);
        if($this->newimage)
        {
            $this->validate([
                'newimage'=>'required|mimes:jpg,png,jpeg',
            ]);
        }

        $project = Project::find($this->project_id);
        $project->title = $this->title;
        $project->bgtitle = $this->bgtitle;
        $project->short_description = $this->short_description;
        $project->pj_title = $this->pj_title;
        $project->language = $this->language;

        if($this->newimage)
        {
            unlink('assets/images/projects' . '/' . $project->image);
            $imageName = Carbon::now()->timestamp . '.' . $this->newimage->extension();
            $this->newimage->storeAs('projects',$imageName);
            $project->image = $imageName;
        }
        $project->save();
        session()->flash('success','Project has been updated successfully!');

    }
    public function render()
    {
        return view('livewire.admin.edit-project-component')->layout('layouts.dashboard');
    }
}
