<?php

namespace App\Livewire\ViewEsts;

use App\Models\Estguest;
use Livewire\Component;
use App\Models\EstRecord;

class ViewEstEmpguest extends Component
{
    public $estid;
    public $estrecord;
    public $query;
    public function mount($estrecordid, $userid)
    {
        $this->query = Estguest::join('users', 'estguests.user_id', '=', 'users.id')
        ->join('est_records', 'estguests.est_record_id', '=', 'est_records.id')
        ->where('est_record_id', $estrecordid)
        ->where('user_id', $userid)
        ->select('estguests.*', 'users.estname', 'users.email', 'est_records.collectionyear')  // Specify the columns you want
        ->first();  // Use first() since we expect one record
        
        $this->estrecord = EstRecord::findOrFail($estrecordid);
    }

    public function render()
    {
        return view('livewire.view-ests.view-est-empguest');
    }
}
