<section class="bg-container h-screen border-2 border-gray-300 rounded-lg mx-auto shadow-md flex flex-col justify-center">
    <div class="p-6 glassmorphism sm:mx-24">
        <form wire:submit="update" method="POST">
            @csrf
            @method('PATCH')
            <div class="flex flex-col my-4">
                <x-label for="title" class="form-label"/>
                <x-input name="title" type="text" id="title" wire:model="title" value="{{ $task->title }}" class="form-input"/>
                <x-error field="title" class="text-sm text-red-600"/>
            </div>

            <div class="flex flex-col mb-4">
                <x-label for="description" class="form-label"/>
                <x-textarea name="description" id="description" wire:model="description" rows="16" class="form-input">{{ $task->description }}</x-textarea>
                <x-error field="description" class="text-sm text-red-600"/>
            </div>

            <x-form-button type="submit" class="form-button">
                Update
            </x-form-button>
        </form>
    </div>
</section>
