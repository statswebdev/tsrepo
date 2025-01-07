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

    public function mount(EstInfo $model)
    {
        $this->user_id = $model->user_id;
        $this->est_record_id = $model->est_record_id;
        $this->info_provider = $model->info_provider;
        $this->contact_number = $model->contact_number;
        $this->type_organisation = $model->type_organisation;
        $this->operator_name = $model->operator_name;
        $this->operator_register = $model->operator_register;
        $this->owner_one = $model->owner_one;
        $this->owner_two = $model->owner_two;
        $this->operator_contact = $model->operator_contact;
        $this->operator_email = $model->operator_email;
        $this->government_share = $model->government_share;
        $this->maldivian_share = $model->maldivian_share;
        $this->foreign_share = $model->foreign_share;
        $this->taxpayer_number = $model->taxpayer_number;
        $this->establishment_regdate = $model->establishment_regdate;
        $this->bedcapacity = $model->bedcapacity;
        $this->status = $model->status;
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
            'status' => $this->status,
        ]);
        

        session()->flash('message', 'Record updated successfully.');
    }

    public function render()
    {
        return view('livewire.ests.estinformation-edit');
    }
}
