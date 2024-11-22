<section class="bg-container h-screen border-2 border-gray-300 rounded-lg mx-auto shadow-md flex flex-col ">
    <div>
        <livewire:task.create/>

        <div class="flex flex-col items-center overflow-y-auto">
            @forelse ($tasks as $task)
                <a href="/task/{{ $task->id }}" wire:navigate class="my-2 border rounded p-2 w-full text-white">
                    <h1 class="text-lg">{{ $task->title }}</h1>
                    <p class="text-sm">{{ $task->description }}</p>
                </a>
            @empty
                <p>
                    No tasks
                </p>
            @endforelse
        </div>

        {{ $tasks->links() }}

    </div>
</section>
