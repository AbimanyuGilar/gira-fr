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
<body class="flex flex-col h-screen">
    <header class="flex items-center justify-between h-16 px-6 text-white bg-slate-900">
        <p>GiraFR</p>
        <p>{{ $user->name }}</p>
    </header>

    <main class="flex items-center justify-center flex-grow bg-slate-300">
        <div class="grid grid-cols-3 bg-white shadow-xl h-[750px] w-[750px] rounded-xl p-5 gap-4">
            <form action="{{ route('transactions.store') }}" method="POST" class="text-xl">
                @csrf
                <div class="flex">
                    <div class="m-5 w-max">
                        <label for="type" class="">Type</label>
                        <select name="type" id="type" class="p-5 bg-white rounded-md shadow-md ring-1 ring-slate-900">
                            <option value="income">Income</option>
                            <option value="expenses">Expenses</option>
                        </select>
                    </div>

                    <div class="m-5">
                        <label for="transaction_date">Transaction Date</label>
                        <input class="p-5 rounded-md shadow-md ring-1 ring-slate-900" type="datetime-local" name="transaction_date" id="transaction_date">
                    </div>
                </div>

                <div class="m-5">
                    <label for="amount">Amount (Rp)</label>
                    <input class="p-5 rounded-md shadow-md ring-1 ring-slate-900" type="number" name="amount" id="amount">
                </div>

                <div class="m-5">
                    <label for="description">Descriptions</label>
                    <textarea class="p-5 rounded-md shadow-md ring-1 ring-slate-900" name="description" id="description" cols="30" rows="10"></textarea>
                </div>

                <button type="submit" class="p-3 m-5 text-white rounded-md shadow-md bg-slate-900">Add a transaction</button>
            </form>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
</body>
</html>
