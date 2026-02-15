@extends('layouts.app')

@section('title', $material->title)

@section('content')

<div class="max-w-3xl mx-auto px-4 sm:px-0">

    {{-- ================= HEADER ================= --}}
    <header class="mb-8">
        <h1 class="text-2xl font-semibold leading-snug">
            {{ $material->title }}
        </h1>

        <p class="text-sm text-gray-500 mt-1">
            Langkah {{ $currentSlide }} dari {{ $totalSlides }}

        </p>

    </header>

    {{-- ================= MAIN CONTENT ================= --}}
    <section class="bg-white rounded-2xl border shadow-sm px-6 py-8 sm:px-10">

        <article
            class="prose prose-sm sm:prose-base max-w-none
                   prose-p:leading-loose
                   prose-img:rounded-xl
                   prose-img:mx-auto
                   prose-img:my-8">

            {!! $material->content !!}

        </article>

    </section>

    {{-- ================= CODE EXAMPLE ================= --}}
    @if($material->example_code)
    <section class="mt-12">

        <h3 class="text-sm font-semibold text-gray-600 mb-4">
            Contoh Kode 
        </h3>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

            {{-- EDITOR --}}
            <div class="bg-gray-900 rounded-xl p-4">
                <textarea id="htmlCode"
                    class="w-full h-64 bg-gray-900 text-green-400
                           font-mono text-sm leading-relaxed
                           outline-none resize-none">{!! $material->example_code !!}</textarea>

                <button onclick="runCode()"
                    class="mt-4 bg-yellow-400 hover:bg-yellow-500
                           text-black px-4 py-2 rounded-lg
                           text-sm font-semibold">
                    Run Code
                </button>
            </div>

            {{-- PREVIEW --}}
            <div class="bg-white border rounded-xl p-2">
                <iframe id="preview"
                        class="w-full h-64 rounded-lg bg-white">
                </iframe>
            </div>

        </div>
    </section>
    @endif

    {{-- ================= NAVIGATION ================= --}}
    <footer class="flex justify-between items-center mt-14">

        {{-- PREVIOUS --}}
        <div>
            @if($prev)
                <a href="{{ route('material.show', [$level->id, $prev->id]) }}"
                   class="px-4 py-2 bg-gray-100 hover:bg-gray-200
                          text-gray-700 rounded-lg text-sm font-medium">
                    ← Sebelumnya
                </a>
            @endif
        </div>

        {{-- NEXT / COMPLETE --}}
        <div>
            @if($next)
                <a href="{{ route('material.show', [$level->id, $next->id]) }}"
                   class="px-5 py-2 bg-yellow-400 hover:bg-yellow-500
                          text-black rounded-lg text-sm font-semibold">
                    Selanjutnya →
                </a>
            @else
                <form action="{{ route('material.complete', $material->id) }}" method="POST">
                    @csrf
                    <button
                        class="px-5 py-2 bg-green-600 hover:bg-green-700
                               text-white rounded-lg text-sm font-semibold">
                        Selesai Materi
                    </button>
                </form>
            @endif
        </div>

    </footer>

</div>

@endsection

@section('scripts')
<script>
function runCode() {
    const code = document.getElementById('htmlCode').value;
    document.getElementById('preview').srcdoc = code;
}
</script>
@endsection
