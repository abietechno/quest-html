@extends('layouts.app')

@section('title', 'Skor & Progres')

@section('content')

{{-- ================= BACK TO DASHBOARD ================= --}}
<a href="{{ route('dashboard') }}"
   class="inline-flex items-center gap-2
          px-4 py-2 mb-4
          bg-gray-100 hover:bg-yellow-100
          rounded-lg text-sm font-medium
          transition">

    {{-- Arrow Left Icon --}}
    <svg xmlns="http://www.w3.org/2000/svg"
         class="w-4 h-4"
         viewBox="0 0 24 24"
         fill="none"
         stroke="currentColor"
         stroke-width="2">
        <path d="M15 18l-6-6 6-6"/>
    </svg>

    Dashboard
</a>


@auth
@php
    $user     = auth()->user();
    $score    = $user->totalScore();
    $progress = $user->progressPercentage();
@endphp

{{-- ================= SCORE ================= --}}
<h3 class="text-xl font-bold mt-6 mb-4 flex items-center gap-2">
    <span class="p-2 rounded-lg bg-yellow-100 text-yellow-500">
        {{-- Trophy / Score Icon --}}
                <svg xmlns="http://www.w3.org/2000/svg"
                     class="w-6 h-6"
                     fill="none" viewBox="0 0 24 24"
                     stroke="currentColor" stroke-width="1.2">
                    <rect x="4" y="3" width="16" height="18" rx="2"/>
                    <path d="M8 7h8"/>
                    <path d="M8 11h5"/>
                    <path d="M15 11h1"/>
                    <path d="M8 14h5"/>
                    <path d="M15 14h1"/>
                </svg>
    </span>
    <span>Score Kamu</span>
</h3>

@if ($score > 0)
    <div class="bg-white p-6 rounded-xl border border-gray-200 shadow-sm text-center">

        <div class="mx-auto mb-3 w-12 h-12 flex items-center justify-center
                    rounded-full bg-yellow-100 text-yellow-500">
            {{-- Fire / Achievement --}}
            <svg xmlns="http://www.w3.org/2000/svg"
                 class="w-6 h-6"
                 viewBox="0 0 24 24"
                 fill="none"
                 stroke="currentColor"
                 stroke-width="1.5"
                 stroke-linecap="round"
                 stroke-linejoin="round">
                <path d="M12 2s4 4.5 4 8a4 4 0 0 1-8 0c0-3.5 4-8 4-8z"/>
                <path d="M8 14a4 4 0 0 0 8 0"/>
            </svg>
        </div>

        <h4 class="font-semibold text-gray-700">Total Score</h4>
        <p class="text-3xl font-bold text-amber-500 mt-2">
            {{ $score }}
        </p>
    </div>
@else
    <div class="bg-gray-50 border border-dashed rounded-xl p-6 text-center text-gray-500">

        <div class="mx-auto mb-3 w-12 h-12 flex items-center justify-center
                    rounded-full bg-gray-200 text-gray-400">
            {{-- Empty / Info --}}
            <svg xmlns="http://www.w3.org/2000/svg"
                 class="w-6 h-6"
                 viewBox="0 0 24 24"
                 fill="none"
                 stroke="currentColor"
                 stroke-width="1.5"
                 stroke-linecap="round"
                 stroke-linejoin="round">
                <circle cx="12" cy="12" r="10"/>
                <path d="M12 8v4"/>
                <path d="M12 16h.01"/>
            </svg>
        </div>

        <h4 class="font-semibold text-gray-700">Belum ada score</h4>
        <p class="text-sm mt-1">
            Selesaikan level untuk melihat score kamu
        </p>
    </div>
@endif

{{-- ================= PROGRESS ================= --}}
<div class="bg-white p-6 rounded-xl border border-gray-200 shadow-sm mt-8 mb-8">

    <h3 class="font-bold text-lg mb-4 flex items-center gap-2">
        <span class="p-2 rounded-lg bg-yellow-100 text-yellow-500">
            {{-- Chart Icon --}}
            <svg xmlns="http://www.w3.org/2000/svg"
                 class="w-5 h-5"
                 viewBox="0 0 24 24"
                 fill="none"
                 stroke="currentColor"
                 stroke-width="1.5"
                 stroke-linecap="round"
                 stroke-linejoin="round">
                <path d="M3 3v18h18"/>
                <path d="M7 14v4"/>
                <path d="M12 10v8"/>
                <path d="M17 6v12"/>
            </svg>
        </span>
        <span>Progress Belajar</span>
    </h3>

    <div class="w-full bg-gray-200 rounded-full h-3 overflow-hidden">
        <div
            class="bg-gradient-to-r from-yellow-400 to-amber-500
                   h-3 transition-all duration-700"
            style="width: {{ $progress }}%">
        </div>
    </div>

    <p class="mt-3 text-sm text-gray-600">
        <span class="font-semibold text-gray-800">
            {{ $progress }}%
        </span>
        selesai
    </p>
</div>

@endauth

@endsection
