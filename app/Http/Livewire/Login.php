<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class Login extends Component
{
    public $data;
    public function render()
    {
        $this->data = User::all();
        return view('livewire.login');
    }
}