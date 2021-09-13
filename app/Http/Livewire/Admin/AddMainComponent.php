<?php

namespace App\Http\Livewire\Admin;

use App\Models\Main;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddMainComponent extends Component
{
    use WithFileUploads;
    public $title;
    public $subtitle;
    public $intro;
    public $image;
    public $resume;


    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'title'=>'required',
            'subtitle'=>'required',
            'intro'=>'required',
            'image'=>'required|mimes:jpeg,jpg,png',
            'resume'=>'required|mimes:pdf',
        ]);
    }
    public function createMain()
    {
        $this->validate([
            'title'=>'required',
            'subtitle'=>'required',
            'intro'=>'required',
            'image'=>'required|mimes:jpeg,jpg,png',
            'resume'=>'required|mimes:pdf',
        ]);
        $main = new Main();
        $main->title = $this->title;
        $main->subtitle = $this->subtitle;
        $main->intro = $this->intro;

        $imageName = Carbon::now()->timestamp. '.' .$this->image->extension();
        $this->image->storeAs('myimg',$imageName);
        $main->image = $imageName;

        $resumeName = Carbon::now()->timestamp. '.' .$this->resume->extension();
        $this->resume->storeAs('uploads',$resumeName);
        $main->resume = $resumeName;

        $main->save();
        session()->flash('success','Created successfully!');
    }

    public function render()
    {
        return view('livewire.admin.add-main-component')->layout('layouts.dashboard');
    }
}
