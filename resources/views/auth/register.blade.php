<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GiraFR | Register</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="flex flex-col items-center justify-center h-screen bg-slate-100">
    <div class="flex items-center justify-center bg-white h-80 md:h-2/4 lg:h-2/4 aspect-square drop-shadow-lg rounded-xl">
        <form method="POST" action="{{ route('register.submit') }}" class="flex flex-col items-center justify-center">
            @csrf
            <x-input type="text" name="name" placeholder="username"></x-input>
            <x-input type="email" name="email" placeholder="email"></x-input>
            <x-input type="password" name="password" placeholder="password"></x-input>
            <button type="submit" class="w-full mt-5">
                <x-primary-button>
                    Register
                </x-primary-button>
            </button>
        </form>
    </div>
</body>
</html>
