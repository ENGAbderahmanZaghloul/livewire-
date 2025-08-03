<?php

namespace App\Livewire;

use App\Models\TheUsers;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Illuminate\Support\Facades\Session;
use Jantinnerezo\LivewireAlert\Facades\LivewireAlert;


class Users extends Component
{
    // #[Validate('required|min:2')]
    // public $name = '';
    // #[Validate('required|min:2|email|unique:users,email')]
    // public $email='';
    // #[Validate('required|min:2')]
    // public $password='';

    public $name = '';
    public $email = '';
    public $password = '';
    public $alert = true;


    // public function onSaveUser(){
    //     LivewireAlert::title('Save User?')
    //     ->text('Are You Sure?')
    //     ->question()
    //     ->withConfirmButton('Save')
    //     ->onConfirm('SaveUser')
    //     ->withCancelButton('Cancel')
    //     ->onDismiss('canceled')
    //     ->timer(9000)
    //     ->show();
    // }
    // public function onCancel(){
    //     LivewireAlert::title('Delete?')
    //     ->withConfirmButton('Delete')
    //     ->withCancelButton('Keep')
    //     ->onDismiss('cancelDelete')
    //     ->show();
    // }

    public function save(){
        $this->validate([
            'name'=>'required|min:2',
            'email'=>'required|min:2|email|unique:the_users,email',
            'password'=>'required|min:2',
        ]);
        TheUsers::create([
            'name'=>$this->name,
            'email'=>$this->email,
            'password'=>$this->password
        ]);
        $this->reset(['name','email','password']);
        // to add alert message we use helper func from session
        session::flash('success', "User Added succesfully");
    }
    public function close(){
            $this->alert = false;
    }

    public function render()
    {
        return view('livewire.users',['users'=>TheUsers::all()]);
    }
}
