<?php

namespace App\Http\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Register extends Component
{
    public $email = '';
    public $password = '';
    public $passwordConfirmation = '';

    public function updatedEmail()
    {
        $this->validate([
            'email'=>'unique:users',
        ]);
    }

    public function register()
    {

        $data = $this->validate([
            'email'     => 'required|email|unique:users',
            'password'  => 'required|min:4|max:256|same:passwordConfirmation',
        ]);

        $user = User::create([
            'email'     => $data['email'] ,
            'password'  => Hash::make($data['password'] ),
        ]);

        Auth::login($user);

        return redirect('dashboard');
    }


    public function render()
    {
        return view('livewire.auth.register');
    }
}
