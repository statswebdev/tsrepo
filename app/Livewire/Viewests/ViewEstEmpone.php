<?php

namespace App\Livewire\ViewEsts;

use App\Models\EstEmpone;
use Livewire\Component;
use App\Models\EstRecord;

class ViewEstEmpone extends Component
{
    public $estid;
    public $estrecord;
    public $query;
    public $status;
    public function mount($estrecordid, $userid)
    {
        $this->query = EstEmpone::join('users', 'est_empones.user_id', '=', 'users.id')
        ->join('est_records', 'est_empones.est_record_id', '=', 'est_records.id')
        ->where('est_record_id', $estrecordid)
        ->where('user_id', $userid)
        ->select('est_empones.*', 'users.estname', 'users.email', 'est_records.collectionyear')  // Specify the columns you want
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
        return redirect()->route('est.empone.view', [
            'estrecordid' => $this->estrecord->id,
            'userid' => $this->query->user_id,
        ]); 
        
    }
    public function render()
    {
        $this->query = EstEmpone::join('users', 'est_empones.user_id', '=', 'users.id')
        ->join('est_records', 'est_empones.est_record_id', '=', 'est_records.id')
        ->where('est_record_id', $this->estrecord->id)
        ->where('user_id', $this->query->user_id)
        ->select('est_empones.*', 'users.estname', 'users.email', 'est_records.collectionyear')  // Specify the columns you want
        ->first();
        return view('livewire.view-ests.view-est-empone', [
            'query' => $this->query,
        ]);
    }
}
