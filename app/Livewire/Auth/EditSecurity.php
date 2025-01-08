<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;


class EditSecurity extends Component
{
    public $user;
    public $current_pass;
    public $password;
    public $password_confirmation;

    protected $rules = [
        'current_pass' => 'required',
        'password' => 'required|min:6|confirmed',
    ];

    public function mount(){
        $this->user = Auth::user();
    }

    public function updateSecurity(){

        $this->validate();

        //$user = Auth::user();

        if (!Hash::check($this->current_pass, $this->user->password)) {
            $this->addError('current_pass', 'The provided password does not match your current password.');
            return;
        }

        $this->user->password = Hash::make($this->password);
        $this->user->save();

        session()->flash('updated', 'Password updated successfully.');
        return redirect()->route('edit.security'); // Redirect to a desired route
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
        return view('livewire.auth.edit-security');
    }
}
