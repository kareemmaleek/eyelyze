<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    


   
    <title>Eyelyze Access</title>
</head>

<body class="bg-[var(--bgColor)] text-gray-800 m-0 p-0 overflow-x-hidden">

    

    <div class="w-full h-dvh flex justify-center items-center">
        @include('components._messageFlash')

        <div class="w-7/12 h-8/12 rounded-lg bg-white shadow-md flex p-2">
            <div class="relative w-6/12 h-full rounded-lg bg-linear-30 from-[#DCE35B] to-[#45B649] overflow-hidden p-5">
                
                <img src="https://images.unsplash.com/photo-1486649567693-aaa9b2e59385?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="" class="absolute inset-0 w-full h-full object-cover opacity-30">

                <div class="relative w-full h-full">
                     <h3 class="text-3xl text-white font-medium">Eyelyze</h3>
                     <div class="absolute bottom-3 left-0 text-white">
                        <p class="text-sm mb-3 font-light">Let's get started</p>
                        <p class="font-medium">Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, praesentium!</p>
                     </div>
                     
                </div>
               
            </div>

            <x-access.login></x-access.login>

        </div>
    </div>

    <script type="text/javascript">
        function showToast(message) {
        const t = document.getElementById('toast');

        t.classList.remove('hidden');

        setTimeout(() => {
            t.classList.add('hidden');
        }, 2000);
}
    </script>
</body>

</html>
