<?php

namespace App\Livewire\Pages;

use Livewire\Component;

class CityTopRank extends Component
{
    public $data = [];

    public function mount()
    {
    }

    public function render()
    {
        return view('livewire.pages.city-top-rank');
    }
}
