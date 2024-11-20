<?php

namespace App\Livewire\Components\Header;

use Livewire\Component;

class NavLink extends Component
{
    public $title;
    public $active;
    public $href;

    public function mount($active = false, $href = '', $title)
    {
        $this->title = $title;
        $this->active = $active;
        $this->href = $href;
    }
    public function render()
    {
        return view('livewire.components.header.nav-link');
    }
}
