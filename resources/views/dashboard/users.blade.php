<x-dashboard.layout>
    <div
        x-data="{
            createOpen: false,
            editOpen: false,
            editData: {
                uid: '',
                name: '',
                username: '',
                email: '',
                role: 0,
            },
            openCreate() {
                this.createOpen = true
                this.editOpen = false // Tutup edit jika buka create
            },
            openEdit(user) {
                this.editData = {
                    uid: user.uid,
                    name: user.name,
                    username: user.username,
                    email: user.email,
                    role: user.role,
                }
                this.editOpen = true
                this.createOpen = false // Tutup create jika buka edit
            },
        }"
        class="flex h-full flex-col p-5"
    >
        <div class="mb-5 flex h-fit w-full shrink-0 justify-between">
            <div class="w-fit">
                <h2 class="text-2xl font-medium">Users</h2>
            </div>

            <div class="w-fit">
                <button
                    @click="openCreate()"
                    class="flex w-fit cursor-pointer items-center gap-1 rounded-md bg-[var(--mainColor)] p-2 px-5 text-sm transition ease-in hover:opacity-90"
                >
                    <x-heroicon-o-user class="h-4 w-4" />
                    Add User
                </button>
            </div>
        </div>

        <div class="flex w-full flex-1 flex-col overflow-auto rounded-lg bg-white p-5">
            <div class="relative mb-3 w-full flex-1 overflow-auto rounded-lg border">
                <table class="w-full text-left text-sm">
                    <thead class="text-body sticky top-0 z-10 border-b bg-lime-100 text-sm">
                        <tr>
                            <th scope="col" class="bg-lime-100 px-6 py-2 font-medium">
                                <a href="{{ route('users', [
                                    'sortBy' => 'name',
                                    'sortDir' => ($sortBy === 'name' && $sortDir === 'desc') ? 'asc' : 'desc'
                                ]) }}" class="flex gap-2 items-center hover:underline-offset-2 hover:underline">
                                    Full Name
                                    @if($sortBy == 'name' && $sortDir == 'asc')
                                        <x-heroicon-s-chevron-up class='w-3 h-3'/>
                                        @else
                                        <x-heroicon-s-chevron-down class='w-3 h-3'/>
                                    @endif
                                </a>
                            </th>
                            <th scope="col" class="bg-lime-100 px-6 py-2 font-medium">Username</th>
                            <th scope="col" class="bg-lime-100 px-6 py-2 font-medium">
                                <a href="{{ route('users', [
                                    'sortBy' => 'email',
                                    'sortDir' => ($sortBy === 'email' && $sortDir === 'desc') ? 'asc' : 'desc'
                                ]) }}" class="flex gap-2 items-center hover:underline-offset-2 hover:underline">
                                    Email
                                    @if($sortBy == 'email' && $sortDir == 'asc')
                                        <x-heroicon-s-chevron-up class='w-3 h-3'/>
                                        @else
                                        <x-heroicon-s-chevron-down class='w-3 h-3'/>
                                    @endif
                                </a>
                            </th>
                            <th scope="col" class="bg-lime-100 px-6 py-2 font-medium">
                                <a href="{{ route('users', [
                                    'sortBy' => 'created_at',
                                    'sortDir' => ($sortBy === 'created_at' && $sortDir === 'desc') ? 'asc' : 'desc'
                                ]) }}" class="flex gap-2 items-center hover:underline-offset-2 hover:underline">
                                    Created At
                                    @if($sortBy == 'created_at' && $sortDir == 'asc')
                                        <x-heroicon-s-chevron-up class='w-3 h-3'/>
                                        @else
                                        <x-heroicon-s-chevron-down class='w-3 h-3'/>
                                    @endif
                                </a>
                            </th>
                            @if (Auth::user()->role === 1)
                                <th scope="col" class="bg-lime-100 px-6 py-2 font-medium">Role</th>
                                <th scope="col" class="bg-lime-100 px-6 py-2 font-medium">Action</th>
                            @endif
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr class="border-b bg-white hover:bg-gray-100">
                                <th scope="row" class="px-6 py-2 font-medium whitespace-nowrap">
                                    {{ $user->name }}
                                </th>
                                <td class="px-6 py-2">{{ $user->username }}</td>
                                <td class="px-6 py-2">{{ $user->email }}</td>
                                <td class="px-6 py-2">{{ $user->created_at->format('d M Y, H:i A') }}</td>
                                @if (Auth::user()->role === 1)
                                    <td class="px-6 py-2 uppercase">{{ $user->role === 1 ? "admin" : 'user' }}</td>
                                    <td class="px-6 py-2">
                                        <button
                                            @click="openEdit({

                                        uid: '{{ $user->uid }}',
                                        name: '{{ addslashes($user->name) }}',
                                        username: '{{ $user->username }}',
                                        email: '{{ $user->email }}',
                                        role: {{ $user->role }}
                                    })"
                                            class="cursor-pointer rounded-md bg-[var(--mainColor)] px-3 py-2 text-xs hover:opacity-90"
                                        >
                                            Edit
                                        </button>
                                    </td>
                                @endif
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            {{ $users->onEachSide(1)->links('pagination::tailwind') }}
        </div>

        <!-- Modals - PENTING: Tanpa wrapper div tambahan -->
        <x-users.add-user />
        <x-users.edit-user />
    </div>
</x-dashboard.layout>
