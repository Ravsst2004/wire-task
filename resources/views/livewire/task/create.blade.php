<section class="border border-gray-300 rounded-lg mx-auto shadow-md flex flex-col">
    <div class="p-4 glassmorphism">
        <form wire:submit="store" method="POST">
            @csrf
            <div class="flex flex-col mb-2">
                <x-form-label for="title">Title</x-form-label>
                <x-form-input type="text" id="title" wire:model="title">Title</x-form-input>
                <x-form-error name="title"/>
            </div>

            <div class="flex flex-col mb-2">
                <x-form-label for="description">Description</x-form-label>
                <textarea id="description" wire:model="description" rows="3"
                          class="border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-white"></textarea>
                <x-form-error name="description"/>
            </div>

            <x-form-button type="submit">Create</x-form-button>
        </form>
    </div>
</section>
