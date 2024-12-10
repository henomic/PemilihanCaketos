   <!DOCTYPE html>
   <html lang="en">

   <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <meta http-equiv="X-UA-Compatible" content="ie=edge">
       <title>Document</title>
       <style>
           {{ file_get_contents('css/app.css') }}
       </style>
   </head>

   <body>
       <h1 class="text-3xl mt-5 font-bold text-center text-gray-800 mb-8">Hasil Pemilihan Ketua OSIS</h1>

       <div class="bg-white shadow-lg rounded-lg overflow-hidden">
           <div class="p-6">
               <h2 class="text-xl font-semibold text-gray-800 mb-4">Perolehan Suara</h2>

               <div class="space-y-6">
                   <!-- Paslon 1 -->
                   @foreach ($hasil as $item)
                       <div>
                           <div class="flex justify-between items-center mb-2">
                               <span class="text-lg font-medium text-gray-700">{{ $item->no_paslon }}:
                                   {{ $item->nama_ketua }} & {{ $item->nama_wakil }}</span>
                               <span class="text-lg font-semibold text-red-600">{{ $item->persentase }}%</span>
                           </div>
                           <div class="w-full bg-gray-200 rounded-full h-4">
                               <div class="
                                {{ (int) $item->persentase <= 50 ? 'bg-blue-500' : '' }}
                                {{ (int) $item->persentase >= 50 ? 'bg-green-500' : '' }}
                                {{ (int) $item->persentase <= 20 ? 'bg-red-500' : '' }}
                                 h-4 rounded-full"
                                   style="width: {{ $item->persentase }}%"></div>
                           </div>
                           <p class="mt-2 text-gray-600">Total Suara: {{ $item->suara }}</p>
                       </div>
                   @endforeach
               </div>

               @if ($top_paslon->periode->status === 'selesai')
                   <div class="mt-8">
                       <h3 class="text-lg font-semibold text-gray-800 mb-2">Hasil Akhir</h3>
                       <div class="bg-blue-100 border-l-4 border-blue-500 text-blue-700 p-4" role="alert">
                           <p class="font-bold">{{ $top_paslon->no_paslon }}</p>
                           <p>Dengan perolehan suara tertinggi sebesar {{ $top_paslon->persentase }}%
                               ({{ $top_paslon->suara }} suara)</p>
                       </div>
                   </div>
               @endif

               <div class="mt-6">
                   <h3 class="text-lg font-semibold text-gray-800 mb-2">Statistik Pemilihan</h3>
                   <ul class="list-disc list-inside text-gray-600">
                       <li>Total semua Suara: {{ $total }}</li>
                   </ul>
                   <div class="mt-6 ">
                       <h3 class="text-lg font-semibold text-gray-800 mb-2">Detail suara</h3>
                       <div class="flex gap-4 flex-col">
                           @foreach ($tps as $data)
                               <div class="flex bg-slate-100 rounded-lg p-2 flex-col">
                                   <h3 class="text-base font-semibold text-gray-600 mb-2">{{ $data->name }}</h3>
                                   <ul class="list-disc list-inside text-gray-600">
                                       <li>Total Suara Masuk: {{ $data->suaras }}</li>
                                   </ul>



                               </div>
                           @endforeach
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </body>

   </html>
