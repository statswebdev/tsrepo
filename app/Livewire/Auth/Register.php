<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;

class Register extends Component
{
    public $estname;
    public $esttype;
    public $email;
    public $password;
    public $password_confirmation;

    public function register()
    {
        $this->validate([
            'estname' => 'required|min:5',
            'esttype' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed|min:6',
        ]);

        $user = User::create([
            'estname' => $this->estname,
            'esttype' => $this->esttype,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);
        session()->flash('success', 'Account Created successfully');
        return redirect()->route('login');
        //return redirect('/')->with('success', 'Registration successful');
    }

    public function render()
    {
        return view('livewire.auth.register');
    }
}
