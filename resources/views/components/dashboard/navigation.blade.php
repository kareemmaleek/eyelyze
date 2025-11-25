<div class="w-full p-2 flex flex-col">


    <div class="w-full px-2">
        <span class="uppercase text-[10px] font-bold text-gray-400 tracking-wider">general</span>
    </div>

    <x-dashboard.nav-link href="/" :active="request()->is('/')">
        <x-heroicon-o-home class="w-6 h-6" />
        <span class="text-sm font-medium">Dashboard</span>
    </x-dashboard.nav-link>

    <x-dashboard.nav-link href="/track" :active="request()->is('track')">
        <x-heroicon-o-map class="w-6 h-6 " />
        <span class="text-sm font-medium">Track/Find</span>
    </x-dashboard.nav-link>

    <x-dashboard.nav-link href="/report" :active="request()->is('report')">
        <x-heroicon-o-document-chart-bar class="w-6 h-6 " />
        <span class="text-sm font-medium">Report</span>
    </x-dashboard.nav-link>



    <div class="w-full px-2">
        <span class="uppercase text-[10px] font-bold text-gray-400 tracking-wider">management</span>
    </div>

    <x-dashboard.nav-link href="/report" :active="request()->is('devices')">
        <x-heroicon-o-signal class="w-6 h-6 " />
        <span class="text-sm font-medium">Devices</span>
    </x-dashboard.nav-link>

    @if (Auth::user()->role === 1)
        <x-dashboard.nav-link href="/users" :active="request()->is('users')">
            <x-heroicon-o-users class="w-6 h-6 " />
            <span class="text-sm font-medium">Users</span>
        </x-dashboard.nav-link>
    @endif


    @if (Auth::user()->role === 1)
        <div class="w-full px-2">
            <span class="uppercase text-[10px] font-bold text-gray-400 tracking-wider">audit</span>
        </div>

        <x-dashboard.nav-link href="/system-log" :active="request()->is('system-log')">
            <x-heroicon-o-document-magnifying-glass class="w-6 h-6 " />
            <span class="text-sm font-medium">System Log</span>
        </x-dashboard.nav-link>
    @endif



</div>
