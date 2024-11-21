@props(['active' => false, 'href' => '', 'title' => ''])

@php
    $defaultClasses = $active
        ? 'block py-2 px-3 text-white rounded md:bg-transparent underline underline-offset-4 md:hover:bg-transparent md:border-0 md:underline md:p-0'
        : 'block py-2 px-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:underline md:hover:underline-offset-4 md:p-0';
@endphp

<li>
    <a {{ $attributes->class([$defaultClasses]) }} aria-current="{{ $active ? 'page' : 'false' }}" wire:navigate href="{{ $href }}">
        {{ $title }}
    </a>
</li>
