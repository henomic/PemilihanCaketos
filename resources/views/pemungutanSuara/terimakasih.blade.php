@extends('welcome')
@section('konten')
    <audio class="hidden" controls autoplay>
        <source src="{{ asset('storage/sound/nuhun.mp3') }}" type="audio/mpeg">
    </audio>

    <div class="min-h-screen flex items-center justify-center px-4">
        <div class="max-w-md w-full bg-white shadow-lg rounded-lg overflow-hidden">
            <div class="bg-red-600 text-white text-center py-4">
                <h1 class="text-2xl font-bold">Pemilihan Ketua OSIS</h1>
            </div>
            <div class="p-6">
                <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-6" role="alert">
                    <p class="font-bold">Terima Kasih!</p>
                    <p>Pilihan Anda telah berhasil direkam.</p>
                </div>
                <div class="text-center">
                    <svg class="mx-auto h-16 w-16 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <h2 class="mt-4 text-xl font-semibold text-gray-800">Suara Anda Telah Tercatat</h2>
                    <p class="mt-2 text-gray-600">Terima kasih atas partisipasi Anda dalam pemilihan Ketua OSIS. Setiap
                        suara sangat berarti bagi masa depan sekolah kita.</p>
                </div>
                <div class="mt-8 text-center">
                    <p class="text-sm text-gray-500">Hasil pemilihan akan diumumkan pada:</p>
                    <p class="font-semibold text-red-600">{{ $suara->created_at->format('d F Y') }}</p>
                </div>
            </div>
            <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                <a href="{{ route('pemungutanSuara.index') }}"
                    class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-600 text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm">
                    Kembali ke Beranda
                </a>
            </div>
        </div>
    </div>
@endsection
