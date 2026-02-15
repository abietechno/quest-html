@extends('layouts.app')

@section('title', 'Run Code')

@section('content')

{{-- ================= BACK ================= --}}
<a href="{{ route('dashboard') }}"
   class="inline-flex items-center gap-2 px-4 py-2 mb-4
          bg-gray-100 hover:bg-yellow-100 rounded-lg text-sm font-medium">
    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4"
         fill="none" viewBox="0 0 24 24"
         stroke="currentColor" stroke-width="2">
        <path d="M15 18l-6-6 6-6"/>
    </svg>
    Dashboard
</a>

{{-- ================= TITLE ================= --}}
<h2 class="text-2xl font-bold mb-6 flex items-center gap-2">
    <span class="p-2 rounded-lg bg-yellow-100 text-yellow-500">
        <svg xmlns="http://www.w3.org/2000/svg"
             class="w-6 h-6"
             fill="none" viewBox="0 0 24 24"
             stroke="currentColor" stroke-width="1.2">
            <path d="M11.5 17h-7.5a1 1 0 0 1-1-1v-12a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1v9"/>
            <path d="M3 13h18"/>
            <path d="M20 21l2-2-2-2"/>
            <path d="M17 17l-2 2 2 2"/>
        </svg>
    </span>
    Run <span class="text-yellow-500">HTML, CSS & JS</span>
</h2>

{{-- ================= MAIN ================= --}}
<div class="grid grid-cols-1 md:grid-cols-2 gap-6">

    {{-- ================= EDITOR ================= --}}
    <div class="bg-white rounded-xl border p-4 shadow-sm space-y-4">

        {{-- IMPORT --}}
        <div>
            <input type="file" id="importFile" accept=".html,.css,.js" class="hidden">
            <button onclick="openFilePicker()"
                class="px-3 py-1 bg-gray-200 hover:bg-gray-300 rounded text-sm font-semibold">
                Import File
            </button>
        </div>

        {{-- HTML --}}
        <label class="font-semibold text-sm">HTML</label>
        <textarea id="htmlCode"
            class="w-full h-40 p-3 bg-gray-900 text-green-400 font-mono text-sm rounded resize-none">
<!DOCTYPE html>
<html>
<body>
    <h1>Hotel Quest</h1>
</body>
</html>
        </textarea>

        {{-- CSS --}}
        <label class="font-semibold text-sm">CSS</label>
        <textarea id="cssCode"
            class="w-full h-32 p-3 bg-gray-900 text-blue-400 font-mono text-sm rounded resize-none">
body {
    background: #fef3c7;
}
        </textarea>

        {{-- JS --}}
        <label class="font-semibold text-sm">JavaScript</label>
        <textarea id="jsCode"
            class="w-full h-32 p-3 bg-gray-900 text-yellow-300 font-mono text-sm rounded resize-none">
console.log('Hotel Quest Ready');
        </textarea>

        {{-- BUTTON --}}
        <div class="flex flex-wrap gap-3">
            <button onclick="runCode()"
                class="bg-yellow-400 hover:bg-yellow-500 px-5 py-2 rounded-lg font-semibold">
                Run Code
            </button>

            <button onclick="saveHTML()"
                class="bg-green-500 hover:bg-green-600 text-white px-5 py-2 rounded-lg font-semibold">
                Simpan HTML
            </button>

            <button onclick="saveCSS()"
                class="bg-blue-500 hover:bg-blue-600 text-white px-5 py-2 rounded-lg font-semibold">
                Simpan CSS
            </button>

            <button onclick="saveJS()"
                class="bg-purple-500 hover:bg-purple-600 text-white px-5 py-2 rounded-lg font-semibold">
                Simpan JS
            </button>
        </div>
    </div>

    {{-- ================= PREVIEW ================= --}}
    <div class="bg-white rounded-xl border p-4 shadow-sm">
        <label class="font-semibold text-sm mb-2 block">Hasil Preview</label>
        <iframe id="preview"
            class="w-full h-[520px] bg-white border rounded-lg"></iframe>
    </div>

</div>
@endsection

@section('scripts')
<script>
/* ================= IMPORT ================= */
function openFilePicker() {
    document.getElementById('importFile').click();
}

document.getElementById('importFile').addEventListener('change', function () {
    const file = this.files[0];
    if (!file) return;

    const reader = new FileReader();

    reader.onload = e => {
        if (file.name.endsWith('.html')) htmlCode.value = e.target.result;
        if (file.name.endsWith('.css'))  cssCode.value  = e.target.result;
        if (file.name.endsWith('.js'))   jsCode.value   = e.target.result;
    };

    reader.readAsText(file);
});

/* ================= RUN ================= */
function runCode() {
    preview.srcdoc = `
<!DOCTYPE html>
<html>
<head>
<style>
${cssCode.value}
</style>
</head>
<body>

${htmlCode.value}

<script>
${jsCode.value}
<\/script>
</body>
</html>
`;
}

/* ================= SAVE ================= */
function downloadFile(content, filename, type) {
    const blob = new Blob([content], { type });
    const url = URL.createObjectURL(blob);

    const a = document.createElement('a');
    a.href = url;
    a.download = filename;
    a.click();

    URL.revokeObjectURL(url);
}

function saveHTML() {
    downloadFile(htmlCode.value, 'index.html', 'text/html');
}

function saveCSS() {
    downloadFile(cssCode.value, 'style.css', 'text/css');
}

function saveJS() {
    downloadFile(jsCode.value, 'script.js', 'text/javascript');
}
</script>
@endsection
