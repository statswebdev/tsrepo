<?php

namespace App\Livewire\Viewests;

use App\Models\EstInfo;
use App\Models\EstRecord;
use Livewire\Component;

class ViewEstInfo extends Component
{
    public $estid;
    public $estrecord;
    public $query;
    public $status;

    public function mount($estrecordid, $userid)
    {
        $this->query = EstInfo::join('users', 'est_infos.user_id', '=', 'users.id')
        ->join('est_records', 'est_infos.est_record_id', '=', 'est_records.id')
        ->where('est_record_id', $estrecordid)
        ->where('user_id', $userid)
        ->select('est_infos.*', 'users.estname', 'users.email', 'est_records.collectionyear')
        ->first();
        
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
        return redirect()->route('est.info.view', [
            'estrecordid' => $this->estrecord->id,
            'userid' => $this->query->user_id,
        ]); 
        
    }

    public function render()
    {
        $this->query = EstInfo::join('users', 'est_infos.user_id', '=', 'users.id')
            ->join('est_records', 'est_infos.est_record_id', '=', 'est_records.id')
            ->where('est_record_id', $this->estrecord->id)
            ->where('user_id', $this->query->user_id)
            ->select('est_infos.*', 'users.estname', 'users.email', 'est_records.collectionyear')
            ->first();
            
        return view('livewire.viewests.view-est-info', [
            'query' => $this->query,
        ]);

    }
}
