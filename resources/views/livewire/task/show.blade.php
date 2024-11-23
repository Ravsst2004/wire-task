<section class="bg-container h-svh border-2 text-white border-gray-300 rounded-lg mx-auto shadow-md flex flex-col space-y-2">
    <h1 class="text-3xl font-bold ">{{ $task->title }}</h1>
    <p>{{ $task->description }}</p>

    <div class="flex items-center gap-4">
        <div x-data="{ open: false }">
            <button @click="open = true" class="bg-red-500 text-white px-4 py-2 rounded-md">
                <x-gmdi-delete class="w-6 h-6"/>
            </button>

            <div x-show="open" class="glassmorphism fixed inset-0 flex items-center justify-center bg-gray-800 bg-opacity-50">
                <div class="glassmorphism rounded-lg shadow-xl p-6">
                    <h2 class="text-xl font-semibold mb-4">Confirm Delete</h2>
                    <p class="mb-4">Are you sure you want to delete this post?</p>
                    <div class="flex justify-end space-x-4">
                        <button @click="open = false" class="px-4 py-2 text-gray-700 bg-gray-200 rounded-md">Cancel
                        </button>
                        <form wire:submit="delete" method="POST">
                            @csrf
                            <button type="submit" class="px-4 py-2 bg-red-500 text-white rounded-md">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <a href="/task/{{ $task->id }}/edit"
           class="bg-blue-500 text-white px-4 py-2 rounded-md w-fit">
            <x-feathericon-edit class="w-6 h-6"/>
        </a>
    </div>

</section>
