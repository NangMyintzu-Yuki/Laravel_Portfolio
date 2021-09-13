<?php

namespace App\Http\Livewire\Admin;

use App\Models\Dashboard;
use Livewire\Component;

class AdminDashboardComponent extends Component
{
    public function deleteAdminDashboard($id)
    {
        $dashboard = Dashboard::find($id);
        $dashboard->delete();
        session()->flash('success','Video has been deleted successfully!');
    }
    public function render()
    {
        $dashboardItems = Dashboard::all();
        return view('livewire.admin.admin-dashboard-component',['dashboardItems'=>$dashboardItems])->layout('layouts.dashboard');
    }
}
