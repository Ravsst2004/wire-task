<button {{ $attributes->merge(['class' => 'w-full bg-white text-black border text-white font-semibold py-2 rounded-lg transition duration-200']) }}>
    {{ $slot }}
</button>
