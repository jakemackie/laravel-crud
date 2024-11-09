<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My project</title>
    
    @vite("resources/css/app.css")

</head>
<body class="text-center px-8 py-12">
    <h1>Welcome to your project</h1>
    <p>This is a simple Laravel project</p>

    <a href="/people" class="mt-4 inline-block">
        Go to people page
    </a>
</body>
</html>