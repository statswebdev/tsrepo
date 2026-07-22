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
    public $status;
    public $statusComment;

    public function mount($estrecordid, $userid)
    {
        $this->query = EstOpera::join('users', 'est_operas.user_id', '=', 'users.id')
        ->join('est_records', 'est_operas.est_record_id', '=', 'est_records.id')
        ->where('est_record_id', $estrecordid)
        ->where('user_id', $userid)
        ->select('est_operas.*', 'users.estname', 'users.email', 'est_records.collectionyear')  // Specify the columns you want
        ->first();  // Use first() since we expect one record
        
        $this->estrecord = EstRecord::findOrFail($estrecordid);
        $this->status = $this->query->status;
    }
    public function updateStatus()
{
    $this->validate([
        'status' => 'required|in:completed,review',
        'statusComment' => 'nullable|string|max:1000',
    ]);

    if (!$this->query) {
        session()->flash('error', 'Record not found or invalid.');
        return;
    }

    $this->query->status = $this->status;
    $this->query->status_comment = filled($this->statusComment)
        ? trim($this->statusComment)
        : null;

    $this->query->save();

    session()->flash(
        'updated',
        'Status and comment updated successfully.'
    );

    return redirect()->route('est.opera.view', [
        'estrecordid' => $this->estrecord->id,
        'userid' => $this->query->user_id,
    ]);
}

    public function render()
    {
        $this->query = EstOpera::join('users', 'est_operas.user_id', '=', 'users.id')
            ->join('est_records', 'est_operas.est_record_id', '=', 'est_records.id')
            ->where('est_record_id', $this->estrecord->id)
            ->where('user_id', $this->query->user_id)
            ->select('est_operas.*', 'users.estname', 'users.email', 'est_records.collectionyear')
            ->first();

        return view('livewire.viewests.view-est-opera', [
            'query' => $this->query,
        ]);
    }
}
