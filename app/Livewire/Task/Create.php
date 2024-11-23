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
            'title' => 'required|max:255',
            'description' => 'required|max:1000',
        ]);
        $validated['user_id'] = Auth::user()->id;

        $task = Task::create($validated);

        $this->dispatch('taskCreated', $task->id);
        $this->reset();
    }

    public function render()
    {
        return view('livewire.task.create');
    }
}
