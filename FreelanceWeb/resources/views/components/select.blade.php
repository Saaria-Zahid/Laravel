@props(['disabled' => false])

<select {!! $attributes->merge(['class' => 'block font-medium text-sm text-gray-700']) !!}>
    {{ $slot }}
</select>
