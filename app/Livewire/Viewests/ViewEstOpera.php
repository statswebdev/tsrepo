<?php

namespace App\Livewire\Viewests;

use App\Models\EstOpera;
use App\Models\EstRecord;
use App\Models\User;
use Livewire\Component;

class ViewEstOpera extends Component
{
    public $estid;
    public $estrecord;
    public $query;
    public function mount($estrecordid, $userid)
    {
        $this->query = EstOpera::join('users', 'est_operas.user_id', '=', 'users.id')
        ->join('est_records', 'est_operas.est_record_id', '=', 'est_records.id')
        ->where('est_record_id', $estrecordid)
        ->where('user_id', $userid)
        ->select('est_operas.*', 'users.estname', 'users.email', 'est_records.collectionyear')  // Specify the columns you want
        ->first();  // Use first() since we expect one record
        
        $this->estrecord = EstRecord::findOrFail($estrecordid);
    }

    public function render()
    {
        return view('livewire.viewests.view-est-opera');
    }
}
