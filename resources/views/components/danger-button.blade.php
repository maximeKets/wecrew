<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-delete border
border-transparent rounded-full font-semibold text-xs text-white uppercase tracking-widest hover:bg-delete active:bg-delete
 focus:outline-none focus:ring-2 focus:ring-black focus:ring-offset-2 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
