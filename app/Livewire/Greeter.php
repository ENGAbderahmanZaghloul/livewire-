<?php

namespace App\Livewire;

use Livewire\Component;

class Greeter extends Component
{
    public $framework = 'laravel';
    public function render()
    {
        return view('livewire.greeter',['name'=>"livewire"]);
    }
}
