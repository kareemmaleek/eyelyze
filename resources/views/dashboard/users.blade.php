<x-dashboard.layout>
    <div x-data="{
        createOpen: false, 
        editOpen: false, 
        editData: {
            id: null,
            name: '',
            username: '',
            email: '',
            role: 0
        },
        openCreate() {
            this.createOpen = true;
            this.editOpen = false;  // Tutup edit jika buka create
        },
        openEdit(user) {
            this.editData = {
                id: user.id,
                name: user.name,
                username: user.username,
                email: user.email,
                role: user.role
            };
            this.editOpen = true;
            this.createOpen = false;  // Tutup create jika buka edit
        }
    }" class="h-full flex flex-col p-5 pt-8">
        
        <div class="w-full h-fit flex justify-between mb-5 shrink-0">
            <div class="w-fit">
                <h2 class="text-3xl font-medium">Users</h2>
            </div>

            <div class="w-fit">
                <button @click="openCreate()"
                    class="w-fit p-2 px-5 flex items-center gap-1 rounded-md text-sm bg-[var(--mainColor)] hover:opacity-90 transition ease-in cursor-pointer">
                    <x-heroicon-o-user class="w-4 h-4" />
                    Add User
                </button>
            </div>
        </div>

        <div class="w-full flex-1 rounded-lg bg-white p-5 flex flex-col overflow-auto">

            <div class="flex-1 relative w-full rounded-lg border overflow-auto mb-3">

                 <table class="w-full text-sm text-left">
                    <thead class="text-sm text-body bg-lime-100 border-b sticky top-0 z-10">
                        <tr>
                            <th scope="col" class="px-6 py-2 font-medium bg-lime-100">Full Name</th>
                            <th scope="col" class="px-6 py-2 font-medium bg-lime-100">Username</th>
                            <th scope="col" class="px-6 py-2 font-medium bg-lime-100">Email</th>
                            <th scope="col" class="px-6 py-2 font-medium bg-lime-100">Created At</th>
                            @if (Auth::user()->role === 1)
                                <th scope="col" class="px-6 py-2 font-medium bg-lime-100">Action</th>
                            @endif
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $user)
                        <tr class="bg-white border-b hover:bg-gray-100">
                            <th scope="row" class="px-6 py-2 font-medium whitespace-nowrap">
                                {{ $user->name }}
                            </th>
                            <td class="px-6 py-2">{{ $user->username }}</td>
                            <td class="px-6 py-2">{{ $user->email }}</td>
                            <td class="px-6 py-2">{{ $user->created_at }}</td>
                            @if (Auth::user()->role === 1)
                                <td class="px-6 py-2">
                                    <button @click="openEdit({
                                        id: {{ $user->id }},
                                        name: '{{ addslashes($user->name) }}',
                                        username: '{{ $user->username }}',
                                        email: '{{ $user->email }}',
                                        role: {{ $user->role }}
                                    })" 
                                    class="px-3 py-2 rounded-md text-xs bg-[var(--mainColor)] cursor-pointer hover:opacity-90">
                                        Edit
                                    </button>
                                </td>
                            @endif
                        </tr>
                        @endforeach
                    </tbody>
                 </table>
            </div>

            {{ $data->onEachSide(1)->links() }}
        </div>
       

        <!-- Modals - PENTING: Tanpa wrapper div tambahan -->
        <x-users.add-user />
        <x-users.edit-user />
    </div>
</x-dashboard.layout>
