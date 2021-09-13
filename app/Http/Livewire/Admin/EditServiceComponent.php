<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Service;

class EditServiceComponent extends Component
{
    public $title;
    public $bgtitle;
    public $short_description;
    public $name;
    public $icon;
    public $service_description;
    public $service_id;

    public function mount($id)
    {
        $this->id = $id;
        $service = Service::where('id',$id)->first();
        $this->title = $service->title;
        $this->bgtitle = $service->bgtitle;
        $this->short_description = $service->short_description;
        $this->name = $service->name;
        $this->icon = $service->icon;
        $this->service_description = $service->service_description;
        $this->service_id = $service->id;

    }
    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'title' => 'required',
            'bgtitle' => 'required',
            'short_description' => 'required',
            'name' => 'required',
            'icon' => 'required',
            'service_description' => 'required',
        ]);
    }
    public function updateService()
    {
        $this->validate([
            'title' => 'required',
            'bgtitle' => 'required',
            'short_description' => 'required',
            'name' => 'required',
            'icon' => 'required',
            'service_description' => 'required',
        ]);
            $service = Service::find($this->service_id);
            $service->title = $this->title;
            $service->bgtitle = $this->bgtitle;
            $service->short_description = $this->short_description;
            $service->name = $this->name;
            $service->icon = $this->icon;
            $service->service_description = $this->service_description;
            $service->save();
            session()->flash('success','Service has been updated successfully!');

    }
    public function render()
    {
        return view('livewire.admin.edit-service-component')->layout('layouts.dashboard');
    }
}
