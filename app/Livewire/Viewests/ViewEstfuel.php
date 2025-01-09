<?php

namespace App\Livewire\Viewests;

use App\Models\Estfue;
use Livewire\Component;
use App\Models\EstRecord;

class ViewEstfuel extends Component
{
    public $estid;
    public $estrecord;
    public $query;
    public function mount($estrecordid, $userid)
    {
        $this->query = Estfue::join('users', 'estfues.user_id', '=', 'users.id')
        ->join('est_records', 'estfues.est_record_id', '=', 'est_records.id')
        ->where('est_record_id', $estrecordid)
        ->where('user_id', $userid)
        ->select('estfues.*', 'users.estname', 'users.email', 'est_records.collectionyear')  // Specify the columns you want
        ->first();  // Use first() since we expect one record
        
        $this->estrecord = EstRecord::findOrFail($estrecordid);
    }
    public function render()
    {
        return view('livewire.viewests.view-estfuel');
    }
}
