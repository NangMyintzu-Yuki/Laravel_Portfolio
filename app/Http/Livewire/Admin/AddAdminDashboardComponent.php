<?php

namespace App\Http\Livewire\Admin;

use App\Models\Dashboard;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddAdminDashboardComponent extends Component
{
    use WithFileUploads;
    public $url;
    public $image;
    public $title;

    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'url'=>'required|url',
            'image'=>'required|mimes:png,jpg',
            'title'=>'required',
        ]);
    }
    public function createDashboard()
    {
        $this->validate([
            'url'=>'required|url',
            'image'=>'required|mimes:png,jpg',
            'title'=>'required',
        ]);
        $dashboard = new Dashboard();
        $dashboard->url = $this->url;
        $dashboard->title = $this->title;

        $imageName = Carbon::now()->timestamp. '.' .$this->image->extension();
        $this->image->storeAs('dashboard',$imageName);
        $dashboard->image = $imageName;

        $dashboard->save();
        session()->flash('success','You have created successfully!');

    }
    public function render()
    {
        return view('livewire.admin.add-admin-dashboard-component')->layout('layouts.dashboard');
    }
}
