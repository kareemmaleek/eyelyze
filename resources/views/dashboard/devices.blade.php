<x-dashboard.layout>
    <div class="flex h-full flex-col p-5">
        <div class="mb-5 flex h-fit w-full shrink-0 justify-between">
            <div class="w-fit">
                <h2 class="text-2xl font-medium">Devices</h2>
            </div>

            <div class="w-fit">
                <button @click="openCreate()"
                    class="flex w-fit cursor-pointer items-center gap-1 rounded-md bg-[var(--mainColor)] p-2 px-5 text-sm transition ease-in hover:opacity-90">
                    <x-heroicon-o-device-tablet class="h-4 w-4" />
                    Add Device
                </button>
            </div>
        </div>

        <div class="flex w-full flex-1 flex-col overflow-auto rounded-lg bg-white p-5">
            <div class="relative mb-3 w-full flex-1 overflow-auto rounded-lg border">
                <table class="w-full text-left text-sm">
                    <thead class="text-body sticky top-0 z-10 border-b bg-lime-100 text-sm">
                        <tr>
                            <th class="bg-lime-100 px-6 py-2 font-medium">Device Model</th>
                            <th class="bg-lime-100 px-6 py-2 font-medium">Device Name</th>
                            <th class="bg-lime-100 px-6 py-2 font-medium">Owner</th>
                            <th class="bg-lime-100 px-6 py-2 font-medium">Status</th>
                            <th class="bg-lime-100 px-6 py-2 font-medium">Created At</th>
                            <th class="bg-lime-100 px-6 py-2 font-medium">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($devices as $device)
                            <tr class="border-b bg-white hover:bg-gray-100">
                                <td class="px-6 py-2">
                                    <div class="cursor-pointer font-medium hover:underline">
                                        {{ $device->device_model }}
                                    </div>
                                </td>
                                <td class="px-6 py-2">{{ $device->device_name }}</td>
                                <td class="px-6 py-2">{{ $device->userRelation->email }}</td>
                                <td class="px-6 py-2">

                                    <div
                                        class="{{ $device->status === 1 ? 'bg-emerald-100 text-emerald-700' : 'bg-rose-100 text-rose-700' }} flex w-fit items-center gap-1 rounded-full p-1 px-3 text-sm font-medium">

                                        <div class="relative h-2 w-2">
                                            <div
                                                class="{{ $device->status === 1 ? 'bg-emerald-400' : 'bg-rose-400' }} h-2 w-2 rounded-full">
                                            </div>
                                            <div
                                                class="{{ $device->status === 1 ? 'bg-emerald-400' : 'bg-rose-400' }} absolute left-0 top-0 h-2 w-2 animate-ping rounded-full">
                                            </div>
                                        </div>
                                        <span>{{ $device->status === 1 ? 'Connected' : 'Disconnected' }}</span>

                                    </div>
                                </td>
                                <td class="px-6 py-2">{{ $device->created_at->format('d M Y, H:i A') }}</td>
                                <td class="px-6 py-2">
                                    <button
                                        class="cursor-pointer rounded-md bg-[var(--mainColor)] px-3 py-2 text-xs hover:opacity-90">
                                        Edit
                                    </button>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-dashboard.layout>
