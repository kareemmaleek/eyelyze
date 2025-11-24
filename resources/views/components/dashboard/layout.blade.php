<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">

    <title>Eyelyze - Dashboard</title>

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-[var(--bgColor)] text-[var(--textColor)] m-0 p-0 overflow-x-hidden">

    <div class="w-full h-dvh flex">

        @include('components._messageFlash');

        <div class="relative w-56 h-full bg-white">
            <x-dashboard.headerLogo />

            <x-dashboard.navigation />

            <div class="absolute bottom-5 left-2 w-full h-fit text-[10px] text-gray-400">
                Copyright &copy; 2025, by <a href="https://nornetics.com" target="_blank" class="hover:text-lime-400 hover:underline cursor-pointer">Nornetics</a>
            </div>
        </div>
        <div class="flex-1 h-full flex flex-col">

            <x-dashboard.header />

            <main class="w-full h-full">

                {{-- MAIN CONTENT HERE --}}

                {{ $slot }}

            </main>
            
        </div>
    </div>
    

    <script type="text/javascript">
        function showToast(message) {
        const t = document.getElementById('toast');

        t.classList.remove('hidden');

        setTimeout(() => {
            t.classList.add('hidden');
        }, 2000);
}
    </script>
</body>
</html>