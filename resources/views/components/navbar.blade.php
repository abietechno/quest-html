<nav class="bg-white text-yellow-400 px-6 py-5 shadow-md">
    <div class="flex justify-between items-center">

        <!-- Brand -->
        <a href="{{ route('dashboard') }}" class="font-bold text-xl md:text-2xl flex items-center gap-3">
            <img src="{{ asset('icon.png') }}" alt="HTML Hotel Quest Logo"
                class="h-12 w-12 md:h-14 md:w-14 object-contain">
            <span>HTML Hotel Quest</span>
        </a>

        <!-- Menu Desktop -->
        <div class="flex items-center gap-5">
            @auth
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="bg-yellow-400 text-black px-5 py-2 rounded-lg
                                   font-semibold
                                   hover:bg-yellow-500 transition">
                        Logout
                    </button>
                </form>
            @else
                <a href="{{ route('login') }}" class="flex items-center gap-2 bg-white text-black
                              px-5 py-2 rounded-lg
                              hover:bg-gray-100 transition">
                    <!-- Google Logo -->
                    <svg class="w-5 h-5" viewBox="0 0 48 48">
                        <path fill="#EA4335"
                            d="M24 9.5c3.54 0 6.7 1.22 9.19 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.09 17.74 9.5 24 9.5z" />
                        <path fill="#4285F4"
                            d="M46.5 24c0-1.67-.15-3.27-.43-4.82H24v9.14h12.7c-.55 2.96-2.22 5.47-4.7 7.17l7.2 5.6C43.6 36.88 46.5 30.93 46.5 24z" />
                        <path fill="#FBBC05"
                            d="M10.54 28.41A14.5 14.5 0 0 1 9.5 24c0-1.53.27-3.01.76-4.41l-7.98-6.19A23.95 23.95 0 0 0 0 24c0 3.94.95 7.66 2.64 10.97l7.9-6.56z" />
                        <path fill="#34A853"
                            d="M24 48c6.48 0 11.93-2.13 15.9-5.78l-7.2-5.6c-2 1.35-4.56 2.15-8.7 2.15-6.26 0-11.57-3.59-13.46-8.91l-7.9 6.56C6.51 42.62 14.62 48 24 48z" />
                    </svg>
                    <span class="font-medium">Login</span>
                </a>
            @endauth
        </div>
    </div>
</nav>