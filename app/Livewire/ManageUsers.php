<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\TheUsers;

class ManageUsers extends Component
{

    public $name = '';
    public $email = '';
    public $password = '';
    public ?TheUsers $user ;


    public function editForm($user){
        $this->user = TheUsers::findOrFail($user);
        $this->name = $this->user->name;
        $this->email = $this->user->email;
        $this->password = $this->user->password;
    }





    public function saveEdit(){
        $this->validate();
        $this->user->update(
            $this->only(['name','email','password'])
        );

    }
    public function render()
    {
        return view('livewire.manage-users');
    }
}
