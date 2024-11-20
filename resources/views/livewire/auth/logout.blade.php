<div>
  <form wire:submit="logout" method="POST">
    @csrf
    <button type="submit" class="text-red-500">Logout</button>
  </form>
</div>
