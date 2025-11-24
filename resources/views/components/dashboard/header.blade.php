<div x-data="{ open: false }" class="relative w-full h-14 bg-white flex p-1 px-10 justify-end items-center">
    <div @click="open = !open" class="w-fit h-full flex gap-2 items-center cursor-pointer">
        <img src="https://picsum.photos/100" alt="" class="w-10 h-10 rounded-full">
        <div class="w-fit h-full flex flex-col justify-center">
            <div class="text-xs text-gray-400">Welcome,</div>
            <div class="text-xs text-transparent bg-clip-text bg-linear-to-tr from-[#DCE35B] to-[#45B649] font-medium">{{ Auth::user()->name }}</div>
        </div>
        
        <x-heroicon-s-chevron-down class="w-4 h-4"/>
    </div>

    <div x-show="open" @click.away="open = false" x-transition class="absolute -bottom-20 right-5 z-50 w-38 h-fit bg-white rounded-lg p-2 shadow-lg">
        <div class="w-full h-fit text-sm p-2 hover:bg-lime-100 cursor-pointer rounded-lg flex gap-2 items-center">
            <x-heroicon-o-user-circle class="w-5 h-5 text-lime-600"/>
            Profile
        </div>
        <div @click="document.getElementById('logout').submit()" class="w-full h-fit text-sm p-2 hover:bg-lime-100 cursor-pointer rounded-lg flex gap-2 items-center">
            <x-heroicon-o-arrow-right-end-on-rectangle class="w-5 h-5 text-lime-600"/>
            Logout
        </div>
    </div>

    <form id="logout" method="POST" action="{{ route('proceed_logout') }}">
        @csrf
    </form>
</div>