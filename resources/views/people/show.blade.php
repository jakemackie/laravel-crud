<x-layout>
    <div class="space-y-4">
        <h2 class="text-xl font-medium">{{ $person->name }}, age {{ $person->age }}</h2>
        <p>{{ $person->bio }}</p>
        <p class="text-xs font-medium">
            Created {{ $person->created_at->diffForHumans() }},
            ID: {{ $person->id }}
        </p>
    </div>
</x-layout>