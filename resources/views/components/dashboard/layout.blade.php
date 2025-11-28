<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        rel="stylesheet">
    {{-- <link rel="stylesheet" href="https://cdn.datatables.net/2.3.5/css/dataTables.dataTables.css" />s --}}
    {{-- <link rel="stylesheet" href="https://cdn.datatables.net/2.3.5/css/dataTables.tailwindcss.css" /> --}}




    <title>Eyelyze - Dashboard</title>

</head>

<body class="bg-[var(--bgColor)] text-[var(--textColor)] m-0 p-0 overflow-x-hidden">

    <div class="w-full h-dvh flex">

        @include('components._messageFlash');

        <div class=" w-56 h-full bg-white sticky top-0">
            <x-dashboard.headerLogo />

            <x-dashboard.navigation />

            <div class="absolute bottom-5 left-2 w-full h-fit text-[10px] text-gray-400">
                Copyright &copy; 2025, by <a href="https://nornetics.com" target="_blank"
                    class="hover:text-lime-400 hover:underline cursor-pointer">Nornetics</a>
            </div>
        </div>
        <div class="flex-1 h-dvh flex flex-col">

            <x-dashboard.header />

            <main class="flex-1 overflow-hidden">

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

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    {{-- <script src="https://cdn.datatables.net/2.3.5/js/dataTables.js"></script> --}}
    {{-- <script src="https://cdn.datatables.net/2.3.5/js/dataTables.tailwindcss.js"></script> --}}

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <script>
    document.addEventListener('alpine:init', () => {
        Alpine.store('slidePopup', {
            active: null,
            data: {},
            
            open(identifier, data = {}) {
                this.active = identifier;
                this.data = data;
            },
            
            close() {
                this.active = null;
                this.data = {};
            },
            
            isOpen(identifier) {
                return this.active === identifier;
            }
        });
    });
</script>
</body>

</html>
