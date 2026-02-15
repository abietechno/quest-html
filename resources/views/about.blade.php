@extends('layouts.app')

@section('title', 'Tentang Pengembang')

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

<div class="max-w-4xl mx-auto px-4 py-8 sm:py-10">

    <!-- Judul -->
    <div class="text-center mb-8 sm:mb-10">
        <h1 class="text-2xl sm:text-3xl font-bold text-gray-800">
            Tentang Pengembang
        </h1>
        <p class="text-gray-500 mt-2 text-sm sm:text-base">
            Media Pembelajaran Berbasis Web
        </p>
    </div>

    <!-- Card -->
    <div class="bg-white rounded-2xl shadow-lg p-5 sm:p-8">

        <!-- Identitas -->
        <div class="flex flex-col sm:flex-row items-center sm:items-start
                    gap-4 sm:gap-6 mb-6 sm:mb-8 text-center sm:text-left">

            <label class="cursor-pointer">
                <img src="{{ asset('images/MUZAKKI.jpeg') }}"
                     alt="Foto Pengembang"
                     class="w-28 h-28 sm:w-30 sm:h-30
                            rounded-full
                            border-4 border-yellow-400
                            shadow
                            object-cover
                            transition
                            hover:scale-110">
            </label>

            <div>
                <h2 class="text-xl sm:text-2xl font-bold text-gray-800">
                    Muzakki
                </h2>
                <p class="text-gray-600 text-sm sm:text-base">
                    NIM : <b>220631100102</b>
                </p>
                <p class="text-gray-600 text-sm sm:text-base">
                    Program Studi : <b>Pendidikan Informatika</b>
                </p>
                <p class="text-gray-600 text-sm sm:text-base">
                    Pengembang Media Pembelajaran
                </p>
            </div>
        </div>

        <hr class="mb-6">

        <!-- Deskripsi -->
        <div class="space-y-4 text-gray-700 leading-relaxed text-sm sm:text-base">
            <p>
                Website ini dikembangkan sebagai
                <b>media pembelajaran berbasis web</b>
                yang ditujukan untuk mendukung proses pembelajaran pada
                <b>Program Keahlian Perhotelan</b>.
            </p>

            <p>
                Pengembangan media ini bertujuan untuk memberikan pengalaman belajar
                yang <b>interaktif, mandiri, dan mudah diakses</b> bagi peserta didik,
                khususnya dalam memahami materi pembelajaran berbasis teknologi web.
            </p>

            <p>
                Media pembelajaran ini disusun sebagai bagian dari
                <b>persyaratan pengembangan media pembelajaran berbasis web</b>,
                serta sebagai bentuk kontribusi dalam pemanfaatan teknologi
                informasi di dunia pendidikan kejuruan.
            </p>
        </div>

        <!-- Footer -->
        <div class="mt-8 text-center sm:text-right text-xs sm:text-sm text-gray-500">
            Muzakki — Universitas Trunojoyo Madura
        </div>

    </div>
</div>
@endsection
