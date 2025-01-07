<?php

namespace App\Livewire\Ests;

use App\Models\EstInfo;
use Livewire\Component;

class EstinformationEdit extends Component
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

    public function mount(EstInfo $estrecordid)
    {
        $this->user_id = $estrecordid->user_id;
        $this->est_record_id = $estrecordid->est_record_id;
        $this->info_provider = $estrecordid->info_provider;
        $this->contact_number = $estrecordid->contact_number;
        $this->type_organisation = $estrecordid->type_organisation;
        $this->operator_name = $estrecordid->operator_name;
        $this->operator_register = $estrecordid->operator_register;
        $this->owner_one = $estrecordid->owner_one;
        $this->owner_two = $estrecordid->owner_two;
        $this->operator_contact = $estrecordid->operator_contact;
        $this->operator_email = $estrecordid->operator_email;
        $this->government_share = $estrecordid->government_share;
        $this->maldivian_share = $estrecordid->maldivian_share;
        $this->foreign_share = $estrecordid->foreign_share;
        $this->taxpayer_number = $estrecordid->taxpayer_number;
        $this->establishment_regdate = $estrecordid->establishment_regdate;
        $this->bedcapacity = $estrecordid->bedcapacity;
        $this->status = $estrecordid->status;
    }

    public function save()
    {
        $this->validate([
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
            'status' => 'required|string',
        ]);

        EstInfo::where('id', $this->est_record_id)->update([
            'user_id' => $this->user_id,
            'est_record_id' => $this->est_record_id,
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
            'status' => 'completed',
        ]);
        

        session()->flash('success', 'Establishment Information Updated');
        return redirect()->route('dashboard');
    }

    public function render()
    {
        return view('livewire.ests.estinformation-edit');
    }
}
