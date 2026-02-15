@extends('layouts.app')

@section('title', 'Edit Avatar')

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

<div class="max-w-3xl mx-auto">

    {{-- ================= HEADER ================= --}}
    <div class="mb-6">
        <h2 class="text-xl sm:text-2xl font-bold flex items-center gap-2">
            <span class="p-2 rounded-lg bg-yellow-100 text-yellow-600">
                {{-- User Edit Icon --}}
                <svg xmlns="http://www.w3.org/2000/svg"
                     class="w-5 h-5"
                     viewBox="0 0 24 24"
                     fill="none"
                     stroke="currentColor"
                     stroke-width="1.5"
                     stroke-linecap="round"
                     stroke-linejoin="round">
                    <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0"/>
                    <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"/>
                </svg>
            </span>
            Edit Profil
        </h2>

        <p class="text-sm text-gray-500 mt-1">
            Perbarui nama dan avatar akun kamu
        </p>
    </div>

    {{-- ================= FORM ================= --}}
    <form action="{{ route('avatar.update') }}" method="POST"
          class="bg-white p-6 rounded-xl shadow">
        @csrf

        {{-- ===== Nama ===== --}}
        <div class="mb-6">
            <label class="block font-semibold mb-2">
                Nama
            </label>

            <div class="relative">
                <span class="absolute inset-y-0 left-3 flex items-center text-gray-400">
                    {{-- Pencil Icon --}}
                    <svg xmlns="http://www.w3.org/2000/svg"
                         class="w-4 h-4"
                         viewBox="0 0 24 24"
                         fill="none"
                         stroke="currentColor"
                         stroke-width="1.5">
                        <path d="M4 20h4l10.5-10.5a2.1 2.1 0 0 0-4-4L4 16v4"/>
                    </svg>
                </span>

                <input type="text"
                       name="name"
                       value="{{ auth()->user()->name }}"
                       class="w-full pl-10 pr-3 py-2
                              border rounded-lg
                              focus:outline-none
                              focus:ring-2 focus:ring-yellow-400">
            </div>
        </div>

        {{-- ===== Avatar ===== --}}
        <label class="block font-semibold mb-3">
            Pilih Avatar
        </label>

        <div class="grid grid-cols-3 sm:grid-cols-4 md:grid-cols-6 gap-3 sm:gap-4 mb-8">
            @foreach ($avatars as $avatar)
                <label class="cursor-pointer text-center group">
                    <input type="radio"
                        name="avatar"
                        value="{{ $avatar }}"
                        class="hidden peer"
                        {{ auth()->user()->avatar == $avatar ? 'checked' : '' }}>

                    <img src="{{ asset('avatars/' . $avatar) }}"
                        class="w-16 h-16 sm:w-18 sm:h-18 md:w-20 md:h-20
                            rounded-full mx-auto
                            border-4 border-transparent
                            transition duration-200
                            group-hover:scale-105
                            peer-checked:border-yellow-400
                            peer-checked:scale-110
                            peer-checked:shadow-lg">
                </label>
            @endforeach
        </div>

        {{-- ===== Submit ===== --}}
        <div class="flex justify-end">
            <button
                class="inline-flex items-center gap-2
                       bg-yellow-400 hover:bg-yellow-500
                       text-black px-6 py-2
                       rounded-lg font-semibold transition">

                {{-- Save Icon --}}
                <svg xmlns="http://www.w3.org/2000/svg"
                     class="w-5 h-5"
                     viewBox="0 0 24 24"
                     fill="none"
                     stroke="currentColor"
                     stroke-width="1.5">
                    <path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z"/>
                    <path d="M17 21v-8H7v8"/>
                    <path d="M7 3v5h8"/>
                </svg>

                Simpan Perubahan
            </button>
        </div>

    </form>

</div>

@endsection
