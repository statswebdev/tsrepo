<?php

namespace App\Livewire\Viewests;

use App\Models\Estfuelconsum;
use Livewire\Component;
use App\Models\EstRecord;

class ViewEstfuelcosumption extends Component
{
    public $estid;
    public $estrecord;
    public $query;
    public function mount($estrecordid, $userid)
    {
        $this->query = Estfuelconsum::join('users', 'estfuelconsums.user_id', '=', 'users.id')
        ->join('est_records', 'estfuelconsums.est_record_id', '=', 'est_records.id')
        ->where('est_record_id', $estrecordid)
        ->where('user_id', $userid)
        ->select('estfuelconsums.*', 'users.estname', 'users.email', 'est_records.collectionyear')  // Specify the columns you want
        ->first();  // Use first() since we expect one record
        
        $this->estrecord = EstRecord::findOrFail($estrecordid);
    }
    public function render()
    {
        return view('livewire.viewests.view-estfuelcosumption');
    }
}
