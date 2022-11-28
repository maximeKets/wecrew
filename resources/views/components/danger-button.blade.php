<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-6 py-4 bg-delete border
border-black rounded-full italic hover:uppercase text-black tracking-widest hover:bg-delete active:bg-delete
 focus:outline-none focus:ring-2 focus:ring-black focus:ring-offset-2 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
