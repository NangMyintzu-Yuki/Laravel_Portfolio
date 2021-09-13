<?php

namespace App\Http\Livewire\Admin;

use App\Models\Main;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditMainComponent extends Component
{
        use WithFileUploads;
        public $title;
        public $subtitle;
        public $intro;
        public $image;
        public $resume;
        public $newimage;
        public $newresume;
        public $main_id;

    public function mount($id)
    {
        $this->id = $id;
        $main = Main::where('id',$id)->first();
        $this->title = $main->title;
        $this->intro = $main->intro;
        $this->subtitle = $main->subtitle;
        $this->image = $main->image;
        $this->resume = $main->resume;
        $this->main_id = $main->id;

    }
    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'title'=>'required',
            'subtitle'=>'required',
            'intro'=>'required',
        ]);
        if($this->newimage)
        {
            $this->validateOnly($fields,[
                'newimage'=>'required|mimes:png,jpg,jpeg',
            ]);
        }
        if($this->newresume)
        {
            $this->validateOnly($fields,[
                'newresume'=> 'required|mimes:pdf',
            ]);
        }
    }
    public function editMain()
    {
        $this->validate([
            'title'=>'required',
            'subtitle'=>'required',
            'intro'=>'required',
        ]);
        if($this->newimage)
        {
            $this->validate([
                'newimage'=>'required|mimes:png,jpg,jpeg',
            ]);
        }
        if($this->newresume)
        {
            $this->validate([
                'newresume'=>'required|mimes:pdf',
            ]);
        }
        $main = Main::find($this->main_id);
        $main->title = $this->title;
        $main->intro = $this->intro;
        $main->subtitle = $this->subtitle;
        if($this->newimage)
        {
            unlink('assets/images/myimg/' . '/' .$main->image);
            $imageName = Carbon::now()->timestamp. '.'.$this->newimage->extension();
            $this->newimage->storeAs('myimg',$imageName);
            $main->image = $imageName;
        }
        if($this->newresume)
        {
            unlink('assets/images/uploads/'.'/'.$main->resume);
            $resumeName = Carbon::now()->timestamp. '.' .$this->newresume->extension();
            $this->newresume->storeAs('uploads',$resumeName);
            $main->resume = $resumeName;


        }
        $main->save();
        session()->flash('success','Main has been updated successfully!');
    }
    public function render()
    {
        return view('livewire.admin.edit-main-component')->layout('layouts.dashboard');
    }
}
