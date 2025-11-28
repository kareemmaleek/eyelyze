@props(['show' => 'false', 'title' => 'Slide Panel'])

<div x-show="{{ $show }}" 
     @click.away="{{ $show }} = false"
     x-transition:enter="transition ease duration-200"
     x-transition:enter-start="translate-x-full opacity-0"
     x-transition:enter-end="translate-x-0 opacity-100"
     x-transition:leave="transform transition duration-200"
     x-transition:leave-start="translate-x-0 opacity-100"
     x-transition:leave-end="translate-x-full opacity-0"
     class="fixed top-0 right-0 w-[400px] h-full flex flex-col z-50 p-5 bg-black text-white shadow-2xl">
    
    <div class="w-full flex justify-between items-center">
        <h2 class="text-xl font-medium">{{ $title }}</h2>
        <x-heroicon-s-x-mark @click="{{ $show }} = false" class="w-6 h-6 cursor-pointer hover:text-gray-300"/>
    </div>

    <div class="py-5 w-full h-full">
        {{ $slot }}
    </div>
</div>
