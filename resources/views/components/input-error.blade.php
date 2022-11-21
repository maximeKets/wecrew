@props(['messages'])

@if ($messages)
    <ul {{ $attributes->merge(['class' => 'text-sm mt-2 text-delete space-y-1']) }}>
        @foreach ((array) $messages as $message)
            <li>{{ $message }}</li>
        @endforeach
    </ul>
@endif
