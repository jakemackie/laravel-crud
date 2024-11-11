@props(["highlight" => false])

<div @class(
        ['border-blue-300 bg-blue-50 shadow-md' => $highlight, 
        'bg-white border-2 py-4 px-6 rounded-xl']
    )
>
    {{ $slot }}
    <a {{ $attributes }} class="hover:text-blue-500 hover:underline">View details</a>
</div>