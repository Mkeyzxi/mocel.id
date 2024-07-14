<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }} | moel.id</title>
    {{-- @vite('resources/css/app.css') --}}
    @vite(['resources/css/app.css','resources/js/app.js'])
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body>
    <x:header></x:header>
    <main class="mt-16">
        {{ $slot }}
    </main>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    <script>
        AOS.init();
    </script>
    <script>
        gsap.from("header", { opacity: 0, y: -50, duration: '0.5', ease:'bounce' });
        gsap.from("aside", { opacity: 0, x: -50, duration: '0.5' });
        gsap.from(".infoBengkelgsap", { opacity: 0, duration: '1' });
        gsap.from("form", { opacity: 0, duration: '1', ease:'elastic' });
       

    </script>

</body>
</html>