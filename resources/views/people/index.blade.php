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
        <li>
            <a href="/people/{{ $people[0]["id"] }}">
                {{ $people[0]["name"] }}
            </a>
        </li>

        <li>
            <a href="/people/{{ $people[1]["id"] }}">
                {{ $people[1]["name"] }}
            </a>
        </li>
    </ul>
</body>
</html>