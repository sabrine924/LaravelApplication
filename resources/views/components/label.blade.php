@props(['value'])

<!-- <label {{ $attributes->merge(['class' => 'block font-medium text-sm text-gray-700']) }}>
    {{ $value ?? $slot }}
</label> -->

<label {{ $attributes->merge(['class' => 'block text-lg']) }}>
    {{ $value ?? $slot }}
</label>
