<section class="absolute z-50 w-full border border-gray-300 rounded-lg mx-auto shadow-md flex flex-col">
    <div class="p-4 glassmorphism">
        <form wire:submit="store" method="POST">
            @csrf
            <div class="flex flex-col mb-2">
                <x-label for="title"/>
                <x-input name="title" type="text" id="title" wire:model="title" class="form-input"/>
                <x-form-error name="title"/>
            </div>

            <div class="flex flex-col mb-2">
                <x-label for="description"/>
                <x-textarea name="about" id="description" wire:model="description" rows="3" class="form-input"/>
                <x-form-error name="description"/>
            </div>

            <x-form-button class="form-button">
                Create
            </x-form-button>
        </form>
    </div>
</section>
