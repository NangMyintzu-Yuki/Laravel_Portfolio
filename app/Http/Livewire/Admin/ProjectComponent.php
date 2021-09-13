<?php

namespace App\Http\Livewire\Admin;

use App\Models\Project;
use Livewire\Component;

class ProjectComponent extends Component
{
    public function deleteProject($id)
    {
        $project = Project::find($id);
        $project->delete();
        session()->flash('success','Project has been deleted successfully!');
    }
    public function render()
    {
        $projects = Project::all();
        return view('livewire.admin.project-component',['projects'=>$projects])->layout('layouts.dashboard');
    }
}
