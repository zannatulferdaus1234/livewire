<?php

namespace App\Http\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Login extends Component
{

    public $email = '';
    public $password = '';

    public function login()
    {
        $data = $this->validate([
            'email'     => 'required|email',
            'password'  => 'required|min:4|max:256',
        ]);

        if (Auth::attempt(['email' => $this->email, 'password' => $this->password])) {
            session()->flash('message', "Welcome to dashboard");
            return redirect('dashboard');
        } else {
            session()->flash('error', 'email or password is wrong.');
            return redirect('login');
        }
    }




    public function render()
    {
        return view('livewire.auth.login');
    }
}
