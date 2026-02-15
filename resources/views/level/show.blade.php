@extends('layouts.app')

@section('title', $level->title)

@section('content')

    <a href="{{ route('levels.index') }}" class="inline-flex items-center gap-2
              px-4 py-2 mb-4
              bg-gray-100 hover:bg-yellow-100
              rounded-lg text-sm font-medium
              transition">

        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor"
            stroke-width="2">
            <path d="M15 18l-6-6 6-6" />
        </svg>

        Daftar Level
    </a>


    {{-- ================= TITLE ================= --}}
    <h2 class="text-xl sm:text-2xl font-bold mb-2 flex items-center gap-2">
        <span class="p-2 rounded-lg bg-yellow-100 text-yellow-500">
            {{-- Book Open Icon --}}
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                stroke-width="1.5">
                <path d="M2 19a2 2 0 0 1 2-2h16" />
                <path d="M2 5a2 2 0 0 1 2-2h16v16H4a2 2 0 0 0-2 2z" />
            </svg>
        </span>
        {{ $level->title }}
    </h2>

    <p class="text-gray-600 mb-6">
        {{ $level->description }}
    </p>

    <div class="flex flex-wrap gap-4">

        {{-- MATERI --}}
        @if($level->materials->isNotEmpty())
            <a href="{{ route('material.show', [
                'level' => $level->id,
                'material' => $level->materials->first()->id
            ]) }}" class="inline-flex items-center gap-2
                       bg-yellow-400 hover:bg-yellow-500
                       text-black px-4 py-2
                       rounded-lg font-semibold transition">

                {{-- Book Icon --}}
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="1.5">
                    <path d="M4 19a2 2 0 0 1 2-2h14" />
                    <path d="M4 5a2 2 0 0 1 2-2h14v16H6a2 2 0 0 0-2 2z" />
                </svg>

                Mulai Belajar
            </a>
        @endif

        {{-- QUIZ --}}
        @if(auth()->user()->hasCompletedAllMaterials($level))

            @if(auth()->user()->hasPerfectQuiz($level))
                {{-- QUIZ SUDAH PERFECT --}}
                <span class="inline-flex items-center gap-2
                                    bg-gray-200 text-gray-500
                                    px-4 py-2 rounded-lg
                                    font-semibold cursor-not-allowed">

                    {{-- Lock Icon --}}
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2">
                        <rect x="3" y="11" width="18" height="11" rx="2" />
                        <path d="M7 11V7a5 5 0 0 1 10 0v4" />
                    </svg>

                    Quiz Selesai (100%)
                </span>

            @else
                {{-- QUIZ BISA DIKERJAKAN --}}
                <a href="{{ route('quiz.show', $level->id) }}" class="inline-flex items-center gap-2
                                bg-blue-500 hover:bg-blue-600
                                text-white px-4 py-2
                                rounded-lg font-semibold transition">

                    {{-- Quiz Icon --}}
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="1.5">
                        <path d="M9 12h6" />
                        <path d="M9 16h6" />
                        <path d="M9 8h6" />
                        <rect x="3" y="4" width="18" height="16" rx="2" />
                    </svg>

                    Kerjakan Quiz
                </a>
            @endif


        @else
            {{-- BELUM SELESAI MATERI --}}
            <span class="inline-flex items-center gap-2
                            text-sm text-gray-400 italic">

                {{-- Lock Icon --}}
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="2">
                    <rect x="3" y="11" width="18" height="11" rx="2" />
                    <path d="M7 11V7a5 5 0 0 1 10 0v4" />
                </svg>

                Selesaikan semua materi untuk membuka quiz
            </span>
        @endif

    </div>

@endsection