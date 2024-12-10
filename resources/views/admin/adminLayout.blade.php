<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Layouts</title>
    @vite('resources/css/app.css')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>



<body class="p-0">
    @include('sweetalert::alert')


    <div class=" shadow-sm mt-0 ">
        <div class="mx-auto  px-4 sm:px-6 lg:px-8 py-3  flex justify-between items-center">
            <h1 class="text-2xl font-semibold text-gray-800">Admin Panel OSIS</h1>

            <form method="POST" action="{{ route('Login.destroy', Auth::user()->id) }}" id="form">
                @method('delete')
                @csrf
                <button class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">
                    Logout
                </button>
            </form>
        </div>
    </div>
    <div class="min-h-screen flex flex-col">

        <div class="flex flex-1">
            <!-- Sidebar -->
            <nav class="bg-gray-800 w-64 p-6">
                <ul class="space-y-2">
                    {{-- <li>
                        <a href="{{ route('adminDashboard.index') }}"
                            class="{{ Request()->routeIs('adminDashboard.index') ? 'bg-gray-900 text-white' : 'text-gray-300' }} hover:bg-gray-700 hover:text-white group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                            Dashboard
                        </a>
                    </li> --}}
                    <li>
                        <a href="{{ route('adminPaslon.index') }}"
                            class="{{ Request()->routeIs('adminPaslon.index') ? 'bg-gray-900 text-white' : 'text-gray-300' }}  group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                            Kandidat
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('TpsController.index') }}"
                            class="{{ Request()->routeIs('TpsController.index') ? 'bg-gray-900 text-white' : 'text-gray-300' }} hover:bg-gray-700 hover:text-white group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                            Tps
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('adminHasilSuara.index') }}"
                            class="{{ Request()->routeIs('adminHasilSuara.index') ? 'bg-gray-900 text-white' : 'text-gray-300' }} hover:bg-gray-700 hover:text-white group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                            Hasil Pemilihan
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('AkunAdmin.index') }}"
                            class="{{ Request()->routeIs('AkunAdmin.index') ? 'bg-gray-900 text-white' : 'text-gray-300' }} hover:bg-gray-700 hover:text-white group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                            Akun Admin
                        </a>
                    </li>

                </ul>
            </nav>

            <!-- Main Content -->
            <main class="flex-1 p-6">
                @yield('konten')
            </main>
        </div>
    </div>

</body>

</html>
