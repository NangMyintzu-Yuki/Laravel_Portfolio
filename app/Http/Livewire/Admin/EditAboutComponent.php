<?php

namespace App\Http\Livewire\Admin;

use App\Models\About;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditAboutComponent extends Component
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
    public $new_profile;
    public $about_id;

    public function mount($id)
    {
        $this->id = $id;
        $about = About::where('id',$id)->first();
        $this->title = $about->title;
        $this->bgtitle = $about->bgtitle;
        $this->profile = $about->profile;
        $this->date_of_birth = $about->date_of_birth;
        $this->nationality = $about->nationality;
        $this->religion = $about->religion;
        $this->language = $about->language;
        $this->expert_in = $about->expert_in;
        $this->freelance = $about->freelance;
        $this->objective = $about->objective;
        $this->profile = $about->profile;
        $this->about_id = $about->id;
    }
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
        ]);
        if($this->new_profile)
        {
            $this->validateOnly($fields,[
                'new_profile' => 'required|mimes:jpeg,jpg,png',
            ]);
        }

    }
    public function editAbout()
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
        ]);
        if($this->new_profile)
        {
            $this->validate([
                'new_profile' => 'required|mimes:jpeg,jpg,png',
            ]);
        }

        $about = About::find($this->about_id);
        $about->title = $this->title;
        $about->bgtitle = $this->bgtitle;
        $about->profile = $this->profile;
        $about->date_of_birth = $this->date_of_birth;
        $about->nationality = $this->nationality;
        $about->religion = $this->religion;
        $about->language = $this->language;
        $about->expert_in = $this->expert_in;
        $about->freelance = $this->freelance;
        $about->objective = $this->objective;
        if($this->new_profile)
        {
            unlink('assets/images/my_profile' . '/' . $about->profile);
            $profileName = Carbon::now()->timestamp. '.' . $this->new_profile->extension();
            $this->new_profile->storeAs('my_profile',$profileName);
            $about->profile = $profileName;
        }
        $about->save();
        session()->flash('success','Resume has been  updated successfully!');

    }
    public function render()
    {
        return view('livewire.admin.edit-about-component')->layout('layouts.dashboard');
    }
}
