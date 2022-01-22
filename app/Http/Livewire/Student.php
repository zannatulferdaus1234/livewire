<?php

namespace App\Http\Livewire;

use App\Models\Student as ModelsStudent;
use Livewire\Component;

class Student extends Component
{

    public $name;
    // protected $listeners = ['refreshChildren' => '$refresh']; // all refresh

    protected $listeners = ['refreshMummy' => '$refresh']; //only for u and mummy


    public function mount(ModelsStudent $name)
    {
        $this->name = $name;
    }

    public function emitrefreshMummy()
    {
        $this->emitUp('refreshMummy');
    }


    public function render()
    {
        return view('livewire.student');
    }

}
