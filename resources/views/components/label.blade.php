@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-gray-500 font-bold']) }}>
    {{ $value ?? $slot }}
</label>
