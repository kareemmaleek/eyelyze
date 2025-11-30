<x-dashboard.layout>
    <div class="flex h-full flex-col p-5">
        <div class="mb-5 flex h-fit w-full shrink-0 justify-between">
            <div class="w-fit">
                <h2 class="text-2xl font-medium">System Log</h2>
            </div>
        </div>

        <div class="flex w-full flex-1 flex-col rounded-lg bg-white p-5">
            <div class="relative mb-3 max-w-[900px] min-w-full flex-1 overflow-x-auto rounded-lg border">
                <table class="table-auto text-left text-sm">
                    <thead class="text-body sticky top-0 z-10 border-b bg-lime-100 text-sm">
                        <tr>
                            <th class="bg-lime-100 px-6 py-2 font-medium">User Email</th>
                            <th class="bg-lime-100 px-6 py-2 font-medium whitespace-nowrap">IP Address</th>
                            <th class="bg-lime-100 px-6 py-2 font-medium whitespace-nowrap">Description</th>
                            <th class="bg-lime-100 px-6 py-2 font-medium whitespace-nowrap">Route</th>
                            <th class="bg-lime-100 px-6 py-2 font-medium whitespace-nowrap">Method</th>
                            <th class="bg-lime-100 px-6 py-2 font-medium whitespace-nowrap">Created At</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($data as $log)
                            <tr class="border-b bg-white hover:bg-gray-100">
                                <th class="px-6 py-2 whitespace-nowrap">
                                    {{ $log->userRelation->email }}
                                </th>
                                <td class="px-6 py-2 whitespace-nowrap">{{ $log->ip_address }}</td>
                                <td class="px-6 py-2 whitespace-nowrap">
                                    {{ $log->description }}
                                </td>
                                <td class="px-6 py-2 whitespace-nowrap">{{ $log->route }}</td>
                                <td class="px-6 py-2 whitespace-nowrap uppercase">{{ $log->method }}</td>
                                <td class="px-6 py-2 whitespace-nowrap">
                                    {{ $log->created_at->format('d M Y, H:i A') }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-dashboard.layout>
