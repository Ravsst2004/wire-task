<button {{ $attributes->merge(['class' => 'w-full bg-white text-black border font-semibold py-2 rounded-lg transition duration-200']) }}>
    {{ $slot }}
</button>
