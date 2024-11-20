<section class="max-w-md mt-20 border-2 border-gray-300 rounded-lg mx-auto shadow-md">
  <div class="p-6 bg-white">
    @error('email')
      <p class="text-red-600">{{ $message }}</p>
    @enderror

    <form wire:submit="login" method="POST">
      @csrf
      <div class="flex flex-col mb-4">
        <label for="email" class="text-gray-700 font-medium mb-1">Email</label>
        <input type="email" name="email" id="email" wire:model="email"
          class="border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
      </div>

      <div class="flex flex-col mb-4">
        <label for="password" class="text-gray-700 font-medium mb-1">Password</label>
        <input type="password" name="password" id="password" wire:model="password"
          class="border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
      </div>

      <button type="submit"
        class="w-full bg-blue-500 text-white font-semibold py-2 rounded-lg hover:bg-blue-600 transition duration-200">
        Login
      </button>
    </form>
  </div>
</section>
