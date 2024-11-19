@props(["highlight" => false])

<div @class(
        ['bg-indigo-100 border-2 border-indigo-300' => $highlight, 
        'bg-white border py-4 px-6 rounded-xl']
    )
>
    {{ $slot }}
    <a {{ $attributes }} class="hover:text-blue-500 hover:underline">View details</a>
</div>