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
    public $status;
    public function mount($estrecordid, $userid)
    {
        $this->query = Estfue::join('users', 'estfues.user_id', '=', 'users.id')
        ->join('est_records', 'estfues.est_record_id', '=', 'est_records.id')
        ->where('est_record_id', $estrecordid)
        ->where('user_id', $userid)
        ->select('estfues.*', 'users.estname', 'users.email', 'est_records.collectionyear')  // Specify the columns you want
        ->first();  // Use first() since we expect one record
        
        $this->estrecord = EstRecord::findOrFail($estrecordid);
        $this->status = $this->query->status;
    }
    public function updateStatus(){

        $this->validate([
            'status' => 'required|in:completed,review',
        ]);

        if ($this->query) {
            $this->query->status = $this->status;
            $this->query->save();
        } else {
            session()->flash('error', 'Record not found or invalid.');
            return;
        }

        session()->flash('updated', 'Status updated successfully.');
        return redirect()->route('est.fuel.view', [
            'estrecordid' => $this->estrecord->id,
            'userid' => $this->query->user_id,
        ]); 
        
    }
    public function render()
    {
        $this->query = Estfue::join('users', 'estfues.user_id', '=', 'users.id')
        ->join('est_records', 'estfues.est_record_id', '=', 'est_records.id')
        ->where('est_record_id', $this->estrecord->id)
        ->where('user_id', $this->query->user_id)
        ->select('estfues.*', 'users.estname', 'users.email', 'est_records.collectionyear')  // Specify the columns you want
        ->first();
        return view('livewire.viewests.view-estfuel', [
            'query' => $this->query,
        ]);
    }
}
