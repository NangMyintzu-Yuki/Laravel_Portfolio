<?php

namespace App\Http\Livewire\Admin;

use App\Models\About;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddAboutComponent extends Component
{
    use WithFileUploads;
    public $title;
    public $bgtitle;
    public $profile;
    public $date_of_birth;
    public $nationality;
    public $religion;
    public $language;
    public $expert_in;
    public $freelance;
    public $objective;

    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'date_of_birth' => 'required|date_format:Y-m-d|after_or_equal:1920-01-01',
            'nationality' => 'required',
            'title' => 'required',
            'bgtitle' => 'required',
            'religion' => 'required',
            'language' => 'required',
            'expert_in' => 'required',
            'freelance' => 'required',
            'objective' => 'required',
            'profile' => 'required|mimes:jpeg,jpg,png',
        ]);
    }
    public function createAbout()
    {
        $this->validate([
            'date_of_birth' => 'required|date_format:Y-m-d|after_or_equal:1920-01-01',
            'nationality' => 'required',
            'title' => 'required',
            'bgtitle' => 'required',
            'religion' => 'required',
            'language' => 'required',
            'expert_in' => 'required',
            'freelance' => 'required',
            'objective' => 'required',
            'profile' => 'required|mimes:jpeg,jpg,png',
        ]);
        $about = new About();
        $about->title = $this->title;
        $about->bgtitle = $this->bgtitle;
        $about->nationality = $this->nationality;
        $about->religion = $this->religion;
        $about->language = $this->language;
        $about->expert_in = $this->expert_in;
        $about->freelance = $this->freelance;
        $about->objective = $this->objective;
        $about->date_of_birth = $this->date_of_birth;

        $profileName = Carbon::now()->timestamp. '.' .$this->profile->extension();
        $this->profile->storeAs('my_profile',$profileName);
        $about->profile = $profileName;

        $about->save();
        session()->flash('success','Resume has been created successfully!');

    }
    public function render()
    {
        return view('livewire.admin.add-about-component')->layout('layouts.dashboard');
    }
}
