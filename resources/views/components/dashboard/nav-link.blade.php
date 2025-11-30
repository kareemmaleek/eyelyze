@props(['active' => false])

<a {{ $attributes }}>
    <div
        class="{{ $active ? 'rounded-lg bg-lime-100' : 'hover:rounded-lg hover:bg-lime-100' }} my-1 flex w-full items-center gap-2 p-2 px-5"
    >
        {{ $slot }}
    </div>
</a>
