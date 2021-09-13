<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Service;

class AddServiceComponent extends Component
{
    public $title;
    public $bgtitle;
    public $short_description;
    public $name;
    public $icon;
    public $service_description;

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
    public function createService()
    {
        $this->validate([
            'title' => 'required',
            'bgtitle' => 'required',
            'short_description' => 'required',
            'name' => 'required',
            'icon' => 'required',
            'service_description' => 'required',
        ]);
            $service = new Service();
            $service->title = $this->title;
            $service->bgtitle = $this->bgtitle;
            $service->short_description = $this->short_description;
            $service->name = $this->name;
            $service->icon = $this->icon;
            $service->service_description = $this->service_description;
            $service->save();
            session()->flash('success','Service has been created successfully!');

    }
    public function render()
    {
        return view('livewire.admin.add-service-component')->layout('layouts.dashboard');
    }
}
