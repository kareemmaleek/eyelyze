<x-dashboard.layout>
    <div class="flex h-full flex-col p-5">
        <div class="mb-5 flex h-fit w-full shrink-0 justify-between">
            <div class="w-fit">
                <h2 class="text-2xl font-medium">Devices</h2>
            </div>

            <div class="w-fit">
                <button
                    @click="openCreate()"
                    class="flex w-fit cursor-pointer items-center gap-1 rounded-md bg-[var(--mainColor)] p-2 px-5 text-sm transition ease-in hover:opacity-90"
                >
                    <x-heroicon-o-device-tablet class="h-4 w-4" />
                    Add Device
                </button>
            </div>
        </div>

        <div class="flex w-full flex-1 flex-col overflow-auto rounded-lg bg-white p-5"></div>
    </div>
</x-dashboard.layout>
