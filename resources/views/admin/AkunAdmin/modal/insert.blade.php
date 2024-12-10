 <div id="insert" tabindex="-1"
     class="hidden bg-black bg-opacity-40 h-full overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0  max-h-full">
     <div class="p-6 bg-white w-[30rem]">
         <form method="POST" action="{{ route('AkunAdmin.store') }}">
             @csrf
             <h3 class="mb-5">Tambah akun Admin</h3>
             <div class="mb-6">
                 <label for="username" class="block text-sm font-medium text-gray-700 mb-2">Username</label>
                 <input type="text" id="username" name="username"
                     class="block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
                     placeholder="Enter new username">
             </div>
             <div class="mb-4">
                 <label for="current-password" class="block text-sm font-medium text-gray-700 mb-2">
                     Password</label>
                 <input type="text" id="current-password" name="pw"
                     class="block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
                     placeholder="Enter current password">
             </div>


             <!-- Buttons -->
             <div class="flex items-center justify-end space-x-3">
                 <button data-modal-hide="insert" type="button" id="close-modal"
                     class="px-4 py-2 border border-gray-300 rounded-md text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                     Cancel
                 </button>
                 <button type="submit"
                     class="px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                     Save Changes
                 </button>
             </div>
         </form>
     </div>
 </div>
