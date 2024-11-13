<x-layout>
    @if(count($people) > 0)
        <h2 class="mb-8 text-xl font-medium">All people - {{ count($people) }}</h2>

        <ul class="flex flex-col gap-y-4">
            @foreach ($people as $person)
                <li>
                    <x-card href="{{ route('people.show', $person->id) }}" :highlight="$person->id == 1">
                        <div class="mb-4">
                            <h3 class="text-lg font-medium">{{ $person->name }}</h3>
                            <p class="text-sm text-gray-500">{{ $person->team->name }}</p>
                        </div>
                    </x-card>
                </li>
            @endforeach
        </ul> 

        <div class="my-8">
            {{ $people->links() }}
        </div>

    @else
        <p>No people found</p>
    @endif
</x-layout>