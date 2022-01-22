<?php

namespace App\Http\Livewire;

use Livewire\Component;

class HelloWorld extends Component
{
    public $name="Jelly";
    public $loud = false;
    public $greeting = ['Hello'];

    public $names = "Chikchik";

    public function resetName($name = 'Ben')
    {
        $this->name = $name;
    }


    public function mount($names)
    {
        $this->names=$names;
    }


    public function render()
    {
        return view('livewire.hello-world');
    }

    public function hydrate()  //updated/updatedNames
    {
        $this->names= strtoupper($this->names);
    }
}
