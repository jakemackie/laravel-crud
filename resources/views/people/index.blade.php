<x-layout>
    <h2>Example Data</h2>

    <ul>
        @foreach ($people as $person)
            <li>
                <x-card href="/people/{{ $person['id'] }}" :highlight="$person['age'] == 19">
                    <h3>{{ $person["name"] }}</h3>
                </x-card>
            </li>
        @endforeach
    </ul> 
</x-layout>