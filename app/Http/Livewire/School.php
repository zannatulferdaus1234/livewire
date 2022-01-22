<?php

namespace App\Http\Livewire;

use App\Models\Student;
use Livewire\Component;

class School extends Component
{
    public $names ;
    protected $listeners = ['refreshMummy' => '$refresh']; //only for u and mummy

    public function mount()
    {
        $this->names = Student::all();
    }

    public function removeName($name)
    {
        Student::whereName($name)->first()->delete();
        $this->names = Student::all();
    }

    public function refreshChildren()  //refresh parent and child
    {
        $this->emit('refreshChildren');
    }

    public function render()
    {
        return view('livewire.school');
    }
}
