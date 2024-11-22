<section class="bg-container h-screen border-2 border-gray-300 rounded-lg mx-auto shadow-md flex flex-col justify-center">
    <div class="p-6 glassmorphism sm:mx-24">
        <x-alert class="bg-red-400 text-red-50 p-2 rounded"/>

        <form wire:submit="login" method="POST">
            @csrf
            <div class="flex flex-col my-4">
                <x-label for="email" class="text-white font-medium mb-1"/>
                <x-input name="email" type="email" id="email" wire:model="email" class="form-input"/>
                <x-error field="email" class="text-sm text-red-600"/>
            </div>

            <div class="flex flex-col mb-4">
                <x-label for="password" class="text-white font-medium mb-1"/>
                <x-input name="password" type="password" id="password" wire:model="password" class="form-input"/>
                <x-error field="email" class="text-sm text-red-600"/>
            </div>


            <a href="/register" class="hover:underline"> Don't have an account?</a>


            <x-form-button class="form-button">
                Login
            </x-form-button>
        </form>
    </div>
</section>
