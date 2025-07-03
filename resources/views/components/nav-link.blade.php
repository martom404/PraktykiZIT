@props(['active' => false, 'type' => 'a'])

@php
    $class = $active ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white';
@endphp

@if ($type == 'button')
    <button {{ $attributes->merge(['class' => "$class block rounded-md px-3 py-2 text-base font-medium"]) }}
        aria-current="{{ $active ? 'page' : 'false' }}">
        {{ $slot }}
    </button>
@else
    <a {{ $attributes->merge(['class' => "$class block rounded-md px-3 py-2 text-base font-medium"]) }}
        aria-current="{{ $active ? 'page' : 'false' }}">
        {{ $slot }}
    </a>
@endif
