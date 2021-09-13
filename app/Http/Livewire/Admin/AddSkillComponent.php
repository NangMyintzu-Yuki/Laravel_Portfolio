<?php

namespace App\Http\Livewire\Admin;

use App\Models\Skill;
use Livewire\Component;

class AddSkillComponent extends Component
{
    public $name;
    public $percent;

    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'name'=>'required',
            'percent'=>'required|numeric',
        ]);
    }
    public function CreateSkill()
    {
        $this->validate([
            'name'=>'required',
            'percent'=>'required|numeric',
        ]);
        $skill = new Skill();
        $skill->name = $this->name;
        $skill->percent = $this->percent;
        $skill->save();
        session()->flash('success','Skill has been created successfully!');
    }
    public function render()
    {
        return view('livewire.admin.add-skill-component')->layout('layouts.dashboard');
    }
}
