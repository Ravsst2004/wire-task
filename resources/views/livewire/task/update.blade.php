<section class="max-w-md mt-20 border-2 border-gray-300 rounded-lg mx-auto shadow-md">
  <div class="p-6 bg-white">
    <form wire:submit="update" method="POST">
      @csrf
      @method('PATCH')
      <div class="flex flex-col mb-4">
        <label for="title" class="text-gray-700 font-medium mb-1">Title</label>
        <input type="text" id="title" wire:model="title" value="{{ $task->title }}"
          class="border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
      </div>

      <div class="flex flex-col mb-4">
        <label for="description" class="text-gray-700 font-medium mb-1">Description</label>
        <textarea id="description" wire:model="description" cols="30" rows="10"
          class="border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">{{ $task->description }}</textarea>
      </div>

      <button type="submit"
        class="w-full bg-blue-500 text-white font-semibold py-2 rounded-lg hover:bg-blue-600 transition duration-200">
        Create
      </button>
    </form>
  </div>
</section>
