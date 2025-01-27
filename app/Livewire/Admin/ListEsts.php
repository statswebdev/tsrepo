<?php

namespace App\Livewire\Admin;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class ListEsts extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $search;

    public function mount(){
        // Initialization if needed
        $this->search = '';
    }

    public function updatedSearch()
    {
        $this->resetPage();  // Reset to page 1 whenever the search changes
    }

    
    public function render()
    {
    return view('livewire.admin.list-ests', [
        'estlists' => User::search($this->search)->paginate(6),
    ]);
}

}
