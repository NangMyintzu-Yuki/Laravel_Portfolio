<?php

namespace App\Http\Livewire\Admin;

use App\Models\Skill;
use Livewire\Component;

class SkillComponent extends Component
{
    public function deleteSkill($id)
    {
        $skill = Skill::find($id);
        $skill->delete();
        session()->flash('success','Skill has been deleted successfully!');
    }
    public function render()
    {
        $skills = Skill::all();
        return view('livewire.admin.skill-component',['skills'=>$skills])->layout('layouts.dashboard');
    }
}
