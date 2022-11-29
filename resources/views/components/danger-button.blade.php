<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-6 py-4 bg-delete border
border-black rounded-full italic  text-black tracking-widest active:bg-delete
  transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
