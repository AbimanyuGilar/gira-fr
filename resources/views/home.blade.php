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
        <p>{{ Auth::user()->name }}</p>
    </header>

    <main class="flex items-center justify-center flex-grow bg-slate-200">
        <div class="grid grid-cols-3 bg-white shadow-xl h-[750px] w-[1500px] rounded-xl p-5 gap-4">
            <div class="grid grid-cols-1 gap-3 overflow-y-scroll">
                <div class="flex justify-end p-3 border-2 rounded-md border-slate-900 h-28">
                    <div class="grid w-full grid-cols-1 rounded-xl">
                        <p class="text-xl">Income <span class="text-green-700">+Rp100.000</span></p>
                        <p class="truncate ...">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi perferendis, laboriosam, doloribus officiis sint exercitationem velit illo dolorem, est explicabo laudantium perspiciatis. Voluptatem, necessitatibus culpa veniam esse atque nemo accusamus?</p>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                        <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0m0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0m0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0"/>
                    </svg>
                </div>
                <div class="flex justify-end p-3 border-2 rounded-md border-slate-900 h-28">
                    <div class="grid w-full grid-cols-1 rounded-xl">
                        <p class="text-xl">Income <span class="text-green-700">+Rp100.000</span></p>
                        <p class="truncate ...">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi perferendis, laboriosam, doloribus officiis sint exercitationem velit illo dolorem, est explicabo laudantium perspiciatis. Voluptatem, necessitatibus culpa veniam esse atque nemo accusamus?</p>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                        <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0m0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0m0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0"/>
                    </svg>
                </div>
                <div class="flex justify-end p-3 border-2 rounded-md border-slate-900 h-28">
                    <div class="grid w-full grid-cols-1 rounded-xl">
                        <p class="text-xl">Income <span class="text-green-700">+Rp100.000</span></p>
                        <p class="truncate ...">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi perferendis, laboriosam, doloribus officiis sint exercitationem velit illo dolorem, est explicabo laudantium perspiciatis. Voluptatem, necessitatibus culpa veniam esse atque nemo accusamus?</p>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                        <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0m0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0m0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0"/>
                    </svg>
                </div>
                <div class="flex justify-end p-3 border-2 rounded-md border-slate-900 h-28">
                    <div class="grid w-full grid-cols-1 rounded-xl">
                        <p class="text-xl">Income <span class="text-green-700">+Rp100.000</span></p>
                        <p class="truncate ...">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi perferendis, laboriosam, doloribus officiis sint exercitationem velit illo dolorem, est explicabo laudantium perspiciatis. Voluptatem, necessitatibus culpa veniam esse atque nemo accusamus?</p>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                        <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0m0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0m0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0"/>
                    </svg>
                </div>
                <div class="flex justify-end p-3 border-2 rounded-md border-slate-900 h-28">
                    <div class="grid w-full grid-cols-1 rounded-xl">
                        <p class="text-xl">Income <span class="text-green-700">+Rp100.000</span></p>
                        <p class="truncate ...">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi perferendis, laboriosam, doloribus officiis sint exercitationem velit illo dolorem, est explicabo laudantium perspiciatis. Voluptatem, necessitatibus culpa veniam esse atque nemo accusamus?</p>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                        <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0m0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0m0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0"/>
                    </svg>
                </div>
                <div class="flex justify-end p-3 border-2 rounded-md border-slate-900 h-28">
                    <div class="grid w-full grid-cols-1 rounded-xl">
                        <p class="text-xl">Income <span class="text-green-700">+Rp100.000</span></p>
                        <p class="truncate ...">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi perferendis, laboriosam, doloribus officiis sint exercitationem velit illo dolorem, est explicabo laudantium perspiciatis. Voluptatem, necessitatibus culpa veniam esse atque nemo accusamus?</p>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                        <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0m0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0m0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0"/>
                    </svg>
                </div>
                <div class="flex justify-end p-3 border-2 rounded-md border-slate-900 h-28">
                    <div class="grid w-full grid-cols-1 rounded-xl">
                        <p class="text-xl">Income <span class="text-green-700">+Rp100.000</span></p>
                        <p class="truncate ...">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi perferendis, laboriosam, doloribus officiis sint exercitationem velit illo dolorem, est explicabo laudantium perspiciatis. Voluptatem, necessitatibus culpa veniam esse atque nemo accusamus?</p>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                        <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0m0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0m0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0"/>
                    </svg>
                </div>
                <div class="flex justify-end p-3 border-2 rounded-md border-slate-900 h-28">
                    <div class="grid w-full grid-cols-1 rounded-xl">
                        <p class="text-xl">Income <span class="text-green-700">+Rp100.000</span></p>
                        <p class="truncate ...">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi perferendis, laboriosam, doloribus officiis sint exercitationem velit illo dolorem, est explicabo laudantium perspiciatis. Voluptatem, necessitatibus culpa veniam esse atque nemo accusamus?</p>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                        <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0m0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0m0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0"/>
                    </svg>
                </div>
                <div class="flex justify-end p-3 border-2 rounded-md border-slate-900 h-28">
                    <div class="grid w-full grid-cols-1 rounded-xl">
                        <p class="text-xl">Income <span class="text-green-700">+Rp100.000</span></p>
                        <p class="truncate ...">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi perferendis, laboriosam, doloribus officiis sint exercitationem velit illo dolorem, est explicabo laudantium perspiciatis. Voluptatem, necessitatibus culpa veniam esse atque nemo accusamus?</p>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                        <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0m0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0m0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0"/>
                    </svg>
                </div>
            </div>

            <div class="grid grid-rows-3 p-10 border-2 border-slate-900 aspect-square rounded-xl">
                <div>
                    <p class="text-5xl">Income</p>
                    <p class="text-5xl text-green-500">+ Rp100.000</p>
                </div>
                <div>
                    <p class="text-3xl">Notes:</p>
                    <p class="text-base">Lorem ipsum dolor sit amet consectetur adipisicing elit. Est quo cum, consequuntur quaerat voluptas saepe autem totam reprehenderit fuga, illum impedit? Aspernatur natus obcaecati iusto nihil. Vero nostrum provident amet.</p>
                </div>
                <div class="flex items-end">
                    <p class="text-5xl">16 January 2025</p>
                </div>
            </div>

            <div>
                <div class="flex flex-col my-5 text-xl">
                    <p>Select Year: 2025</p>
                    <p>Select Month: January</p>
                    <p>Select Day: All</p>
                </div>

                <div class="flex flex-col my-5 text-xl">
                    <p>Current Money: <span class="text-blue-500">Rp1.000.000</span></p>
                    <p>Total Income: <span class="text-green-500">Rp1.000.000</span></p>
                    <p>Total Expenses: <span class="text-red-500">Rp1.000.000</span></p>
                </div>
                <div class="w-2/4 text-center transition transform duration-50 active:scale-100 hover:scale-110">
                    <a href="#" class="">
                        <x-primary-button>Add transaction</x-primary-button>
                    </a>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
