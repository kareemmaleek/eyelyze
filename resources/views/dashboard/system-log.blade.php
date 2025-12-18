<x-dashboard.layout>
    <div class="flex h-full flex-col p-5">
        <div class="mb-5 flex h-fit w-full shrink-0 justify-between">
            <div class="w-fit">
                <h2 class="text-2xl font-medium">System Log</h2>
            </div>
        </div>

        <div class="flex w-full flex-1 flex-col rounded-lg bg-white p-5">
            <div class="relative mb-3 min-w-full max-w-[700px] flex-1 overflow-x-auto rounded-lg border">
                <table class="table-auto text-left text-sm">
                    <thead class="text-body sticky top-0 z-10 border-b bg-lime-100 text-sm">
                        <tr>
                            <th class="bg-lime-100 px-6 py-2 font-medium">User Email</th>
                            <th class="whitespace-nowrap bg-lime-100 px-6 py-2 font-medium">IP Address</th>
                            <th class="whitespace-nowrap bg-lime-100 px-6 py-2 font-medium">Description</th>
                            <th class="whitespace-nowrap bg-lime-100 px-6 py-2 font-medium">Route</th>
                            <th class="whitespace-nowrap bg-lime-100 px-6 py-2 font-medium">Method</th>
                            <th class="whitespace-nowrap bg-lime-100 px-6 py-2 font-medium">Created At</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($data as $log)
                            <tr class="border-b bg-white hover:bg-gray-100">
                                <th class="whitespace-nowrap px-6 py-2">
                                    {{ $log->userRelation->email }}
                                </th>
                                <td class="whitespace-nowrap px-6 py-2">{{ $log->ip_address }}</td>
                                <td class="whitespace-nowrap px-6 py-2">
                                    {{ $log->description }}
                                </td>
                                <td class="whitespace-nowrap px-6 py-2">{{ $log->route }}</td>
                                <td class="whitespace-nowrap px-6 py-2 uppercase">{{ $log->method }}</td>
                                <td class="whitespace-nowrap px-6 py-2">
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
