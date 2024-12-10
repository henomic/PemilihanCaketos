<!-- Main modal -->
<div id="bg" tabindex="-1" aria-hidden="true"
    class=" overflow-y-auto hidden tps bg-black  overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0  bg-opacity-50 max-h-full">
    <div id="modal"
        class="relative transform transition-all duration-200 opacity-0 ease-in-out   modal scale-75  p-4 w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow :bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t :border-gray-600">
                <h3 class="text-lg font-semibold text-gray-900 :text-white">
                    Pilih TPS anda
                </h3>
                <button type="button"
                    class="text-gray-400 but bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm h-8 w-8 ms-auto inline-flex justify-center items-center :hover:bg-gray-600 :hover:text-white"
                    data-modal-toggle="select-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <form method="POST" action="{{ route('Login.store') }}" class="p-4 md:p-5">
                <p class="text-gray-500 :text-gray-400 mb-4">Pilih TPS anda:</p>
                <ul class="space-y-4 mb-4 overflow-y-scroll max-h-[18rem]">
                    @csrf
                    @foreach ($tps as $item)
                        <li class="">

                            <input type="radio" id="job-{{ $item->id }}" onclick="this.form.submit()"
                                name="tps" value="{{ $item->id }}" class="hidden peer" required />
                            <label for="job-{{ $item->id }}"
                                class="inline-flex items-center justify-between w-full p-5 text-gray-900 bg-white border border-gray-200 rounded-lg cursor-pointer :hover:text-gray-300 :border-gray-500 :peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-900 hover:bg-gray-100 :text-white :bg-gray-600 :hover:bg-gray-500">
                                <div class="block">
                                    <div class="w-full text-lg font-semibold">{{ $item->name }}</div>
                                    <div class="w-full text-gray-500 :text-gray-400">SMK TI Pembangunan cimahi</div>
                                </div>
                                <svg class="w-4 h-4 ms-3 rtl:rotate-180 text-gray-500 :text-gray-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </label>
                        </li>
                    @endforeach
                </ul>
                <button
                    class="text-white inline-flex w-full justify-center bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center :bg-red-600 :hover:bg-blue-700 :focus:ring-blue-800">
                    Next step
                </button>
            </form>
        </div>
    </div>
</div>
