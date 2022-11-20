@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => ' block mt-2 w-full italic focus:border-ok
focus:ring-ok rounded-full shadow-sm']) !!}>
