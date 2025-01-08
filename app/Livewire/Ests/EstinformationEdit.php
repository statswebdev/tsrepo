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
        $this->user_id = Auth::user();

        $est_record_id = EstRecord::with('estinfo')->findOrFail($estrecordid);

        // $this->estrecords = EstRecord::with([
        //     'estinfo' => function($query) { $query->where('est_record_id', $estrecordid); },
        // ])->get();

        //dd($this->est_record_id);

        //$this->user_id = $estrecordid->user_id;
        // $this->est_record_id = $estrecordid->est_record_id;
        $this->info_provider = $est_record_id->estinfo->info_provider;
        $this->contact_number = $est_record_id->estinfo->contact_number;
        $this->type_organisation = $est_record_id->estinfo->type_organisation;
        $this->operator_name = $est_record_id->estinfo->operator_name;
        $this->operator_register = $est_record_id->estinfo->operator_register;
        $this->owner_one = $est_record_id->estinfo->owner_one;
        $this->owner_two = $est_record_id->estinfo->owner_two;
        $this->operator_contact = $est_record_id->estinfo->operator_contact;
        $this->operator_email = $est_record_id->estinfo->operator_email;
        $this->government_share = $est_record_id->estinfo->government_share;
        $this->maldivian_share = $est_record_id->estinfo->maldivian_share;
        $this->foreign_share = $est_record_id->estinfo->foreign_share;
        $this->taxpayer_number = $est_record_id->estinfo->taxpayer_number;
        $this->establishment_regdate = $est_record_id->estinfo->establishment_regdate;
        $this->bedcapacity = $est_record_id->estinfo->bedcapacity;
        $this->status = $est_record_id->estinfo->status;
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
        

        session()->flash('success', 'Information Updated');
        return redirect()->route('dashboard');
    }

    public function render()
    {
        return view('livewire.ests.estinformation-edit');
    }
}
