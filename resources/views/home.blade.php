<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GiraFR | Main Page</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

    <h1>Home Page</h1>
    <h3>Hello {{ Auth::user()->name }}</h3>

    <form action="{{ route('auth.logout') }}" method="POST">
        <button type="submit">
            @csrf
            <x-primary-button>Logout</x-primary-button>
        </button>
    </form>
</body>
</html>
