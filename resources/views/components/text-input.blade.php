@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => ' px-8 block mt-4 w-full italic focus:border-ok p-3
focus:ring-ok rounded-full ']) !!}>
