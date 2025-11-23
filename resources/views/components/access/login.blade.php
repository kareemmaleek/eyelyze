<div class="w-6/12 h-full flex justify-center items-center p-5">
    <div class="w-full h-fit">
        {{-- <h1 class="text-lime-500 font-medium text-xl mb-3">Eyelyze</h1> --}}
        <x-heroicon-s-map class="w-12 h-12 text-lime-400 p-0 m-0"/>
        <h3 class="text-sm">Let's get started!</h3>
        <h2 class="font-bold text-2xl">Log In</h2>

        <div class="py-3">
        <form action="" method="POST">
            @csrf 
            <label for="email" class="text-[10px] font-semibold uppercase tracking-widest py-1">email address</label>
            <input type="email" name="email" id="email" value="{{ old('email') }}" class="w-full outline-none focus:ring-2 p-2 px-5 text-sm font-medium ring ring-lime-200 rounded-lg" placeholder="johndoe@ex.com">

            <label for="password" class="text-[10px] font-semibold uppercase tracking-widest py-1">password</label>
            <input type="password" name="password" id="password" class="w-full outline-none focus:ring-2 p-2 px-5 text-sm font-medium ring ring-lime-200 rounded-lg" placeholder="******">

            <div class="w-full h-fit my-3 flex justify-between items-center">
                <button type="submit" class="p-2  px-10 w-fit text-white font-medium shadow-md bg-linear-45 from-[#DCE35B] to-[#45B649] rounded-lg cursor-pointer hover:to-[#DCE35B] hover:from-[#45B649] transition ease-in">Log In</button>

                <a href="#" class="text-xs underline hover:text-lime-500 cursor-pointer">Forgot password?</a>
            </div>
        </form>

        <p class="text-xs text-gray-500">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aspernatur ipsam aperiam amet iure similique est laudantium! Numquam vitae quo ad.</p>

        </div>
    </div>
</div>