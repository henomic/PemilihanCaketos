@extends('admin.adminLayout')
@section('konten')
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold text-center text-blue-800 mb-8">Periode Pemilihan Ketua OSIS</h1>

        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
            <div class="p-6">
                <div class="overflow-x-auto">
                    <table class="min-w-full bg-white">
                        <thead class="bg-blue-800 text-white">
                            <tr>
                                <th class="py-3 px-4 text-left">Tahun</th>
                                <th class="py-3 px-4 text-left">Pemenang</th>
                                <th class="py-3 px-4 text-left">Total Suara</th>
                                <th class="py-3 px-4 text-left"></th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-700">
                            @foreach ($periode as $item)
                                <tr class="border-b hover:bg-gray-50">
                                    <td class="py-3 px-4">{{ $item->tahun }}</td>
                                    <td class="py-3 px-4">{{ $item->top_paslon->nama_ketua }} &
                                        {{ $item->top_paslon->nama_wakil }}</td>
                                    <td class="py-3 px-4">{{ $item->top_paslon->suaraPemilih }}</td>
                                    <td class="py-3 px-4">

                                        <a href="{{ route('adminHasilSuara.show', $item->id) }}">Detail</a>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>


            </div>
        </div>

        <div class="mt-8 text-center">
            <a href="#"
                class="inline-block bg-blue-600 text-white font-semibold px-6 py-2 rounded-lg hover:bg-blue-700 transition duration-300">
                Kembali ke Beranda
            </a>
        </div>
    </div>
@endsection
