<div id="status{{ $item->id }}" tabindex="-1"
    class="hidden bg-black bg-opacity-40 h-full overflow-y-auto  overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0  max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <div class="relative bg-white rounded-lg shadow py-2 flex flex-col justify-center px-4 :bg-gray-700">
            <button type="button"
                class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center :hover:bg-gray-600 :hover:text-white"
                data-modal-hide="status{{ $item->id }}">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
                <span class="sr-only">Close modal</span>
            </button>
            <form action="{{ route('TpsController.update', $item->id) }}" method="POST" class="p-4 md:p-5 text-center">
                @csrf
                @method('put')

                <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 :text-gray-200" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>
                <h3 class="mb-5 text-lg font-normal text-gray-500 :text-gray-400">
                    {{ $item->status == 'aktif' ? 'apakah anda yakin akan menonaktifkan TPS ini?' : 'apakah anda akan mengaktifkan TPS ini?' }}
                </h3>
                <button name="param"
                    value="
                {{ $item->status == 'aktif' ? 'nonaktif' : 'aktif' }}
                "
                    class="text-white 
                {{ $item->status == 'aktif' ? 'bg-red-600' : 'bg-blue-600' }}
                    
                    focus:ring-4 focus:outline-none justify-center font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                    Ya
                </button>

            </form>
        </div>
    </div>
</div>
