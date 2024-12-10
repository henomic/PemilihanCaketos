<!-- Main modal -->
<div id="edit{{ $item->id }}" tabindex="-1" aria-hidden="true"
    class="hidden bg-black bg-opacity-40 z-50 justify-center overflow-y-scroll items-center w-full md:inset-0 h-full fixed max-h-full">
    <div class="relative p-4 w-[60rem] max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow :bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t :border-gray-600">
                <h3 class="text-lg font-semibold text-gray-900 :text-white">
                    Edit paslon
                </h3>
                <button type="button"
                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center :hover:bg-gray-600 :hover:text-white"
                    data-modal-toggle="edit{{ $item->id }}">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <form enctype="multipart/form-data" method="post" action="{{ route('adminPaslon.update', $item->id) }}"
                class="p-4 flex flex-col gap-4 md:p-5">
                @csrf
                @method('put')
                <div class="flex gap-2 w-full">
                    <div class="flex flex-col flex-1">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 :text-white">nomber
                            paslon</label>
                    <input type="text" readonly value="{{ $item->no_paslon }}" name="nomber_paslon"
                            id="name"
                            class="bg-gray-50 border  border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 :bg-gray-600 :border-gray-500 :placeholder-gray-400 :text-white :focus:ring-primary-500 :focus:border-primary-500">
                    </div>

                </div>
                <div class="flex gap-2 w-full">
                    <div class="flex flex-col flex-1">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 :text-white">Nama
                            ketua</label>
                        <input type="text" value="{{ $item->nama_ketua }}" name="nama_ketua" id="name"
                            class="bg-gray-50 border  border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 :bg-gray-600 :border-gray-500 :placeholder-gray-400 :text-white :focus:ring-primary-500 :focus:border-primary-500"
                            required="">
                    </div>
                    <div class="flex flex-col flex-1">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 :text-white">Nama
                            wakil</label>
                        <input type="text" value="{{ $item->nama_wakil }}" name="nama_wakil" id="name"
                            class="bg-gray-50 border  border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 :bg-gray-600 :border-gray-500 :placeholder-gray-400 :text-white :focus:ring-primary-500 :focus:border-primary-500"
                            required="">
                    </div>

                </div>

                <div class="flex flex-col flex-1">
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 :text-white">Visi</label>
                    <textarea type="text" value="{{ $item->visi }}" name="visi" id="visi"
                        class="bg-gray-50 h-[10rem] resize-none border  border-gray-300 text-gray-900 text-sm visi rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 :bg-gray-600 :border-gray-500 :placeholder-gray-400 :text-white :focus:ring-primary-500 :focus:border-primary-500"
                        required="">
{{ $item->visi }}

                        </textarea>
                </div>
                <div class="flex flex-col flex-1">
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 :text-white">misi</label>
                    <textarea type="text" value="{{ $item->misi }}" name="misi" id="misi"
                        class="bg-gray-50 h-[10rem] resize-none border  border-gray-300 text-gray-900 text-sm misi rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 :bg-gray-600 :border-gray-500 :placeholder-gray-400 :text-white :focus:ring-primary-500 :focus:border-primary-500"
                        required="">
{{ $item->misi }}

                        </textarea>
                </div>
                <div class="flex flex-col flex-1">
                    <label for="name"
                        class="block mb-2 text-sm font-medium text-gray-900 :text-white">Jargon</label>
                    <textarea type="text" value="{{ $item->jargon }}" name="jargon" id="jargon"
                        class="bg-gray-50 h-[6rem] resize-none border  border-gray-300 text-gray-900 text-sm jargon rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 :bg-gray-600 :border-gray-500 :placeholder-gray-400 :text-white :focus:ring-primary-500 :focus:border-primary-500"
                        required="">
{{ $item->jargon }}
                        </textarea>
                </div>

                <input type="file" name="foto" class="w-full" id="">
                <button type="submit"
                    class="text-white mt-6 inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center :bg-blue-600 :hover:bg-blue-700 :focus:ring-blue-800">
                    <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                            clip-rule="evenodd"></path>
                    </svg>
                    Edit paslon
                </button>
            </form>
        </div>
    </div>
</div>