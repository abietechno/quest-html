@extends('layouts.app')

@section('title', 'Quiz Level')

@section('content')

<div class="max-w-4xl mx-auto">

    {{-- ================= HEADER ================= --}}
    <div class="mb-6">
        <h2 class="text-xl sm:text-2xl font-bold flex items-center gap-2">
            <span class="p-2 rounded-lg bg-blue-100 text-blue-600">
                {{-- Quiz Icon --}}
                <svg xmlns="http://www.w3.org/2000/svg"
                     class="w-5 h-5"
                     viewBox="0 0 24 24"
                     fill="none"
                     stroke="currentColor"
                     stroke-width="1.5">
                    <path d="M9 11l3 3L22 4"/>
                    <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"/>
                </svg>
            </span>

            Quiz Level: {{ $level->title }}
        </h2>

        <p class="text-sm text-gray-500 mt-1">
            Pilih jawaban yang paling benar untuk setiap pertanyaan
        </p>
    </div>

    {{-- ================= FORM ================= --}}
    {{-- <form method="POST" action=""> --}}
        <form method="POST" action="{{ route('quiz.submit', $level->id) }}">
        @csrf

        @foreach($quizzes as $index => $quiz)
            <div class="mb-6 p-5 border rounded-xl bg-white shadow-sm">

                {{-- QUESTION --}}
                <p class="font-semibold mb-4 flex items-start gap-2">
                    <span class="text-blue-600 font-bold">
                        {{ $index + 1 }}.
                    </span>
                    {{ $quiz->question }}
                </p>

                {{-- OPTIONS --}}
                @foreach(['A', 'B', 'C', 'D'] as $option)
                    @php
                        $field = 'quiz_'.$quiz->id;
                    @endphp

                    <label
                        class="flex items-center gap-3 mb-3 p-3
                               border rounded-lg cursor-pointer
                               hover:bg-yellow-50 transition">

                        <input type="radio"
                               name="{{ $field }}"
                               value="{{ $option }}"
                               required
                               class="accent-yellow-400">

                        <span class="font-semibold text-gray-600">
                            {{ $option }}.
                        </span>

                        <span class="text-gray-700">
                            {{ $quiz['option_'.strtolower($option)] }}
                        </span>
                    </label>
                @endforeach

            </div>
        @endforeach

        {{-- ================= SUBMIT ================= --}}
        <div class="text-center mt-8">
            <button type="submit"
                class="inline-flex items-center gap-2
                       bg-green-600 hover:bg-green-700
                       text-white px-6 py-3
                       rounded-lg font-semibold transition">

                {{-- Rocket Icon --}}
                <svg xmlns="http://www.w3.org/2000/svg"
                     class="w-5 h-5"
                     viewBox="0 0 24 24"
                     fill="none"
                     stroke="currentColor"
                     stroke-width="1.5">
                    <path d="M5 13l4 4L19 7"/>
                </svg>

                Submit Quiz
            </button>
        </div>

    </form>

</div>

@endsection
