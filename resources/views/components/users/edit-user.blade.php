<x-slidePopup show="editOpen" title="Edit User">
    <form :action="'/users/' + editData.uid" method="POST">
        @csrf
        @method('PUT')

        <p class="py-4 text-sm font-light">Update user information.</p>

        <label for="fullname" class="text-[10px] font-semibold tracking-widest text-lime-100 uppercase">
            <span class="text-red-400">*</span>
            fullname
        </label>
        <input
            type="text"
            name="fullname"
            x-model="editData.name"
            required
            class="my-2 w-full rounded-md p-1 px-3 text-sm font-medium ring ring-white outline-none focus:ring-2 focus:ring-lime-100"
            placeholder="John Doe"
        />

        <label for="email" class="text-[10px] font-semibold tracking-widest text-lime-100 uppercase">
            <span class="text-red-400">*</span>
            email address
        </label>
        <input
            type="email"
            name="email"
            x-model="editData.email"
            required
            class="my-2 w-full rounded-md p-1 px-3 text-sm font-medium ring ring-white outline-none focus:ring-2 focus:ring-lime-100"
            placeholder="johndoe@ex.com"
        />

        <label for="username" class="text-[10px] font-semibold tracking-widest text-lime-100 uppercase">
            <span class="text-red-400">*</span>
            username
        </label>
        <input
            type="text"
            name="username"
            x-model="editData.username"
            required
            class="my-2 w-full rounded-md p-1 px-3 text-sm font-medium ring ring-white outline-none focus:ring-2 focus:ring-lime-100"
            placeholder="johndoe33"
        />

        @if (Auth::user()->role === 1)
            <label for="role" class="text-[10px] font-semibold tracking-widest text-lime-100 uppercase">
                <span class="text-red-400">*</span>
                Role
            </label>
            <select
                name="role"
                x-model="editData.role"
                required
                class="my-2 w-full rounded-md p-1 px-3 text-sm font-medium ring ring-white outline-none focus:ring-2 focus:ring-lime-100"
            >
                <option disabled>Please select account role...</option>
                <option value="1" class="text-black">Administrator</option>
                <option value="0" class="text-black">User</option>
            </select>
        @endif

        <label for="password" class="text-[10px] font-semibold tracking-widest text-lime-100 uppercase">
            new password (optional)
        </label>
        <input
            type="password"
            name="password"
            class="my-2 w-full rounded-md p-1 px-3 text-sm font-medium ring ring-white outline-none focus:ring-2 focus:ring-lime-100"
            placeholder="Leave blank to keep current"
        />

        <label for="password_confirmation" class="text-[10px] font-semibold tracking-widest text-lime-100 uppercase">
            confirm new password
        </label>
        <input
            type="password"
            name="password_confirmation"
            class="my-2 w-full rounded-md p-1 px-3 text-sm font-medium ring ring-white outline-none focus:ring-2 focus:ring-lime-100"
            placeholder="******"
        />

        <button
            type="submit"
            class="my-3 flex w-full cursor-pointer items-center justify-center gap-1 rounded-md bg-[var(--mainColor)] p-1 px-3 text-sm text-black transition ease-in hover:opacity-90"
        >
            <x-heroicon-o-user class="h-4 w-4" />
            Update User
        </button>
    </form>
</x-slidePopup>
