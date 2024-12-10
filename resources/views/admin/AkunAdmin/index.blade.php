 @extends('admin.adminLayout')
 @section('konten')
     <button class="bg-blue-400 rounded-lg py-2 px-3 text-white mb-6" data-modal-target="insert" data-modal-toggle="insert">+
         Tambah akun</button>

     <table class="w-full text-sm text-left rtl:text-right text-gray-500 :text-gray-400">
         <thead class="text-xs text-gray-700 uppercase bg-gray-50 :bg-gray-700 :text-gray-400">
             <tr>
                 <th scope="col" class="px-6 py-3">
                     Nama TPS
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
             @foreach ($user as $item)
                 <tr>
                     <td class="px-6 py-3">
                         {{ $item->name }}
                     </td>
                     <td class="px-6 py-3">
                         {{ $item->created_at->format('d F Y') }}

                     </td>
                     <td class="px-6 py-3">

                         <a data-modal-target="seting{{ $item->id }}" data-modal-toggle="seting{{ $item->id }}"
                             class="bg-blue-400 text-white py-2 px-3 rounded-lg cursor-pointer">Setting</a>
                     </td>
                 </tr>
                 @include('admin.AkunAdmin.modal.setting')
             @endforeach
             @include('admin.AkunAdmin.modal.insert')

         </tbody>
     </table>
 @endsection
