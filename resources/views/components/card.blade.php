@props([
    "highlight" => false
])

<div @class(["highlight" => $highlight])>
    {{ $slot }}
    <a {{ $attributes }}>View details</a>
</div>