@props(["highlight" => false])

<div @class(['bg-green-100 border-green-300' => $highlight, 'card'])>
    {{ $slot }}
    <a {{ $attributes }}>View details</a>
</div>