<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>My project</title>
</head>
<body>
  
  <header>
    <nav>
      <a href="/">Home</a>
      <a href="/people">All people</a>
      <a href="/people/create">Add person</a>
    </nav>
  </header>

  <main class="container">
    {{ $slot }}
  </main>

</body>
</html>