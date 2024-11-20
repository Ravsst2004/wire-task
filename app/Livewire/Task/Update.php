<?php

namespace App\Livewire\Task;

use App\Models\Task;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Update extends Component
{
    public $task;
    public $title;
    public $description;

    public function mount(Task $task)
    {
        if ($task->user_id != Auth::user()->id) {
            abort(403);
        }

        $this->task = $task;
        $this->title = $task->title;
        $this->description = $task->description;
    }

    public function update()
    {
        $validated = $this->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $this->task->update($validated);

        return redirect('/task/' . $this->task->id);
    }

    public function render()
    {
        return view('livewire.task.update', [
            "task" => $this->task
        ]);
    }
}
