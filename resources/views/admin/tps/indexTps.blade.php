@extends('admin.adminLayout')
@section('konten')
    <button type="button" data-modal-target="insert" data-modal-toggle="insert"
        class="bg-blue-600 text-white rounded-lg px-4  py-2">Tambah TPS</button>
    @include('admin.tps.modal.insert')

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 :text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 :bg-gray-700 :text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Nama TPS
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Status TPS
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Dibuat
                    </th>

                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>

                @foreach ($tps as $item)
                    <tr class="bg-white border-b :bg-gray-800 :border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap :text-white">
                            {{ $item->name }}
                        </th>
                        <td class="px-6  py-4">
                            <a
                                class="py-2 px-4  rounded-lg {{ $item->status == 'aktif' ? 'bg-green-500' : 'bg-red-500' }} text-white">
                                {{ $item->status }}
                            </a>

                        </td>
                        <td class="px-6 py-4">
                            {{ $item->created_at->format('d F Y') }}

                        </td>

                        <td class="px-6 py-4">
                            <a data-modal-toggle="status{{ $item->id }}" data-modal-target="status{{ $item->id }}"
                                class="font-medium  {{ $item->status === 'aktif' ? 'text-blue-600' : 'text-red-600' }} cursor-pointer :text-blue-500 hover:underline">
                                {{ $item->status === 'aktif' ? 'Aktifkan' : 'Nonaktifkan' }}
                            </a>
                        </td>
                    </tr>
                    @include('admin.tps.modal.status')
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
