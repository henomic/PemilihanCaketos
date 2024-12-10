@extends('admin.adminLayout')
@section('konten')
    <div class="max-w-7xl mx-auto">

        <h2 class="text-2xl font-semibold text-gray-800 mb-6">Daftar Kandidat</h2>

        @foreach ($errors->all() as $item)
            {{ $item }}
        @endforeach
        <div class="mt-6">
            <button data-modal-target="{{ $cek === 'buat' ? 'insert' : '' }}"
                data-modal-toggle="{{ $cek === 'buat' ? 'insert' : '' }}"
                class="{{ $cek === 'buat' ? 'bg-green-500 hover:bg-green-600' : 'bg-gray-500 hover:bg-gray-600' }} text-white font-bold py-2 px-4 rounded">
                {{ $cek === 'buat' ? 'Tambah kandidat' : 'Kandidat sudah di tetapkan' }}
            </button>
        </div>
        <div class="bg-white mt-6 shadow overflow-hidden sm:rounded-md">
            <ul class="divide-y flex flex-col gap-2 divide-gray-200">
                @foreach ($periode as $data)
                    <div
                        class="
                    {{ $data->status == 'buat' ? 'bg-blue-50' : '' }}
                    {{ $data->status == 'pemilihan' ? 'bg-gray-50' : '' }}
                    {{ $data->status == 'selesai' ? 'bg-green-50' : '' }}
                    p-4 flex flex-col gap-2">

                        <p
                            class="
                            {{ $data->status == 'buat' ? 'text-blue-600' : '' }}
                                                {{ $data->status == 'pemilihan' ? 'text-gray-600' : '' }}
                                                {{ $data->status == 'selesai' ? 'text-green-600' : '' }}
                        font-semibold">
                            Paslon calon ketua osis dan wakil ketua osis tahun
                            {{ $data->tahun }}</p>

                        @foreach ($data->paslon as $item)
                            <li class="">
                                <div
                                    class="px-4 
                                    {{ $data->status == 'buat' ? 'bg-blue-100' : '' }}
                                                {{ $data->status == 'pemilihan' ? 'bg-gray-100' : '' }}
                                                {{ $data->status == 'selesai' ? 'bg-green-100' : '' }}
                                rounded-lg py-4 sm:px-6 flex items-center justify-between">
                                    <div class="flex items-center">
                                        <img class="h-10 w-10 rounded-full" src="{{ asset('storage/' . $item->foto) }}"
                                            alt="Foto kandidat">
                                        <div class="ml-4">
                                            <div class="text-base font-medium text-gray-900">{{ $item->no_paslon }}</div>
                                            <div class="text-sm  gap-1 mt-1 text-white font-semibold flex">
                                                <p class="bg-blue-500 rounded-lg py-1 px-2">{{ $item->nama_ketua }} (Ketua)
                                                </p>
                                                <p class="bg-gray-500 rounded-lg py-1 px-2">{{ $item->nama_wakil }} (Wakil)
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        @if ($data->status === 'buat')
                                            <button data-modal-target="edit{{ $item->id }}"
                                                data-modal-toggle="edit{{ $item->id }}"
                                                class="bg-blue-200 text-blue-800 font-semibold py-2 px-4 rounded-full text-sm">
                                                Edit
                                            </button>
                                            <button
                                                class="bg-red-200 text-red-800 font-semibold py-2 px-4 rounded-full text-sm ml-2">
                                                Hapus
                                            </button>
                                        @endif
                                    </div>
                                </div>
                            </li>
                            @include('admin.paslon.modal.edit')
                        @endforeach
                        <div class="flex justify-between">
                            <div
                                class="
                            {{ $data->status == 'buat' ? 'text-blue-800' : '' }}
                            {{ $data->status == 'pemilihan' ? 'text-gray-800' : '' }}
                            {{ $data->status == 'selesai' ? 'text-green-800' : '' }}
                                
                                font-semibold py-1 px-2 rounded-lg">
                                Status: {{ $data->status }}</div>
                            <div class="flex gap-2">
                                @if ($data->status !== 'selesai')
                                    <button data-modal-toggle="konfirmasi{{ $data->id }}"
                                        data-modal-target="konfirmasi{{ $data->id }}"
                                        class="text-white rounded-lg bg-blue-400 py-1 px-2">{{ $data->status == 'buat' ? 'Konfirmasi' : 'Selesai' }}</button>
                                    <button data-modal-target="tolak{{ $data->id }}"
                                        data-modal-toggle="tolak{{ $data->id }}"
                                        class="text-white rounded-lg bg-red-400 py-1 px-2">{{ $data->status == 'buat' ? 'Hapus' : 'Anulir' }}</button>
                                @endif
                            </div>
                        </div>
                    </div>
                    @include('admin.paslon.modal.konfirmasi')
                    @include('admin.paslon.modal.tolak')
                @endforeach

            </ul>
        </div>

        @include('admin.paslon.modal.insert')


    </div>
@endsection
