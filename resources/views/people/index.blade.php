<x-layout>
    @if(count($people) > 0)
        <h2 class="mb-8 text-xl font-medium">All people - {{ count($people) }}</h2>

        <ul class="flex flex-col gap-y-4">
            @foreach ($people as $person)
                <li>
                    <x-card href="/people/{{ $person['id'] }}" :highlight="$person['age'] == 19">
                        <p class="text-lg font-medium">{{ $person["name"] }}</p>
                    </x-card>
                </li>
            @endforeach
        </ul> 

    @else
        <p>No people found</p>
    @endif
</x-layout>