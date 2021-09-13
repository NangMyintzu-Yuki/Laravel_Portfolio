<?php

namespace App\Http\Livewire;

use App\Models\Main;
use Livewire\Component;
use DB;

class DownloadComponent extends Component
{

    public function render()
    {
        $mains = Main::first();
        return view('livewire.download-component',['mains'=>$mains])->layout('layouts.base');
    }
}
