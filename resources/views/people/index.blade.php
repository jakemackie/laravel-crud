<x-layout>
    <h2>Example Data</h2>

    <ul>
        @foreach ($people as $person)
            <li>
                <p>{{ $person["name"] }}</p>
                <a href="/people/{{ $person["id"] }}">View profile</a>
            </li>
        @endforeach
    </ul>
</x-layout>