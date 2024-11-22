<section class="bg-container border-2 border-gray-300 rounded-lg mx-auto shadow-md flex flex-col justify-center">
    <div class="p-6 glassmorphism sm:mx-24">
        @if($errorMessage)
            <p class="text-sm text-red-600 text-center p-2 rounded border border-red-600">{{ $errorMessage }}</p>
        @endif

        <form wire:submit="login" method="POST">
            @csrf
            <div class="flex flex-col my-4">
                <x-form-label for="email">Email</x-form-label>
                <x-form-input type="email" id="email" wire:model="email">Email</x-form-input>
                <x-form-error name="email"/>
            </div>

            <div class="flex flex-col mb-4">
                <x-form-label for="password">Password</x-form-label>
                <x-form-input type="password" id="password" wire:model="password">Email</x-form-input>
                <x-form-error name="password"/>
            </div>


            <a href="/register" class="hover:underline"> Don't have an account?</a>


            <x-form-button type="submit">Login</x-form-button>
        </form>
    </div>
</section>
