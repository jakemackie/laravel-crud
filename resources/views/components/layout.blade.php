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
  
  <header class="py-8 bg-white shadow-sm">
    <nav class="mx-auto max-w-screen-lg flex justify-between text-xl font-semibold">
      <a href="/" class="text-2xl">My project</a>
      <div class="flex gap-8">
        <a href="/people">All people</a>
        <a href="/people/create">Create person</a>
      </div>
    </nav>
  </header>

  <main class="mx-auto max-w-screen-lg mt-12 px-4 lg:px-0">
    {{ $slot }}
  </main>

</body>
</html>