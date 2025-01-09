<?php

namespace App\Livewire\Viewests;

use Livewire\Component;
use App\Models\EstRecord;
use App\Models\EstEmppro;

class ViewEstEmpprod extends Component
{
    public $estid;
    public $estrecord;
    public $query;
    public function mount($estrecordid, $userid)
    {
        $this->query = EstEmppro::join('users', 'est_emppros.user_id', '=', 'users.id')
        ->join('est_records', 'est_emppros.est_record_id', '=', 'est_records.id')
        ->where('est_record_id', $estrecordid)
        ->where('user_id', $userid)
        ->select('est_emppros.*', 'users.estname', 'users.email', 'est_records.collectionyear')  // Specify the columns you want
        ->first();  // Use first() since we expect one record
        
        $this->estrecord = EstRecord::findOrFail($estrecordid);
    }
    public function render()
    {
        return view('livewire.viewests.view-est-empprod');
    }
}
