<?php

namespace App\Livewire\Viewests;

use App\Models\Estelec;
use Livewire\Component;
use App\Models\EstRecord;

class ViewEstelec extends Component
{
    public $estid;
    public $estrecord;
    public $query;
    public function mount($estrecordid, $userid)
    {
        $this->query = Estelec::join('users', 'estelecs.user_id', '=', 'users.id')
        ->join('est_records', 'estelecs.est_record_id', '=', 'est_records.id')
        ->where('est_record_id', $estrecordid)
        ->where('user_id', $userid)
        ->select('estelecs.*', 'users.estname', 'users.email', 'est_records.collectionyear')  // Specify the columns you want
        ->first();  // Use first() since we expect one record
        
        $this->estrecord = EstRecord::findOrFail($estrecordid);
    }

    public function render()
    {
        return view('livewire.viewests.view-estelec');
    }
}
