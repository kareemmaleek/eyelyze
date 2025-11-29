<x-slidePopup show="createOpen" title="Add New User">
    <form action="{{ route('users.post') }}" method="POST">
        @csrf
        
        <p class="text-sm font-light py-4">Create a new user account.</p>

        <label for="fullname" class="text-[10px] text-lime-100 font-semibold uppercase tracking-widest">
            <span class="text-red-400">*</span>fullname
        </label>
        <input type="text" name="fullname" value="{{ old('fullname') }}" required
               class="w-full outline-none focus:ring-2 focus:ring-lime-100 my-2 p-1 px-3 text-sm font-medium ring ring-white rounded-md" 
               placeholder="John Doe">

        <label for="email" class="text-[10px] text-lime-100 font-semibold uppercase tracking-widest">
            <span class="text-red-400">*</span>email address
        </label>
        <input type="email" name="email" value="{{ old('email') }}" required
               class="w-full outline-none focus:ring-2 focus:ring-lime-100 my-2 p-1 px-4 text-sm font-medium ring ring-white rounded-md" 
               placeholder="johndoe@ex.com">

        <label for="username" class="text-[10px] text-lime-100 font-semibold uppercase tracking-widest">
            <span class="text-red-400">*</span>username
        </label>
        <input type="text" name="username" value="{{ old('username') }}" required
               class="w-full outline-none focus:ring-2 focus:ring-lime-100 my-2 p-1 px-3 text-sm font-medium ring ring-white rounded-md" 
               placeholder="johndoe33">

        @if (Auth::user()->role === 1)
            <label for="role" class="text-[10px] text-lime-100 font-semibold uppercase tracking-widest">
                <span class="text-red-400">*</span>Role
            </label>
            <select name="role" required
                    class="w-full outline-none focus:ring-2 focus:ring-lime-100 my-2 p-1 px-3 text-sm font-medium ring ring-white rounded-md">
                <option disabled selected>Please select account role...</option>
                <option value="1" class="text-black">Administrator</option>
                <option value="0" class="text-black">User</option>
            </select>
        @endif

        <label for="password" class="text-[10px] text-lime-100 font-semibold uppercase tracking-widest">
            <span class="text-red-400">*</span>password
        </label>
        <input type="password" name="password" required
               class="w-full outline-none focus:ring-2 focus:ring-lime-100 my-2 p-1 px-3 text-sm font-medium ring ring-white rounded-md" 
               placeholder="******">

        <label for="password_confirmation" class="text-[10px] text-lime-100 font-semibold uppercase tracking-widest">
            <span class="text-red-400">*</span>confirm password
        </label>
        <input type="password" name="password_confirmation" required
               class="w-full outline-none focus:ring-2 focus:ring-lime-100 my-2 p-1 px-3 text-sm font-medium ring ring-white rounded-md" 
               placeholder="******">

        <button type="submit"
                class="w-full p-1 px-3 my-3 flex justify-center items-center gap-1 rounded-md text-sm text-black bg-[var(--mainColor)] hover:opacity-90 transition ease-in cursor-pointer">
            <x-heroicon-o-user class="w-4 h-4"/>
            Add User
        </button>
    </form>
</x-slidePopup>
