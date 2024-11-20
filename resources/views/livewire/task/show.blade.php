<div>
  <h1>{{ $task->title }}</h1>
  <p>{{ $task->description }}</p>

  <form wire:submit="delete" method="POST">
    @csrf
    <button type="submit">Delete</button>
  </form>

  <a href="/task/{{ $task->id }}/edit">Edit</a>

</div>
