<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My project</title>

    @vite("resources/css/app.css")

</head>
<body>
    @if (session('success'))
        <div id="flash" class="p-4 text-center bg-blue-100 text-blue-500 font-bold">
            {{ session('success') }}
        </div>
    @endif

    <header class="py-8 bg-white shadow-sm">
        <nav class="mx-auto px-4 lg:px-0 max-w-screen-lg flex justify-between text-lg lg:text-xl font-semibold">
            <a href="/" class="text-xl lg:text-2xl">My project</a>
            <div class="flex gap-8">
                <a href="{{ route('people.index') }}">All people</a>
                <a href="{{ route('people.create') }}">Create person</a>
            </div>
        </nav>
    </header>

    <main class="mx-auto max-w-screen-lg mt-12 px-4 lg:px-0">
        {{ $slot }}
    </main>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var flash = document.getElementById('flash');

            if (flash) {
                setTimeout(function () {
                    flash.remove(); 
                }, 2000);
            }
        });
    </script>

</body>
</html>