<?php

namespace App\View\Components;

use App\Models\User;
use Illuminate\View\Component;

class Register extends Component
{
    /**
     * Get the view / contents that represents the component.
     *
     * @return \Illuminate\View\View
     */
    public User $user;

    protected $rules = [
        'post.title' => 'required',
    ];

    public function update()
    {
        $this->validate();

        $this->post->save();

        session()->flash('message', 'Post successfully updated.');
    }
}