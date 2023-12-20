<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Foundation\Auth\User;

class Clicker extends Component
{
    public function handleClick() {
        dump('clicked');
    }


    public function render()
    {
        $title = 'Test';
        $users = User::all();

        return view('livewire.clicker', [
            'title'=> $title,
            'users'=> $users
        ]);
    }
}
