<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;
use Livewire\WithFileUploads;

class Profile extends Component
{

    use WithFileUploads;

    public $username = '';
    public $about = '';
    public $birthday =null;
    public $avatars ;
    public $saved = false;
    public $count = 0;

    public function mount()
    {
        $this->username = auth()->user()->username;
        $this->about = auth()->user()->about;
        $this->birthday = optional(auth()->user()->birthday)->format('m/d/Y');
    }

    public function updatedAvatars()
    {
        $this->validate(['avatars'=>'image|max:1000']);
    }

    public function save()
    {
         dd(request());
        $profileData = $this->validate([

            'username' => 'max:24',
            'about' => 'max:140',
            'birthday' => 'sometimes',
            'avatars' => 'image|max:1000',
        ]);

        $filename = $this->avatars->store('/','avatars');

        auth()->user()->update([
        'username'  => $this->username,
        'about'     => $this->about,
        'birthday'  => $this->birthday,
        'avatars'    => $filename,

        ]);
        // $this->dispatchBrowserEvent('notify','Profile Saved!');

        $this->formReset();
        $this->saved=true;

         session()->flash('notify-saved');
    }

    public function formReset()
    {
        $this->username ="";
        $this->about ="";
        $this->birthday ="";
        $this->avatars ="";

    }

    public function updated($field)
    {
        if($field !== 'saved')
        $this->saved = false;
    }


    public function render()
    {
        return view('livewire.auth.profile');
    }
}
