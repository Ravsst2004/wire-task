<?php

namespace App\Livewire\Components\Header;

use Livewire\Component;

class Navbar extends Component
{
    public $isMenuOpen = false;
    public function toggleMenuOpen()
    {
        $this->isMenuOpen = !$this->isMenuOpen;
    }
    public function render()
    {
        return view('livewire.components.header.navbar');
    }
}
