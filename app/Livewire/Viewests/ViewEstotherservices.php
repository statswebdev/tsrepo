<?php

namespace App\Livewire\Viewests;

use App\Models\Estotherser;
use Livewire\Component;
use App\Models\EstRecord;

class ViewEstotherservices extends Component
{
    public $estid;
    public $estrecord;
    public $query;
    public function mount($estrecordid, $userid)
    {
        $this->query = Estotherser::join('users', 'estothersers.user_id', '=', 'users.id')
        ->join('est_records', 'estothersers.est_record_id', '=', 'est_records.id')
        ->where('est_record_id', $estrecordid)
        ->where('user_id', $userid)
        ->select('estothersers.*', 'users.estname', 'users.email', 'est_records.collectionyear')  // Specify the columns you want
        ->first();  // Use first() since we expect one record
        
        $this->estrecord = EstRecord::findOrFail($estrecordid);
    }
    public function render()
    {
        return view('livewire.viewests.view-estotherservices');
    }
}
