@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => ' block mt-4 w-full italic focus:border-ok p-3
focus:ring-ok rounded-full shadow-sm']) !!}>
