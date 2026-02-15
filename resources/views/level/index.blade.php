@extends('layouts.app')

@section('title', 'Level Pembelajaran')

@section('content')

    {{-- ================= BACK TO DASHBOARD ================= --}}
    <a href="{{ route('dashboard') }}" class="inline-flex items-center gap-2
              px-4 py-2 mb-4
              bg-gray-100 hover:bg-yellow-100
              rounded-lg text-sm font-medium
              transition">

        {{-- Arrow Left Icon --}}
        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor"
            stroke-width="2">
            <path d="M15 18l-6-6 6-6" />
        </svg>

        Dashboard
    </a>


    {{-- ================= TITLE ================= --}}
    <h2 class="text-xl sm:text-2xl font-bold mb-6 flex items-center gap-2">
        <span class="p-2 rounded-lg bg-yellow-100 text-yellow-500">
            {{-- Book Icon --}}
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                <path d="M4 19a2 2 0 0 1 2-2h14" />
                <path d="M4 5a2 2 0 0 1 2-2h14v16H6a2 2 0 0 0-2 2z" />
            </svg>
        </span>
        <span>Level Pembelajaran</span>
    </h2>

    <div class="space-y-4">

        {{-- ================= HASIL QUIZ ================= --}}
        @if(session('quiz_result'))
            <div class="mb-6 p-4 rounded-xl
                        bg-yellow-50 border border-yellow-400">

                <h4 class="font-bold text-gray-700 mb-2 flex items-center gap-2">
                    {{-- Chart Icon --}}
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="1.5">
                        <path d="M3 3v18h18" />
                        <path d="M7 14v4" />
                        <path d="M12 10v8" />
                        <path d="M17 6v12" />
                    </svg>
                    Hasil Quiz Terakhir
                </h4>

                <div class="grid grid-cols-2 sm:grid-cols-4 gap-4 text-sm">

                    <div class="bg-white rounded-lg p-3 text-center border border-green-400">
                        <p class="text-gray-500">Benar</p>
                        <p class="text-lg font-bold text-green-600">
                            {{ session('quiz_result.correct') }}
                        </p>
                    </div>

                    <div class="bg-white rounded-lg p-3 text-center border border-red-400">
                        <p class="text-gray-500">Salah</p>
                        <p class="text-lg font-bold text-red-500">
                            {{ session('quiz_result.wrong') }}
                        </p>
                    </div>

                    <div class="bg-white rounded-lg p-3 text-center border border-gray-400">
                        <p class="text-gray-500">Total Soal</p>
                        <p class="text-lg font-bold">
                            {{ session('quiz_result.total') }}
                        </p>
                    </div>

                    <div class="bg-white rounded-lg p-3 text-center border border-yellow-400">
                        <p class="text-gray-500">Score</p>
                        <p class="text-lg font-bold text-yellow-500">
                            {{ session('quiz_result.score') }}
                        </p>
                    </div>

                </div>
            </div>
        @endif


        @foreach($levels as $level)
            @php
                $progress = auth()->user()->levelProgress($level);
                $locked = !auth()->user()->canAccessLevel($level);
            @endphp


            <div class="bg-white border border-gray-200 rounded-xl p-4 shadow-sm">

                {{-- HEADER --}}
                <div class="flex justify-between items-start gap-4 mb-3">

                    <div>
                        <h3 class="font-semibold text-gray-800">
                            {{ $level->title }}
                        </h3>
                        <p class="text-sm text-gray-500">
                            {{ $level->description }}
                        </p>
                    </div>

                    <span class="text-sm font-semibold
                        {{ $progress == 100 ? 'text-green-600' : 'text-gray-500' }}">
                        {{ $progress }}%
                    </span>
                </div>

                {{-- PROGRESS BAR --}}
                <div class="w-full bg-gray-200 rounded-full h-2 overflow-hidden mb-3">
                    <div class="h-2 transition-all duration-500
                        {{ $progress == 100 ? 'bg-green-500' : 'bg-yellow-400' }}" style="width: {{ $progress }}%">
                    </div>
                </div>

                {{-- ACTION --}}
                <div class="flex justify-between items-center">
                    @if($locked)
                        <button disabled class="inline-flex items-center gap-2
                               opacity-50 cursor-not-allowed
                               bg-gray-300 text-gray-600
                               px-4 py-2 rounded-lg
                               text-sm font-semibold">

                            {{-- Lock Icon --}}
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2">
                                <rect x="3" y="11" width="18" height="11" rx="2" />
                                <path d="M7 11V7a5 5 0 0 1 10 0v4" />
                            </svg>

                            Terkunci
                        </button>
                    @else
                        <a href="{{ route('level.show', $level->id) }}" class="inline-flex items-center gap-2
                              bg-yellow-400 hover:bg-yellow-500
                              text-black px-4 py-2
                              rounded-lg text-sm font-semibold
                              transition">

                            {{-- Play Icon --}}
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2">
                                <path d="M7 4v16l13-8z" />
                            </svg>

                            Mulai
                        </a>
                    @endif
                </div>


            </div>

        @endforeach
    </div>

    {{-- ================= FLOATING RULES BUTTON ================= --}}
    <button onclick="openRules()" class="fixed bottom-24 right-6
               w-11 h-11
               bg-red-500 hover:bg-red-600
               text-white
               rounded-full
               shadow-lg
               flex items-center justify-center
               transition
               z-40" title="Aturan Main">

        {{-- Info Icon --}}
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"
            stroke-width="2">
            <circle cx="12" cy="12" r="10" />
            <path d="M12 16v-4" />
            <path d="M12 8h.01" />
        </svg>
    </button>

    {{-- ================= MODAL ATURAN MAIN ================= --}}
    <div id="rulesModal" class="fixed inset-0
                bg-black/50
                hidden items-center justify-center
                z-50">

        <div class="bg-white w-full max-w-md
                    rounded-xl p-6
                    shadow-lg animate-fade-in">

            <h3 class="text-lg font-bold mb-3 flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M4 19a2 2 0 0 1 2-2h14" />
                    <path d="M4 5a2 2 0 0 1 2-2h14v16H6a2 2 0 0 0-2 2z" />
                </svg>
                Aturan Main Pembelajaran
            </h3>

            <ul class="text-sm text-gray-700 space-y-2 list-disc pl-5">
                <li>
                    Setiap <strong>Materi</strong> harus diselesaikan sampai
                    <strong>100%</strong>.
                </li>
                <li>
                    Untuk mencapai 100%:
                    <ul class="list-decimal pl-5 mt-1 space-y-1">
                        <li>Membaca semua materi</li>
                        <li>Mengerjakan quiz sampai benar semua</li>
                    </ul>
                </li>
                <li>
                    Quiz boleh dikerjakan
                    <strong>berkali-kali sampai benar semua</strong>.
                </li>

            </ul>

            <div class="mt-5 text-right">
                <button onclick="closeRules()" class="px-4 py-2
                           bg-yellow-400 hover:bg-yellow-500
                           rounded-lg font-semibold text-sm">
                    Mengerti
                </button>
            </div>
        </div>
    </div>

    <script>
        function openRules() {
            const modal = document.getElementById('rulesModal');
            modal.classList.remove('hidden');
            modal.classList.add('flex');
        }

        function closeRules() {
            const modal = document.getElementById('rulesModal');
            modal.classList.add('hidden');
            modal.classList.remove('flex');
        }
    </script>

    <style>
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: scale(0.95);
            }

            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        .animate-fade-in {
            animation: fadeIn 0.2s ease-out;
        }
    </style>


@endsection