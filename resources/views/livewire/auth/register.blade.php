<section class="bg-container h-screen border-2 border-gray-300 rounded-lg mx-auto shadow-md flex flex-col justify-center">
    <div class="p-6 glassmorphism sm:mx-24">
        <form wire:submit="register" method="POST">
            @csrf
            <div class="flex flex-col mb-4">
                <x-label for="name" class="text-white font-medium mb-1"/>
                <x-input name="name" type="text" id="name" wire:model="name" value="{{ old('name') }}" class="form-input"/>
                <x-error field="name" class="text-sm text-red-600"/>
            </div>

            <div class="flex flex-col mb-4">
                <x-label for="email" class="text-white font-medium mb-1"/>
                <x-input name="email" type="email" id="email" wire:model="email" value="{{ old('email') }}" class="form-input"/>
                <x-error field="email" class="text-sm text-red-600"/>
            </div>

            <div class="flex flex-col mb-4">
                <x-label for="password" class="text-white font-medium mb-1"/>
                <x-input name="password" type="password" id="password" wire:model="password" class="form-input"/>
                <x-error field="password" class="text-sm text-red-600"/>
            </div>

            <div class="flex flex-col mb-4">
                <x-label for="password_confirmation" class="text-white font-medium mb-1"/>
                <x-input name="password" type="password" id="password_confirmation" wire:model="password_confirmation" class="form-input"/>
                <x-error field="password_confirmation" class="text-sm text-red-600"/>
            </div>

            <a href="/login" class="hover:underline">Already have an account?</a>

            <x-form-button class="form-button">
                Register
            </x-form-button>
        </form>
    </div>
</section>
