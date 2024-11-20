<?php

namespace App\Livewire\Task;

use App\Models\Task;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\On;
use Livewire\Component;

class Index extends Component
{
    #[On('taskCreated')]

    public function render()
    {
        return view('livewire.task.index', [
            "tasks" => Task::where('user_id', Auth::user()->id)->latest()->get()
        ]);
    }
}
