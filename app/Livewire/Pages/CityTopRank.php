<?php

namespace App\Livewire\Pages;

use Livewire\Component;

class CityTopRank extends Component
{
    public $data;
    public function mount()
    {
        $this->data = [2, 3, 4, 5, 56];
    }

    public function render()
    {
        return view('livewire.pages.city-top-rank');
    }
}
