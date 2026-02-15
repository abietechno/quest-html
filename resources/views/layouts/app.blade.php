<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'HTML Hotel Quest')</title>
    <link rel="icon" type="image/png" href="{{ asset('icon.png') }}">
    @vite('resources/css/app.css')
    

</head>
<body class="bg-white text-black min-h-screen flex flex-col">

    {{-- Navbar --}}
    @include('components.navbar')

    {{-- Konten --}}
    <main class="flex-1 animate-fade-in container mx-auto px-6 py-8">
        @yield('content')
    </main>



    {{-- Footer --}}
    @include('components.footer')


   

    <script>
        document.getElementById('menu-btn')?.addEventListener('click', () => {
            document.getElementById('mobile-menu').classList.toggle('hidden')
        })
    </script>
    

     @yield('scripts')
</body>
</html>
