@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

    {{-- ================= GUEST WARNING ================= --}}
    @if($mode === 'guest')
        <div class="bg-yellow-100 border border-yellow-300
                                        text-yellow-800 px-4 py-3 rounded-lg mb-6">
            ⚠️ Mode <b>Tamu</b> aktif.
            Progres dan skor tidak disimpan.
            <a href="{{ route('login') }}" class="underline font-semibold">
                Login Google
            </a> untuk melanjutkan belajar.

        </div>
    @endif

    {{-- ================= HEADER USER ================= --}}
    @auth
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 mb-6">

            <div class="flex items-center gap-3">
                <div class="relative">
                    <label class="cursor-pointer relative block">
                        <input type="checkbox" class="peer hidden">

                        <!-- Avatar -->
                        <img src="{{ asset('avatars/' . (auth()->user()->avatar ?? 'default.png')) }}" class="w-14 h-14 sm:w-16 sm:h-16
                                                    rounded-full border-2 border-gray-300
                                                    shadow object-cover
                                                    transition-all duration-300 ease-out

                                                    peer-checked:fixed
                                                    peer-checked:top-1/2
                                                    peer-checked:left-1/2
                                                    peer-checked:-translate-x-1/2
                                                    peer-checked:-translate-y-1/2
                                                    peer-checked:scale-[3]
                                                    peer-checked:z-50
                                                    peer-checked:border-4
                                                    peer-checked:border-white">
                    </label>

                    <!-- ICON EDIT -->
                    <a href="{{ route('avatar.edit') }}" class="absolute -bottom-1 -right-1
                                            w-7 h-7
                                            bg-yellow-400 text-black
                                            rounded-full
                                            flex items-center justify-center
                                            shadow
                                            hover:bg-yellow-500 transition" title="Edit Avatar">

                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="1.8">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M16.862 4.487a2.1 2.1 0 0 1 2.97 2.97L7.125 20.164H4v-3.125L16.862 4.487z" />
                        </svg>
                    </a>
                </div>

                <div>
                    <h2 class="text-lg sm:text-xl font-bold">
                        {{ auth()->user()->name }}
                    </h2>
                    <p class="text-sm text-gray-500">
                        Selamat datang, guys 👋
                    </p>
                </div>
            </div>

        </div>
    @endauth

    {{-- ================= TITLE ================= --}}
    <h2 class="text-xl sm:text-2xl font-bold mb-6">
        Dashboard
    </h2>

    {{-- ================= MENU CARDS ================= --}}
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">

        {{-- LEVEL --}}

        @if($mode === 'guest')
            <div onclick="guestWarning()" class="group bg-white p-4 rounded-xl border border-gray-200
                                            opacity-60 cursor-not-allowed">

                <div class="flex items-center gap-3">
                    <div class="p-2 rounded-lg bg-yellow-100 text-yellow-500">
                        <!-- icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="1.5">
                            <path d="M2 19a2 2 0 0 1 2-2h16" />
                            <path d="M2 5a2 2 0 0 1 2-2h16v16H4a2 2 0 0 0-2 2z" />
                        </svg>
                    </div>

                    <div>
                        <h3 class="font-semibold text-sm text-gray-800">Mulai</h3>
                        <p class="text-xs text-gray-500">Login untuk membuka</p>
                    </div>
                </div>
            </div>
        @else
            <a href="{{ route('level.index') }}" class="group bg-white p-4 rounded-xl border border-gray-200
                                        hover:border-yellow-400 hover:shadow-md transition">

                <div class="flex items-center gap-3">
                    <div class="p-2 rounded-lg bg-yellow-100 text-yellow-500
                                                    group-hover:bg-yellow-400 group-hover:text-white transition">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="1.5">
                            <path d="M2 19a2 2 0 0 1 2-2h16" />
                            <path d="M2 5a2 2 0 0 1 2-2h16v16H4a2 2 0 0 0-2 2z" />
                        </svg>
                    </div>

                    <div>
                        <h3 class="font-semibold text-sm text-gray-800">Mulai</h3>
                        <p class="text-xs text-gray-500">Pilih materi belajar</p>
                    </div>
                </div>
            </a>
        @endif





        {{-- RUN CODE --}}
        <a href="{{ route('run-code.index') }}" class="group bg-white p-4 rounded-xl border border-gray-200
                          hover:border-yellow-400 hover:shadow-md
                          transition">

            <div class="flex items-center gap-3">
                <div class="p-2 rounded-lg bg-yellow-100 text-yellow-500
                                    group-hover:bg-yellow-400 group-hover:text-white transition">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="1.2">
                        <path d="M11.5 17h-7.5a1 1 0 0 1-1-1v-12a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1v9" />
                        <path d="M3 13h18" />
                        <path d="M20 21l2-2-2-2" />
                        <path d="M17 17l-2 2 2 2" />
                    </svg>
                </div>

                <div>
                    <h3 class="font-semibold text-sm text-gray-800">Run Code</h3>
                    <p class="text-xs text-gray-500">Latihan langsung</p>
                </div>
            </div>
        </a>

        {{-- SCORE --}}

        @if($mode === 'guest')
            <div onclick="guestWarning()" class="group bg-white p-4 rounded-xl border border-gray-200
                                            opacity-60 cursor-not-allowed">

                <div class="flex items-center gap-3">
                    <div class="p-2 rounded-lg bg-yellow-100 text-yellow-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="1.2">
                            <rect x="4" y="3" width="16" height="18" rx="2" />
                            <path d="M8 7h8" />
                            <path d="M8 11h5" />
                            <path d="M15 11h1" />
                            <path d="M8 14h5" />
                            <path d="M15 14h1" />
                        </svg>
                    </div>

                    <div>
                        <h3 class="font-semibold text-sm text-gray-800">Skor & Progres</h3>
                        <p class="text-xs text-gray-500">Login untuk melihat</p>
                    </div>
                </div>
            </div>
        @else
            <a href="{{ route('scores.index') }}" class="group bg-white p-4 rounded-xl border border-gray-200
                                        hover:border-yellow-400 hover:shadow-md transition">

                <div class="flex items-center gap-3">
                    <div class="p-2 rounded-lg bg-yellow-100 text-yellow-500
                                                    group-hover:bg-yellow-400 group-hover:text-white transition">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="1.2">
                            <rect x="4" y="3" width="16" height="18" rx="2" />
                            <path d="M8 7h8" />
                            <path d="M8 11h5" />
                            <path d="M15 11h1" />
                            <path d="M8 14h5" />
                            <path d="M15 14h1" />
                        </svg>
                    </div>

                    <div>
                        <h3 class="font-semibold text-sm text-gray-800">Skor & Progres</h3>
                        <p class="text-xs text-gray-500">Hasil belajar</p>
                    </div>
                </div>
            </a>
        @endif





    </div>

    {{-- ================= FLOATING ABOUT ================= --}}
    <a href="{{ route('about.index') }}" class="fixed bottom-20 right-6
                      w-11 h-11
                      bg-yellow-400 text-black
                      rounded-full
                      flex items-center justify-center
                      shadow-lg
                      hover:bg-yellow-500 hover:scale-105
                      transition" title="Tentang Pengembang">

        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <polyline points="3 8 6 12 3 16" />
            <polyline points="21 8 18 12 21 16" />
            <circle cx="12" cy="8" r="3" />
            <path d="M6 21v-1a6 6 0 0 1 12 0v1" />
        </svg>
    </a>

    <script>
        function guestWarning() {
            alert('⚠️ Fitur ini hanya tersedia untuk pengguna login.\nSilakan login untuk menyimpan progres dan skor.');
        }
    </script>


@endsection