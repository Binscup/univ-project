<?php

namespace App\Http\Livewire\Guest;

use Livewire\Component;

class GalerryComponent extends Component
{
    public function render()
    {
        return view('livewire.guest.galerry-component')->layout('guest.app');
    }
}
