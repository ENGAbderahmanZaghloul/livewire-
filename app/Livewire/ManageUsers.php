<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\TheUsers;
use Livewire\Attributes\Validate;

class ManageUsers extends Component
{
    #[Validate('required')]
    public $name = '';
    #[Validate('required')]
    public $email = '';
    #[Validate('required')]
    public $password = '';
    public ?TheUsers $user ;


    public function mount(TheUsers $user){

        $this->name = $user->name;
        $this->email = $user->email;
        $this->password = $user->password;
        $this->user = $user; //there we passs the id or know the user we clicked
    }

    public function saveEdit(){
        $this->validate();
        $this->user->update(
            $this->only(['name','email','password'])
        );
        $this->redirect('/users', navigate: true);

    }

    public function render()
    {
        return view('livewire.manage-users');
    }
}
