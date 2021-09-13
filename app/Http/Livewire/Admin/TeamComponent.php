<?php

namespace App\Http\Livewire\Admin;

use App\Models\Team;
use Livewire\Component;

class TeamComponent extends Component
{
    public function deleteTeam($id)
    {
        $team = Team::find($id);
        $team->delete();
        session()->flash('success','Team member has been deleted successfully!');
    }
    public function render()
    {
        $teams = Team::all();
        return view('livewire.admin.team-component',['teams'=>$teams])->layout('layouts.dashboard');
    }
}
