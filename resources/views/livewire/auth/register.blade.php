<section class="bg-container h-screen border-2 border-gray-300 rounded-lg mx-auto shadow-md flex flex-col justify-center">
    <div class="p-6 glassmorphism sm:mx-24">
        <form wire:submit="register" method="POST">
            @csrf
            <div class="flex flex-col mb-4">
                <x-form-label for="name">Name</x-form-label>
                <x-form-input type="text" id="name" wire:model="name" value="{{ old('name') }}">Name</x-form-input>
                <x-form-error name="name"/>
            </div>

            <div class="flex flex-col mb-4">
                <x-form-label for="email">Email</x-form-label>
                <x-form-input type="email" id="email" wire:model="email" value="{{ old('email') }}">Email</x-form-input>
                <x-form-error name="email"/>
            </div>

            <div class="flex flex-col mb-4">
                <x-form-label for="password">Password</x-form-label>
                <x-form-input type="password" id="password" wire:model="password">Password</x-form-input>
                <x-form-error name="password"/>
            </div>

            <div class="flex flex-col mb-4">
                <x-form-label for="password_confirmation">Confirm Password</x-form-label>
                <x-form-input type="password" id="password_confirmation" wire:model="password_confirmation">
                    Confirm Password
                </x-form-input>
                <x-form-error name="password_confirmation"/>
            </div>

            <a href="/login" class="hover:underline">Already have an account?</a>

            <x-form-button type="submit">Register</x-form-button>
        </form>
    </div>
</section>
