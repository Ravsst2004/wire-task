<?php

namespace App\Livewire\Task;

use App\Models\Task;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public bool $isCreateFormOpen = false;

    #[On('taskCreated')]
    public function openCreateForm()
    {
        $this->isCreateFormOpen = !$this->isCreateFormOpen;
    }

    public function render()
    {
        return view('livewire.task.index', [
            "tasks" => Task::with('user')
                ->where('user_id', Auth::user()->id)
                ->latest()
                ->paginate(8)
        ]);

    }
}
