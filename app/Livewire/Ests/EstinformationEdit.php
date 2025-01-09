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
    public $status = "updated";

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

        $est_record = EstRecord::with('estinfo')->findOrFail($estrecordid);

        if ($est_record->estinfo) {
            $this->info_provider = $est_record->estinfo->info_provider;
            $this->contact_number = $est_record->estinfo->contact_number;
            $this->type_organisation = $est_record->estinfo->type_organisation;
            $this->operator_name = $est_record->estinfo->operator_name;
            $this->operator_register = $est_record->estinfo->operator_register;
            $this->owner_one = $est_record->estinfo->owner_one;
            $this->owner_two = $est_record->estinfo->owner_two;
            $this->operator_contact = $est_record->estinfo->operator_contact;
            $this->operator_email = $est_record->estinfo->operator_email;
            $this->government_share = $est_record->estinfo->government_share;
            $this->maldivian_share = $est_record->estinfo->maldivian_share;
            $this->foreign_share = $est_record->estinfo->foreign_share;
            $this->taxpayer_number = $est_record->estinfo->taxpayer_number;
            $this->establishment_regdate = $est_record->estinfo->establishment_regdate;
            $this->bedcapacity = $est_record->estinfo->bedcapacity;
            $this->status = $est_record->estinfo->status;
        }

        $this->est_record_id = $estrecordid;
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

        $estRecord = EstRecord::with('estinfo')->findOrFail($this->est_record_id);

        if ($estRecord->estinfo) {
            // Update the fields in the related `estinfo` model
            $estRecord->estinfo->update([
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
            'status' => 'submitted',
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
