@foreach (['success', 'warning', 'error'] as $flash)
    @if ($msg = Session::get($flash))
        <div id="flash_msg"
            class="{{ $flash == 'success' ? 'bg-green-200/90 text-green-800 border-green-500 font-semibold' : ($flash == 'error' ? 'bg-red-300' : 'bg-orange-300') }}
    flex items-center justify-between px-5 py-2  fixed right-5 top-5 rounded-xl border
    opacity-0 scale-95 transition-all duration-500 ease-out">
            <div class="flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-check2-circle" viewBox="0 0 16 16">
                    <path
                        d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0" />
                    <path
                        d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0z" />
                </svg>
                <h1 class="text-xl">{{ $msg }}</h1>
            </div>
            <button class="text-black/50" id="flash_close">X</button>
        </div>
    @endif
@endforeach