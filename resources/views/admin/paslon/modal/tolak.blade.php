<div id="tolak{{ $data->id }}" tabindex="-1"
    class="hidden bg-black bg-opacity-40 h-full overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0  max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <div class="relative bg-white rounded-lg shadow :bg-gray-700">
            <button type="button"
                class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center :hover:bg-gray-600 :hover:text-white"
                data-modal-hide="tolak{{ $data->id }}">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
                <span class="sr-only">Close modal</span>
            </button>
            <form action="{{ route('adminPeriode.update', $data->id) }}" method="POST" class="p-4 md:p-5 text-center">
                @csrf
                @method('put')

                <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 :text-gray-200" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>
                <h3 class="mb-5 text-lg font-normal text-red-500 :text-gray-400">
                    {{ $data->status == 'buat' ? 'Apakah anda yakin akan menghapus semua paslon dalam periode ini?' : 'Apakah anda yakin akan mengAnulir pemilihan ketua dan wakil ketua osis tahun ini?' }}"

                </h3>
                <button data-modal-hide="popup-modal" name="param"
                    value="
                {{ $data->status == 'buat' ? 'hapus' : 'anulir' }}"
                    class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 :focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                    Ya
                </button>
                <button data-modal-hide="tolak{{ $data->id }}" type="button"
                    class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-red-700 focus:z-10 focus:ring-4 focus:ring-gray-100 :focus:ring-gray-700 :bg-gray-800 :text-gray-400 :border-gray-600 :hover:text-white :hover:bg-gray-700">
                    Tidak</button>
            </form>
        </div>
    </div>
</div>
