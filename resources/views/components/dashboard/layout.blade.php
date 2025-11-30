<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <meta name="csrf-token" content="{{ csrf_token() }}" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
            rel="stylesheet"
        />
        {{-- <link rel="stylesheet" href="https://cdn.datatables.net/2.3.5/css/dataTables.dataTables.css" />s --}}
        {{-- <link rel="stylesheet" href="https://cdn.datatables.net/2.3.5/css/dataTables.tailwindcss.css" /> --}}

        <title>Eyelyze - Dashboard</title>
    </head>

    <body class="m-0 overflow-x-hidden bg-[var(--bgColor)] p-0 text-[var(--textColor)]">
        @include('components._messageFlash')

        <div class="flex h-dvh w-full">
            <div class="sticky top-0 h-full w-56 bg-white">
                <x-dashboard.headerLogo />

                <x-dashboard.navigation />

                <div class="absolute bottom-5 left-2 h-fit w-full text-[10px] text-gray-400">
                    Copyright &copy; 2025, by
                    <a
                        href="https://nornetics.com"
                        target="_blank"
                        class="cursor-pointer hover:text-lime-400 hover:underline"
                    >
                        Nornetics
                    </a>
                </div>
            </div>
            <div class="flex h-dvh flex-1 flex-col">
                <x-dashboard.header />

                <main class="flex-1 overflow-hidden">
                    {{-- MAIN CONTENT HERE --}}

                    {{ $slot }}
                </main>
            </div>
        </div>

        {{--
            <script type="text/javascript">
            function showToast(message) {
            const t = document.getElementById('toast');
            
            t.classList.remove('hidden');
            
            setTimeout(() => {
            t.classList.add('hidden');
            }, 2000);
            }
            </script>
        --}}

        <script src="/js/jquery.js"></script>
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
                    },
                });
            });
        </script>
    </body>
</html>
