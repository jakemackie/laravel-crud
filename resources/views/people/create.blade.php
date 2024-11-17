<x-layout>
    <form 
        action="{{ route('people.store') }}" 
        method="POST" 
        class="flex flex-col items-start gap-4 text-left text-lg"
    >
        @csrf

        <h2 class="text-2xl mb-4">Create a New Person</h2>

        <label for="name">Person Name:</label>
        <input 
            type="text" 
            id="name" 
            name="name" 
            value="{{ old('name') }}" 
            class="w-full px-4 py-3 rounded-xl outline outline-slate-200 shadow-sm"
            required
        >

        <label for="age">Person age (16-100):</label>
        <input 
            type="number" 
            id="age" 
            name="age" 
            class="w-full px-4 py-3 rounded-xl outline outline-slate-200 shadow-sm"
            required
        >

        <label for="bio">Biography:</label>
        <textarea
            rows="5"
            id="bio" 
            name="bio" 
            class="w-full px-4 py-3 rounded-xl outline outline-slate-200 shadow-sm"
            required
        ></textarea>

        <label for="team_id">Team:</label>
        <select 
            id="team_id"
            name="team_id" 
            required 
            class="w-full px-4 py-3 rounded-xl outline outline-slate-200 shadow-sm"
        >
            <option value="" disabled selected>Select a team</option>
            @foreach ($teams as $team)
                <option value="{{ $team->id }}">{{ $team->name }}</option>
            @endforeach
        </select>

        <button type="submit" class="mt-6 px-6 py-3 bg-indigo-600 hover:bg-indigo-500 text-white rounded-xl outline outline-2 outline-indigo-300">Create Person</button>
    </form>
</x-layout>