<?php

namespace App\Http\Livewire\Admin;

use App\Models\Dashboard;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditAdminDashboardComponent extends Component
{
    use WithFileUploads;
    public $url;
    public $image;
    public $title;
    public $newimage;
    public $item_id;

    public function mount($id)
    {
        $this->id = $id;
        $admindashboard = Dashboard::where('id',$id)->first();
        $this->title = $admindashboard->title;
        $this->url = $admindashboard->url;
        $this->image = $admindashboard->image;
        $this->item_id = $admindashboard->id;
    }
    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'url'=>'required|url',
            'title'=>'required',
        ]);
        if($this->newimage)
        {
            $this->validateOnly($fields,[
                'newimage'=>'required|mimes:png,jpg,jpeg',
            ]);
        }
    }
    public function updateDashboard()
    {
        $this->validate([
            'url'=>'required|url',
            'title'=>'required',
        ]);
        if($this->newimage)
        {
            $this->validate([
                'newimage'=>'required|mimes:png,jpg,jpeg',
            ]);
        }

        $admindashboard = Dashboard::find($this->item_id);
        $admindashboard->title = $this->title;
        $admindashboard->url = $this->url;
        if($this->newimage)
        {
            unlink('assets/images/dashboard/' . '/' .$admindashboard->image);
            $imageName = Carbon::now()->timestamp. '.'.$this->newimage->extension();
            $this->newimage->storeAs('dashboard',$imageName);
            $admindashboard->image = $imageName;
        }

        $admindashboard->save();
        session()->flash('success','You have updated successfully!');

    }
    public function render()
    {
        return view('livewire.admin.edit-admin-dashboard-component')->layout('layouts.dashboard');
    }
}
