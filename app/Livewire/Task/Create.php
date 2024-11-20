<?php

namespace App\Livewire\Task;

use App\Models\Task;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Create extends Component
{
    public $title = "";
    public $description = "";
    public function store()
    {
        $validated = $this->validate([
            'title' => 'required',
            'description' => 'required
            ',
        ]);
        $validated['user_id'] = Auth::user()->id;

        Task::create($validated);

        redirect('/task');
    }
    public function render()
    {
        return view('livewire.task.create');
    }
}
