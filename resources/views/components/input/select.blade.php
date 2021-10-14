@props([
'placeholder' => null,
'py'=>2,
'width' => 'w-full',
'disabled'=>false,
])

<div class="flex">
    <select {{ $disabled ? "disabled" : '' }} {!! $attributes->merge(['class' => 'border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm']) !!}>
        @if ($placeholder)
            <option disabled value="">{{ $placeholder }}</option>
        @endif
        {{ $slot }}
    </select>

</div>
