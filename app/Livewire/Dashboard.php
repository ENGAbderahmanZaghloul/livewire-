<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\Attributes\Lazy;
#[Lazy]
#[Layout('components.layouts.admin')] //=> if the comp will be another layout we add the layout path by this way
#[Title('Dashboard')]
class Dashboard extends Component
{
    public function mount (){
        sleep(3);
    }
    public function render()
    {
        return view('livewire.dashboard');
    }
}
