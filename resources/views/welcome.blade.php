@extends('layouts.app')

@section('title', 'Welcome')

@section('content')
    <div class="flex flex-col items-center justify-center min-h-[70vh] text-center px-4">

        {{-- LOGO --}}
        <img src="{{ asset('icon.png') }}" alt="HTML Hotel Quest Icon"
            class="h-20 w-20 md:h-28 md:w-28 object-contain mb-4">

        {{-- JUDUL --}}
        <h2 class="text-3xl md:text-4xl font-bold mb-4">
            <span class="text-yellow-400">HTML Hotel Quest</span>
        </h2>

        <p class="text-gray-600 mb-8 max-w-md">
            Media Pembelajaran HTML Dasar untuk Jurusan Perhotelan
        </p>

        <a href="{{ route('dashboard') }}" class="btn-animate bg-yellow-400 hover:bg-yellow-500 text-black
                   px-6 py-3 rounded-xl font-semibold">
            🚀 Mulai Belajar
        </a>

    </div>


    @auth
        @if(
                auth()->user()->canAccessPanel(
                    filament()->getPanel('admin')
                )
            )
            {{-- FLOATING ADMIN BUTTON --}}
            <a href="{{ url('/admin') }}" class="fixed bottom-16 right-6
                            w-12 h-12
                            bg-gray-900 text-white
                            rounded-full
                            flex items-center justify-center
                            shadow-lg
                            hover:bg-yellow-400 hover:text-black
                            hover:scale-110
                            transition
                            z-50" title="Admin Panel">

                {{-- Gear / Admin Icon --}}
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                    stroke-width="1.8">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 3l7 4v5c0 5-3.5 8-7 9-3.5-1-7-4-7-9V7l7-4z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 13l2 2 4-4" />
                </svg>
            </a>
        @endif
    @endauth

@endsection