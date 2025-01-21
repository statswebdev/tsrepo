<?php

namespace App\Livewire\Ests;

use App\Models\EstInfo;
use Livewire\Component;
use App\Models\EstRecord;
use Illuminate\Support\Facades\Auth;

class EstInformation extends Component
{
    public $user_id;
    public $est_record_id;
    public $info_provider;
    public $contact_number;
    public $type_organisation;
    public $operator_name;
    public $operator_register;
    public $owner_one;
    public $owner_two;
    public $operator_contact;
    public $operator_email;
    public $government_share;
    public $maldivian_share;
    public $foreign_share;
    public $taxpayer_number;
    public $establishment_regdate;
    public $bedcapacity;
    public $status = "submitted";

    public function mount($estrecordid)
    {
        $this->user_id = Auth::id();
        $this->est_record_id = EstRecord::findOrFail($estrecordid);
        
        //dd($est_record_id->id);
    }
    public function submitRecord()
    {
        $this->validate([
            'info_provider' => 'required|string|min:5',
            'contact_number' => 'required|integer|regex:/^[97][0-9]{6}$/',
            'type_organisation' => 'required|string',
            'operator_name' => 'required|string',
            'operator_register' => [
                                    'required',
                                    'string',
                                    'regex:/^(SP|C)-\d{4}\/\d{4}$/',
                                    ],
            'owner_one' => 'required|string|min:5',
            'owner_two' => 'nullable|string|min:5',
            'operator_contact' => 'required|integer|regex:/^[34697][0-9]{6}$/',
            'operator_email' => 'required|email',
            'government_share' => 'required|integer|max:100',
            'maldivian_share' => 'required|integer|max:100',
            'foreign_share' => 'required|integer|max:100',
            'taxpayer_number' => [
                'required',
                'string',
                'regex:/^\d{7}GST\d{3}$/',
            ],
            'establishment_regdate' => 'required|date',
            'bedcapacity' => 'required|integer|max:1500',
        ]);

        // Custom validation for the sum of shares
        if (($this->government_share + $this->maldivian_share + $this->foreign_share) > 100) {
            $this->addError('total_share', 'The total share value must not exceed 100 %.');
            return;
        }

        EstInfo::create([
            'user_id' => $this->user_id,
            'est_record_id' => $this->est_record_id->id,
            'info_provider' => $this->info_provider,
            'contact_number' => $this->contact_number,
            'type_organisation' => $this->type_organisation,
            'operator_name' => $this->operator_name,
            'operator_register' => $this->operator_register,
            'owner_one' => $this->owner_one,
            'owner_two' => $this->owner_two,
            'operator_contact' => $this->operator_contact,
            'operator_email' => $this->operator_email,
            'government_share' => $this->government_share,
            'maldivian_share' => $this->maldivian_share,
            'foreign_share' => $this->foreign_share,
            'taxpayer_number' => $this->taxpayer_number,
            'establishment_regdate' => $this->establishment_regdate,
            'bedcapacity' => $this->bedcapacity,
            'status' => $this->status,
        ]);

        session()->flash('success', 'Establishment Information Submitted successfully');
        return redirect()->route('dashboard');
    }

    public function render()
    {
        return view('livewire.ests.est-information');
    }
}
