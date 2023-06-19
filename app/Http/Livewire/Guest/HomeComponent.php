<?php

namespace App\Http\Livewire\Guest;

use Livewire\Component;

class HomeComponent extends Component
{
    public function render()
    {
        return view('livewire.guest.home-component')->layout('guest.app');
    }
}
