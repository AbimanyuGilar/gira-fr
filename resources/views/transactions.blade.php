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

    <main class="flex items-center justify-center flex-grow bg-slate-200">
        <div class="grid grid-cols-3 bg-white shadow-xl h-[750px] w-[1500px] rounded-xl p-5 gap-4">
            <div class="overflow-y-scroll">
                @foreach ($filteredTransactions as $transaction )
                    <div class="flex justify-end p-3 my-2 border-2 rounded-md hover:bg-gray-50 border-slate-900 h-28" onclick="event.preventDefault(); document.getElementById('selected').value='{{ $transaction->id }}'; document.getElementById('filter').submit()">
                        <div class="grid w-full grid-cols-1 rounded-xl">
                            @if ($transaction->type == 'income')
                                <p class="text-xl">{{ $transaction->type }}<span class="text-green-700">{{ ' +Rp' . number_format($transaction->amount, 0, ',', '.'); }}</span></p>
                            @else
                                <p class="text-xl">{{ $transaction->type }}<span class="text-red-700">{{ ' -Rp' . number_format($transaction->amount, 0, ',', '.'); }}</span></p>
                            @endif

                            <p class="truncate ...">{{ $transaction->description }}</p>
                        </div>
                        @php
                            $options = ["edit", "delete"];
                        @endphp
                        <x-drop-down :items="$options">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                                <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0m0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0m0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0"/>
                            </svg>
                        </x-drop-down>
                    </div>
                @endforeach
            </div>

            <div class="grid grid-rows-3 p-10 border-2 border-slate-900 aspect-square rounded-xl">
                @if ($selectedTransaction)
                    <div>
                        <p class="text-5xl">{{ $selectedTransaction->type }}</p>
                        @if ($selectedTransaction->type == 'income')
                            <p class="text-5xl text-green-500">{{ '+ Rp' . number_format($selectedTransaction->amount, 0, ',', '.'); }}</p>
                        @else
                            <p class="text-5xl text-red-500">{{ '- Rp' . number_format($selectedTransaction->amount, 0, ',', '.'); }}</p>
                        @endif
                    </div>
                    <div>
                        <p class="text-3xl">Notes:</p>
                        <p class="text-base">{{ $selectedTransaction->description ? $selectedTransaction->description : '-' }}</p>
                    </div>
                    <div class="flex items-end">
                        <p class="text-5xl">{{ \Carbon\Carbon::parse($selectedTransaction->transaction_date)->format('d M Y') }}</p>
                    </div>
                @else
                    <p>Nohing Selected</p>
                @endif
            </div>

            <div>
                <form id="filter" method="GET" action="{{ route('transactions.index') }}" class="flex flex-col my-5 text-xl">
                    <input type="hidden" name="selected" id="selected" value="{{ $selectedTransaction ? $selectedTransaction->id : 'nothing' }}">
                    <p>
                        Select Year:
                        @php
                            $years = [];
                            for ($year_ = 2019; $year_ <= date('Y'); $year_++) {
                                array_push($years, $year_);
                            }
                        @endphp
                        <x-form-drop-down form="filter" name="year" :items="array_reverse($years)" current="{{ $year }}"></x-form-drop-down>
                    </p>
                    <p>
                        Select Month:
                        @php
                            $months = [];
                            for ($month_ = 1; $month_ <= 12; $month_++) {
                                array_push($months, $month_);
                            }
                        @endphp
                        <x-form-drop-down form="filter" name="month" :items="$months" current="{{ $month }}"></x-form-drop-down>
                    </p>
                    <p>
                        Select Day:
                        @php
                            $days = [];
                            for ($day_ = 1; $day_ <= 31; $day_++) {
                                array_push($days, $day_);
                            }
                        @endphp
                        <x-form-drop-down form="filter" name="day" :items="$days" current="{{ $day }}"></x-form-drop-down>
                    </p>
                </form>

                <div class="flex flex-col my-5 text-xl">
                    @php
                        $totalIncome = $allTransactions->where('type', 'income')->sum('amount');
                        $totalExpenses = $allTransactions->where('type', 'expenses')->sum('amount');
                        $currentBalance = $totalIncome - $totalExpenses;
                    @endphp
                    <p>Current Money: <span class="text-blue-500">{{ 'Rp'.number_format($currentBalance, 0, ',', '.'); }}</span></p>
                    <p>Total Income: <span class="text-green-500">{{ 'Rp'.number_format($totalIncome, 0, ',', '.'); }}</span></p>
                    <p>Total Expenses: <span class="text-red-500">{{ 'Rp'.number_format($totalExpenses, 0, ',', '.'); }}</span></p>
                </div>
                <div class="w-2/4 text-center transition transform duration-50 active:scale-100 hover:scale-110">
                    <a href="{{ route('transactions.create') }}" class="">
                        <x-primary-button>Add transaction</x-primary-button>
                    </a>
                </div>
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
</body>
</html>
