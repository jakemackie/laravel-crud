<x-layout>
    <h2 class="text-lg lg:text-2xl font-semibold mb-4">Person details</h2>
    <div class="bg-white border-2 py-4 px-6 space-y-4 rounded-xl">
        <h2 class="text-xl font-medium">{{ $person->name }}, age {{ $person->age }}</h2>
        <p>{{ $person->bio }}</p>
        <p class="text-xs font-medium">
            Created {{ $person->created_at->diffForHumans() }},
            ID: {{ $person->id }}
        </p>
    </div>

    <h2 class="mt-8 text-lg lg:text-2xl font-semibold mb-4">Team information</h2>
    <div class="bg-white border-2 py-4 px-6 space-y-4 rounded-xl">
        <h2 class="text-xl font-medium">{{ $person->team->name }}</h2>
        <p>{{ $person->team->description }}</p>
        <p class="text-xs font-medium">{{ $person->team->location }}</p>
    </div>

    <form 
        action="{{ route('people.destroy', $person->id) }}" 
        method="POST"
        class="mt-8"
    >
        @csrf
        @method('DELETE')

        <button class="rounded-xl py-3 px-5 bg-red-100 hover:bg-red-200 border-2 border-red-200 hover:border-red-300 text-red-500 hover:text-red-600">
            Delete person
        </button>
    </form>

</x-layout>