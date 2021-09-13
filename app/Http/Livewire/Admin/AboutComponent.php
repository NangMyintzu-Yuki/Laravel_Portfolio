<?php

namespace App\Http\Livewire\Admin;

use App\Models\About;
use Livewire\Component;

class AboutComponent extends Component
{
    public function deleteAbout($id)
    {
        $about = About::find($id);
        $about->delete();
        session()->flash('success','Resume has been deleted successfully!');
    }
    public function render()
    {
        $abouts = About::all();
        return view('livewire.admin.about-component',['abouts'=>$abouts])->layout('layouts.dashboard');
    }
}
