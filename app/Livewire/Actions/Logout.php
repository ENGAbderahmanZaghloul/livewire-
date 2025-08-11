<?php

namespace App\Livewire\Actions;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class Logout extends Component
{
    /**
     * Log the current user out of the application.
     */
    public function logoutFn()
    {
        Auth::logout();
        return redirect()->route('login');
    }

    public function render()
    {

        return view('livewire.auth.login');
    }
}
