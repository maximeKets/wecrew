@props(['value'])

<label {{ $attributes->merge(['class' => 'block item-center justify-center flex font-medium text-sm text-gray-700']) }}>
    {{ $value ?? $slot }}
</label>
