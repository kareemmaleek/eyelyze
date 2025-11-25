<x-slidePopup title="Add User">

    <p class="text-sm font-light py-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore aliquid fugit totam rerum veniam magnam.</p>

    <label for="email" class="text-[10px] text-lime-100 font-semibold uppercase tracking-widest"><span class="text-red-400">*</span>email address</label>
    <input type="email" name="email" value="{{ old('email') }}" class="w-full outline-none focus:ring-2 focus:ring-lime-100 my-2 p-1 px-3 text-sm font-medium ring ring-white rounded-md" placeholder="johndoe@ex.com">

    <label for="username" class="text-[10px] text-lime-100 font-semibold uppercase tracking-widest"><span class="text-red-400">*</span>username</label>
    <input type="username" name="username" value="{{ old('username') }}" class="w-full outline-none focus:ring-2 focus:ring-lime-100 my-2 p-1 px-3 text-sm font-medium ring ring-white rounded-md" placeholder="johndoe33">

    @if (Auth::user()->role === 1)
        <label for="role" class="text-[10px] text-lime-100 font-semibold uppercase tracking-widest"><span class="text-red-400">*</span>Role</label>
        <select type="username" name="username" value="{{ old('username') }}" class="w-full outline-none focus:ring-2 focus:ring-lime-100 my-2 p-1 px-3 text-sm font-medium ring ring-white rounded-md" placeholder="johndoe33">
            <option disabled selected>Please select account role...</option>
            <option value="1" class="text-black">Administrator</option>
            <option value="0" class="text-black">User</option>
        </select>
    @endif
    

    <label for="password" class="text-[10px] text-lime-100 font-semibold uppercase tracking-widest"><span class="text-red-400">*</span>password</label>
    <input type="password" name="password" class="w-full outline-none focus:ring-2 focus:ring-lime-100 my-2 p-1 px-3 text-sm font-medium ring ring-white rounded-md" placeholder="******">

    <label for="confirm_password" class="text-[10px] text-lime-100 font-semibold uppercase tracking-widest"><span class="text-red-400">*</span>confirm password</label>
    <input type="confirm_password" name="confirm_password" class="w-full outline-none focus:ring-2 focus:ring-lime-100 my-2 p-1 px-3 text-sm font-medium ring ring-white rounded-md" placeholder="******">

    <div class="w-full p-1 px-3 my-3 flex justify-center items-center gap-1 rounded-full text-sm text-black bg-[var(--mainColor)] hover:opacity-90 transition ease-in cursor-pointer">
        <x-heroicon-o-user class="w-4 h-4"/>
        Add User
    </div>

    
</x-slidePopup>