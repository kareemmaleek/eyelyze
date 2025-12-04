<div class="flex w-full flex-col p-2">
    <div class="w-full px-2">
        <span class="text-[10px] font-bold tracking-wider text-gray-400 uppercase">general</span>
    </div>

    <x-dashboard.nav-link href="/" :active="request()->is('/')">
        <x-heroicon-o-home class="h-6 w-6" />
        <span class="text-sm font-medium">Dashboard</span>
    </x-dashboard.nav-link>

    <x-dashboard.nav-link href="/track" :active="request()->is('track')">
        <x-heroicon-o-map class="h-6 w-6" />
        <span class="text-sm font-medium">Track/Find</span>
    </x-dashboard.nav-link>

    <x-dashboard.nav-link href="/report" :active="request()->is('report')">
        <x-heroicon-o-document-chart-bar class="h-6 w-6" />
        <span class="text-sm font-medium">Report</span>
    </x-dashboard.nav-link>

    <div class="w-full px-2">
        <span class="text-[10px] font-bold tracking-wider text-gray-400 uppercase">management</span>
    </div>

    <x-dashboard.nav-link href="/devices" :active="request()->is('devices')">
        <x-heroicon-o-signal class="h-6 w-6" />
        <span class="text-sm font-medium">Devices</span>
    </x-dashboard.nav-link>

    @if (Auth::user()->role === 1)
        <x-dashboard.nav-link href="/users" :active="request()->is('users')">
            <x-heroicon-o-users class="h-6 w-6" />
            <span class="text-sm font-medium">Users</span>
        </x-dashboard.nav-link>
    @endif

    @if (Auth::user()->role === 1)
        <div class="w-full px-2">
            <span class="text-[10px] font-bold tracking-wider text-gray-400 uppercase">audit</span>
        </div>

        <x-dashboard.nav-link href="/audit" :active="request()->is('audit')">
            <x-heroicon-o-document-magnifying-glass class="h-6 w-6" />
            <span class="text-sm font-medium">System Log</span>
        </x-dashboard.nav-link>
    @endif
</div>
