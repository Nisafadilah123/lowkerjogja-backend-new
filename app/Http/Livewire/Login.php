<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class Login extends Component
{
    public function render()
    {
        $this->user = User::all();

        return view('livewire.login');
    }

    public function create()
    {
        $this->resetCreateForm();
        $this->openModal();
    }

    public function openModal()
    {
        $this->isModalOpen = true;
    }

    public function closeModal()
    {
        $this->isModalOpen = false;
    }

    private function resetCreateForm(){
        $this->name = '';
        $this->email = '';
        $this->password = '';

    }

    public function store()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',

        ]);

        User::updateOrCreate(['id' => $this->id], [
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password,

        ]);

        session()->flash('message', $this->id ? 'Data updated successfully.' : 'Data added successfully.');

        $this->closeModal();
        $this->resetCreateForm();
    }

}