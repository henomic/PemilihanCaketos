 <div id="bg" class="fixed z-30 inset-0  hidden bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full">

 </div>
 <div id="modal{{ $item->id }}"
     class=" fixed z-40  opacity-0 pointer-events-none scale-50 top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 mx-auto p-5 border w-full  max-w-4xl  duration-300 transition-all ease-in-out  shadow-2xl bg-white rounded-lg bg-indo-white">
     <div class="mt-3">
         <div class="bg-gradient-to-r from-indo-red to-red-700 text-indo-white py-4 px-6 rounded-t-lg">
             <h3 class="text-3xl font-bold text-center">Pemilihan Ketua OSIS</h3>
         </div>
         <div class="mt-4  px-6 py-4">
             <div class="flex flex-col md:flex-row items-center md:items-start">
                 <div class="md:w-1/3 mb-4 md:mb-0">
                     <img id="paslonPhoto" src="storage/{{ $item->foto }}" alt="Foto Paslon"
                         class="mx-auto  w-56 h-full object-cover border-4 border-indo-red shadow-lg transition duration-300 ease-in-out transform hover:scale-105">

                     <p class="text-slate-800 font-semibold flex text-center justify-center w-full gap-2">
                         <span>{{ $item->nama_ketua }}</span>
                         <span>&</span>
                         <span>{{ $item->nama_wakil }}</span>
                         <br>
                     </p>
                     <p class="text-red-600 flex text-center justify-center w-full gap-2">
                         <span>Calon Ketua</span>
                         <span>&</span>
                         <span>calon Wakil ketua</span>
                     </p>

                 </div>
                 <div class="md:w-2/3 md:pl-8">
                     <h4 id="paslonName" class="text-3xl font-semibold mb-2 text-indo-red">
                         {{ $item->no_paslon }}

                     </h4>

                     <p id="paslonSlogan" class="text-xl italic mb-4 text-gray-600">"{{ $item->jargon }}"</p>
                     <div class="mb-4">
                         <h5 class="font-bold text-indo-red text-lg flex items-center">
                             <i class="fas fa-eye mr-2"></i> Visi:
                         </h5>
                         <p id="paslonVision" class="text-base bg-gray-100 p-3 rounded-lg shadow-inner">
                             {{ $item->visi }}

                         </p>
                     </div>
                     <div>
                         <h5 class="font-bold text-indo-red text-lg flex items-center">
                             <i class="fas fa-bullseye mr-2"></i> Misi:
                         </h5>
                         {{ $item->misi }}
                     </div>
                 </div>
             </div>
         </div>
         <div class="mt-6 px-6 flex justify-between items-center">
             <button id="pilihPaslon"
                 class="px-6 py-3 bg-green-500 text-white text-lg font-semibold rounded-lg shadow-md hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-300 transition duration-300 ease-in-out transform hover:scale-105">
                 Pilih Paslon Ini
             </button>
             <button type="button" data-id="modal{{ $item->id }}"
                 class="px-6 py-3 but bg-gray-300 text-gray-700 text-lg font-semibold rounded-lg shadow-md hover:bg-gray-400 focus:outline-none focus:ring-2 focus:ring-gray-400 transition duration-300 ease-in-out">
                 Tutup
             </button>
         </div>
     </div>
 </div>
