<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My project</title>
</head>
<body>
    <h2>Example Data</h2>

    <ul>
        @foreach ($people as $person)
            <li>
                <p>{{ $person["name"] }}</p>
                <a href="/people/{{ $person["id"] }}">View profile</a>
            </li>
        @endforeach
    </ul>
</body>
</html>