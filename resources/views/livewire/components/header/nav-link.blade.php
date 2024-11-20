@props(['active' => false, 'href' => '', 'title' => ''])

@php
  $classes = $active
      ? 'block py-2 px-3 rounded md:bg-transparent text-blue-500 md:p-0'
      : 'block py-2 px-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0';
@endphp

<li>
  <a {{ $attributes->merge(['class' => $classes]) }} aria-current="{{ $active ? 'page' : 'false' }}" wire:navigate
    href="{{ $href }}">
    {{ $title }}
  </a>
</li>
