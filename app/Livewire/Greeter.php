<?php

namespace App\Livewire;

use Livewire\Component;

class Greeter extends Component
{

    public $name ='';
    public $changing = 'hi';
    public $greetingMsg = '';
    public function changeName(){
        $this->reset('greetingMsg');
        $this->validate([
            'name' => 'required|string|min:2',
        ],
    [
        'name.required' => 'Please enter a name',
        'name.string' => 'Name must be a string',
        'name.min' => 'Name must be at least 2 characters long',
    ]
    );

        $this->greetingMsg = $this->changing . ' ' . $this->name;
    }
    public function render()
    {
        return view('livewire.greeter');
    }
}
