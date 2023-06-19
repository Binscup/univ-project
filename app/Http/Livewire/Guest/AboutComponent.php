<?php

namespace App\Http\Livewire\Guest;

use Livewire\Component;

class AboutComponent extends Component
{
    public function render()
    {
        return view('livewire.guest.about-component')->layout('guest.app');
    }
}
