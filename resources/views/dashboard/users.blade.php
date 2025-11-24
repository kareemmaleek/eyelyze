<x-dashboard.layout>

    <div class="relative w-full h-full p-5 pt-8 flex flex-col">
        <div class="w-full h-fit flex justify-between mb-5">
            <div class="w-fit">
                <h2 class="text-3xl font-medium">Users</h2>
            </div>

           <div x-data="{ open: false }" class="w-fit">
    <div @click="open = !open"
         class="w-fit p-2 px-5 flex items-center gap-1 rounded-full text-sm bg-[var(--mainColor)] hover:opacity-90 transition ease-in cursor-pointer">
        <x-heroicon-o-user class="w-4 h-4"/>
        Add User
    </div>

    <x-users.add-user></x-users.add-user>
</div>

            
        </div>

        <div class="w-full h-full rounded-lg bg-white">

        </div>
    </div>
</x-dashboard.layout>