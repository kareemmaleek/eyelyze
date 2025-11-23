@props(['active' => false])

<a {{ $attributes }} >
    <div class="w-full p-2 px-5 my-1 flex gap-2 items-center {{ $active ? 'rounded-lg bg-lime-100' : 'hover:rounded-lg hover:bg-lime-100' }} ">
       {{ $slot }}
    </div>
</a>