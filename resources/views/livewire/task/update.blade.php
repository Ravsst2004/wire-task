<section class="max-w-md mt-20 border-2 border-gray-300 rounded-lg mx-auto shadow-md">
    <div class="p-6 bg-white">
        <form wire:submit="update" method="POST">
            @csrf
            @method('PATCH')
            <div class="flex flex-col mb-4">
                <x-label for="title" class="text-white font-medium mb-1"/>
                <x-input name="title" type="text" id="title" wire:model="title" value="{{ $task->title }}" class="form-input"/>
            </div>

            <div class="flex flex-col mb-4">
                <x-label for="description" class="text-white font-medium mb-1"/>
                <x-textarea name="description" id="description" wire:model="description" rows="3" class="form-input">{{ $task->description }}</x-textarea>
            </div>

            <x-form-button class="form-button">
                Update
            </x-form-button>
        </form>
    </div>
</section>
