<div>
  <livewire:task.create />

  <ul>
    @forelse ($tasks as $task)
      <li><a href="/task/{{ $task->id }}" wire:navigate>{{ $task->title }}</a></li>
    @empty
      <li>No tasks</li>
    @endforelse
  </ul>
</div>
