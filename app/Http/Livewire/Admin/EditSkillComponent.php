<?php

namespace App\Http\Livewire\Admin;

use App\Models\Skill;
use Livewire\Component;

class EditSkillComponent extends Component
{
    public $name;
    public $percent;
    public $skill_id;

    public function mount($id)
    {
        $this->id = $id;
        $skill = Skill::where('id',$id)->first();
        $this->name = $skill->name;
        $this->percent = $skill->percent;
        $this->skill_id = $skill->id;
    }

    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'name'=>'required',
            'percent'=>'required|numeric',
        ]);
    }
    public function updateSkill()
    {
        $this->validate([
            'name'=>'required',
            'percent'=>'required|numeric',
        ]);

        $skill = Skill::find($this->skill_id);
        $skill->name = $this->name;
        $skill->percent = $this->percent;
        $skill->save();
        session()->flash('success','Skill has been updated successfully!');
    }
    public function render()
    {
        return view('livewire.admin.edit-skill-component')->layout('layouts.dashboard');
    }
}
