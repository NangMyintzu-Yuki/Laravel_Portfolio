<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Service;
class ServiceComponent extends Component
{
    public function deleteService($id)
    {
        $service = Service::find($id);
        $service->delete();
        session()->flash('success','Service has been deleted successfully!');
    }
    public function render()
    {
        $services = Service::all();
        return view('livewire.admin.service-component',['services'=>$services])->layout('layouts.dashboard');
    }
}
