<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Livewire\Component;
use Illuminate\Validation\Rule;



class EditProfile extends Component
{
    public $user;
    public $email;

    public function mount(){
        $this->user = Auth::user();
        $this->email = Auth::user()->email;
    }

    protected function rules()
        {
        return [
            'email' => [
                'required',
                'email',
                Rule::unique('users', 'email')->ignore(Auth::id()), // Ignore the current user's ID
            ],
        ];
    }

    public function updateProfile()
    {
        $this->validate();

        $this->user->email = $this->email;
        $this->user->save();

        session()->flash('updated', 'Email updated successfully.');
        return redirect()->route('edit.profile'); 

    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }

    public function render()
    {
        return view('livewire.auth.edit-profile');
    }
}
