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

    #[On('taskCreated')]
    public function delete($taskId)
    {
        Task::findOrFail($taskId)->delete();
        $this->dispatch('taskDeleted');
    }

    public function render()
    {
        $tasks = Task::with('user')
            ->where('user_id', Auth::id())
            ->latest()
            ->paginate(8);

        return view('livewire.task.index', compact('tasks'));
    }
}
