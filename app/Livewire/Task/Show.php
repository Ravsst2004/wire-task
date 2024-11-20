<?php

namespace App\Livewire\Task;

use App\Models\Task;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Show extends Component
{
    public $task;

    public function mount(Task $task)
    {
        if ($task->user_id != Auth::user()->id) {
            abort(403);
        }

        $this->task = $task;
    }

    public function delete()
    {
        $this->task->delete();
        return redirect('/task');
    }

    public function render()
    {
        return view('livewire.task.show', [
            "task" => $this->task
        ]);
    }
}
