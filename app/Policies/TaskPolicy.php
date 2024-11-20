<?php

namespace App\Policies;

use App\Models\Task;
use App\Models\User;

class TaskPolicy
{
    /**
     * Create a new policy instance.
     */
    public function update(User $user, Task $task)
    {
        return $task->user_id === $user->id;
    }

    public function view(User $user, Task $task)
    {
        return $task->user_id === $user->id;
    }
}
