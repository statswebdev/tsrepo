<?php

namespace App\Livewire\Ests;

use App\Models\EstInfo;
use App\Models\EstRecord;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;


class EstinformationEdit extends Component
{
    public $estrecords;
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

    protected $rules = [
        'info_provider' => 'required|string',
            'contact_number' => 'required|string',
            'type_organisation' => 'required|string',
            'operator_name' => 'required|string',
            'operator_register' => 'required|string',
            'owner_one' => 'required|string',
            'owner_two' => 'nullable|string',
            'operator_contact' => 'required|string',
            'operator_email' => 'required|email',
            'government_share' => 'required|integer',
            'maldivian_share' => 'required|integer',
            'foreign_share' => 'required|integer',
            'taxpayer_number' => 'required|string',
            'establishment_regdate' => 'required|date',
            'bedcapacity' => 'required|integer',
    ];

    public function mount($estrecordid)
    {
        $this->user_id = Auth::id();

        // Retrieve the record from the info table for the authenticated user
        $est_info = EstInfo::where('user_id', $this->user_id)->first();

        if ($est_info) {
            $this->info_provider = $est_info->info_provider;
            $this->contact_number = $est_info->contact_number;
            $this->type_organisation = $est_info->type_organisation;
            $this->operator_name = $est_info->operator_name;
            $this->operator_register = $est_info->operator_register;
            $this->owner_one = $est_info->owner_one;
            $this->owner_two = $est_info->owner_two;
            $this->operator_contact = $est_info->operator_contact;
            $this->operator_email = $est_info->operator_email;
            $this->government_share = $est_info->government_share;
            $this->maldivian_share = $est_info->maldivian_share;
            $this->foreign_share = $est_info->foreign_share;
            $this->taxpayer_number = $est_info->taxpayer_number;
            $this->establishment_regdate = $est_info->establishment_regdate;
            $this->bedcapacity = $est_info->bedcapacity;
        }
        
    }

    public function save()
    {
        $this->validate([
            'info_provider' => 'required|string|min:5',
            'contact_number' => 'required|integer|regex:/^[97][0-9]{6}$/',
            'type_organisation' => 'required|string',
            'operator_name' => 'required|string',
            'operator_register' => 'required|string',
            'owner_one' => 'required|string|min:5',
            'owner_two' => 'nullable|string|min:5',
            'operator_contact' => 'required|integer|regex:/^[34697][0-9]{6}$/',
            'operator_email' => 'required|email',
            'government_share' => 'required|integer|max:100',
            'maldivian_share' => 'required|integer|max:100',
            'foreign_share' => 'required|integer|max:100',
            'taxpayer_number' => 'required|string',
            'establishment_regdate' => 'required|date',
            'bedcapacity' => 'required|integer|max:1500',
        ]);

        if (($this->government_share + $this->maldivian_share + $this->foreign_share) > 100) {
            $this->addError('total_share', 'The total share value must not exceed 100 %.');
            return;
        }

        //$estRecord = EstRecord::with('estinfo')->findOrFail($this->est_record_id);
        $est_info = EstInfo::where('user_id', $this->user_id)->first();

       

        if ($est_info) {
            // Update the fields in the estopera record
            $est_info->update([
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
        }
        
        

        session()->flash('success', 'Establishment Information Updated');
        return redirect()->route('dashboard');
    }

    public function render()
    {
        return view('livewire.ests.estinformation-edit');
    }
}
