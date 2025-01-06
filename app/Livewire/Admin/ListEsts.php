<?php

namespace App\Livewire\Admin;

use App\Models\User;
use Livewire\Component;

class ListEsts extends Component
{
    public $estlists = [];
    public function mount(){
        $this->estlists = User::all();
    }
    
    public function render()
    {
        return view('livewire.admin.list-ests');
    }
}
