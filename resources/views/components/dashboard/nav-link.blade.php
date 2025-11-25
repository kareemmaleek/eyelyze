@props(['active' => false])

<a {{ $attributes }}>
    <div
        class="w-full p-2 px-5 my-1 flex gap-2 items-center {{ $active ? 'rounded-lg bg-lime-50' : 'hover:rounded-lg hover:bg-lime-50' }} ">
        {{ $slot }}
    </div>
</a>
