@props(['title'])

<div x-show="open" @click.away="open = false"
        x-transition:enter="transition ease duration-200"
        x-transition:enter-start="translate-x-100 opacity-0"
        x-transition:enter-end="translate-x-0 opacity-100"
        x-transition:leave="transform transition duration-200"
        x-transition:leave-start="translate-x-0 opacity-100"
        x-transition:leave-end="translate-x-100 opacity-0"
        class=" absolute top-0 right-0 w-[400px] h-full flex flex-col z-30 p-5 bg-black text-white">
        <div class="w-full flex justify-between items-center">
            <h2 class="text-xl font-medium">{{ $title }}</h2>
            <x-heroicon-s-x-mark @click="open = false" class="w-6 h-6 cursor-pointer"/>
        </div>

        <div class="py-5 w-full h-full">
                {{ $slot }}
        </div>
    
</div>