   <button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center m-4 px-4 py-2 sm:px-7 sm:py-3 bg-ok border  rounded-full  text-black italic tracking-widest hover:bg-next focus:bg-next active:bg-next focus:outline-none border-black transition ease-in-out duration-150']) }}>
    {{ $slot }} <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" class="pl-2 w-6 h-6">
        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
    </svg>

</button>
