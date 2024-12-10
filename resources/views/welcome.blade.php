<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        *::-webkit-scrollbar-button {
            display: none;
        }
    </style>
    @vite('resources/css/app.css')
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="bg-white min-h-screen">
    @include('sweetalert::alert')


    <header class="bg-red-600 text-white p-4">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-2xl font-bold">Pemilihan Ketua OSIS</h1>

        </div>
    </header>

    <main class="min-h-screen">
        @yield('konten')

    </main>

    <footer class="bg-red-600 text-white py-4">
        <div class="container mx-auto text-center">
            <p>&copy; 2024 Pemilihan Ketua OSIS. Hak Cipta Dilindungi.</p>
        </div>
    </footer>
</body>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        console.log('woi');

        document.addEventListener('keydown', function(e) {
            if (e.shiftKey && e.ctrlKey && e.keyCode === 76) {
                e.preventDefault();
                window.location.href = "{{ route('Login.index') }}";
            }
        });
    });
</script>

</html>
