<section class="bg-container h-svh border-2 border-gray-300 rounded-lg mx-auto shadow-md flex flex-col ">
    <div>
        <div x-data="{ openCreateForm: false }">
            <x-navigation>
                <button type="button" @click="openCreateForm = true">
                    <x-bi-plus-square-fill class="w-8 h-8"/>
                </button>
            </x-navigation>

            <div x-show="openCreateForm" @click.away="openCreateForm = false" class="relative">
                <livewire:task.create/>
            </div>
        </div>

        <div class="flex flex-col items-center overflow-y-auto space-y-2 mb-2 max-h-[44rem] sm:max-h-[48rem]">
            @forelse ($tasks as $task)
                <div class="border rounded p-2 w-full text-white">
                    <a href="/task/{{ $task->id }}" wire:navigate>
                        <h1 class="text-lg">{{ $task->title }}</h1>
                        <p class="text-sm">{{ $task->description }}</p>
                    </a>
                    <div class="flex space-x-2 mt-2 text-sm">
                        <a href="/task/{{ $task->id }}/edit" class="bg-blue-500 text-white px-4 py-2 rounded-md">
                            Edit
                        </a>
                        <button type="button" wire:click="delete({{ $task->id }})" class="bg-red-500 text-white px-4 py-2 rounded-md">
                            Delete
                        </button>
                    </div>
                </div>
            @empty
                <p>No tasks</p>
            @endforelse
        </div>

        {{ $tasks->links() }}

    </div>
</section>
