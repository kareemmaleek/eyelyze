<x-slidePopup show="editOpen" title="Edit User">
    <form :action="'/users/edit/' + editData.id" method="POST">
        @csrf
        @method('PUT')
        
        <p class="text-sm font-light py-4">Update user information.</p>

        <label for="email" class="text-[10px] text-lime-100 font-semibold uppercase tracking-widest">
            <span class="text-red-400">*</span>email address
        </label>
        <input type="email" 
               name="email" 
               x-model="editData.email" 
               required
               class="w-full outline-none focus:ring-2 focus:ring-lime-100 my-2 p-1 px-3 text-sm font-medium ring ring-white rounded-md" 
               placeholder="johndoe@ex.com">

        <label for="username" class="text-[10px] text-lime-100 font-semibold uppercase tracking-widest">
            <span class="text-red-400">*</span>username
        </label>
        <input type="text" 
               name="username" 
               x-model="editData.username" 
               required
               class="w-full outline-none focus:ring-2 focus:ring-lime-100 my-2 p-1 px-3 text-sm font-medium ring ring-white rounded-md" 
               placeholder="johndoe33">

        @if (Auth::user()->role === 1)
            <label for="role" class="text-[10px] text-lime-100 font-semibold uppercase tracking-widest">
                <span class="text-red-400">*</span>Role
            </label>
            <select name="role" 
                    x-model="editData.role"
                    required
                    class="w-full outline-none focus:ring-2 focus:ring-lime-100 my-2 p-1 px-3 text-sm font-medium ring ring-white rounded-md">
                <option disabled>Please select account role...</option>
                <option value="1" class="text-black">Administrator</option>
                <option value="0" class="text-black">User</option>
            </select>
        @endif

        <label for="password" class="text-[10px] text-lime-100 font-semibold uppercase tracking-widest">
            new password (optional)
        </label>
        <input type="password" 
               name="password"
               class="w-full outline-none focus:ring-2 focus:ring-lime-100 my-2 p-1 px-3 text-sm font-medium ring ring-white rounded-md" 
               placeholder="Leave blank to keep current">

        <label for="password_confirmation" class="text-[10px] text-lime-100 font-semibold uppercase tracking-widest">
            confirm new password
        </label>
        <input type="password" 
               name="password_confirmation"
               class="w-full outline-none focus:ring-2 focus:ring-lime-100 my-2 p-1 px-3 text-sm font-medium ring ring-white rounded-md" 
               placeholder="******">

        <button type="submit"
                class="w-full p-1 px-3 my-3 flex justify-center items-center gap-1 rounded-md text-sm text-black bg-[var(--mainColor)] hover:opacity-90 transition ease-in cursor-pointer">
            <x-heroicon-o-user class="w-4 h-4"/>
            Update User
        </button>
    </form>
</x-slidePopup>
