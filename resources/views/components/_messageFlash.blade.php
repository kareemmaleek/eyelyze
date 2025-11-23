
 @if ($message = Session::get('error'))
    <div id="toast"
        class="hidden fixed top-5 left-1/2 -translate-x-1/2 bg-white px-4 py-2 rounded-md shadow-lg toast-ease text-sm">
        <div class="w-full flex gap-1 items-center">
            <x-heroicon-s-x-circle class="w-4 h-4 text-rose-400" />
            {{ $message }}
        </div>
    
    </div>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        showToast();
    });
    </script>
@endif


@if ($message = Session::get('success'))
    <div id="toast"
        class="hidden fixed top-5 left-1/2 -translate-x-1/2 bg-white px-4 py-2 rounded-md shadow-lg toast-ease text-sm z-50">
        <div class="w-full flex gap-1 items-center">
            <x-heroicon-s-check-circle class="w-4 h-4 text-emerald-400" />
            {{ $message }}
        </div>
    
    </div>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        showToast();
    });
    </script>
@endif
