<?php

namespace App\Http\Livewire\Admin;

use App\Models\Main;
use Livewire\Component;

class MainComponent extends Component
{
    public function deleteMain($id)
    {
        $main = Main::find($id);
        $main->delete();
        session()->flash('Item has been deleted successfully!');
    }
    public function render()
    {
        $mains = Main::all();
        return view('livewire.admin.main-component',['mains'=>$mains])->layout('layouts.dashboard');
    }
}
