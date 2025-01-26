<?php

namespace App\Livewire\Ests;

use App\Models\EstOpera;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class EstablishmentOperationEdit extends Component
{
    public $user_id;
    public $months_operated = [];
    public $rooms_yearend;
    public $beds_yearend;
    public $roomnights_sold;
    public $bednights_sold;
    public $roomrate_annual;
    public $status = "submitted";

    protected $rules = [
        'months_operated' => 'required',
        'rooms_yearend' => 'required',
        'beds_yearend' => 'required',
        'roomnights_sold' => 'required',
        'bednights_sold' => 'required',
        'roomrate_annual' => 'required',
    ];

    public function mount()
    {
        // Get the authenticated user's ID
        $this->user_id = Auth::id();

        // Retrieve the record from the estopera table for the authenticated user
        $est_opera = EstOpera::where('user_id', $this->user_id)->first();

        if ($est_opera) {
            $this->months_operated = json_decode($est_opera->months_operated, true) ?? [];
            $this->rooms_yearend = $est_opera->rooms_yearend;
            $this->beds_yearend = $est_opera->beds_yearend;
            $this->roomnights_sold = $est_opera->roomnights_sold;
            $this->bednights_sold = $est_opera->bednights_sold;
            $this->roomrate_annual = $est_opera->roomrate_annual;
        }
    }

    public function save()
    {
        $this->validate([
            'months_operated' => 'required',
            'rooms_yearend' => 'required|integer|max:2500',
            'beds_yearend' => 'required|integer|max:2500',
            'roomnights_sold' => 'required',
            'bednights_sold' => 'required',
            'roomrate_annual' => 'required|integer|max:100000',
        ]);

        if ($this->roomnights_sold > $this->rooms_yearend * 365) {
            $this->addError('roomnights_sold', 'The total room nights should not exceed the total number of rooms multiplied by 365');
            return;
        }

        if ($this->bednights_sold > $this->beds_yearend * 365) {
            $this->addError('bednights_sold', 'The total bed nights sold should not exceed the total number of beds multiplied by 365');
            return;
        }


        // Retrieve the estopera record for the authenticated user
        $est_opera = EstOpera::where('user_id', $this->user_id)->first();

        if ($est_opera) {
            // Update the fields in the estopera record
            $est_opera->update([
                'months_operated' => json_encode($this->months_operated),
                'rooms_yearend' => $this->rooms_yearend,
                'beds_yearend' => $this->beds_yearend,
                'roomnights_sold' => $this->roomnights_sold,
                'bednights_sold' => $this->bednights_sold,
                'roomrate_annual' => $this->roomrate_annual,
                'status' => $this->status,
            ]);
        }

        session()->flash('success', 'Operations Information Updated');
        return redirect()->route('dashboard');
    }

    public function render()
    {
        return view('livewire.ests.establishment-operation-edit');
    }
}
