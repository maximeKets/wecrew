@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => ' focus:border-ok
focus:ring-ok rounded-full shadow-sm']) !!}>
