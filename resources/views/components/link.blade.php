@php
$classes=" text-xs underline text-sm text-gray-600 hover:text-gray-900"
@endphp

<a {{$attributes->merge(['class'=>$classes])}}>
    {{ $slot }}
</a>