@extends('welcome')
@section('konten')
    <form action="{{ route('Login.destroy', Auth::user()->id) }}" method="post">
        @method('delete')
        @csrf
        <button id="submit"></button>
    </form>
    <div class="min-h-full flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">

        <div class=" w-full space-y-8 bg-white shadow-2xl rounded-xl overflow-hidden">
            <marquee behavior="1" scrollamount="10" direction="">
                <p class="text-2xl">Selamat datang di {{ Auth::user()->name }} dalam rangka pemilihan Ketua & Calon Ketua
                    Osis <span class="ml-12">Jangan lupa untuk menyuarakan pilihan mu !</span></p>
                {{-- <p class="text-4xl"></p> --}}
            </marquee>
            <div class="bg-gradient-to-r from-red-600 to-red-800 p-8 text-white">
                <h2 class="text-center text-4xl font-extrabold">Pemilihan Ketua OSIS</h2>
                <p class="mt-2 text-center text-xl">Periode 2024/2025</p>
            </div>

            <form class="p-8" action="{{ route('pemungutanSuara.store') }}" onsubmit="disableSubmitButton(this)"
                method="POST">

                @csrf
                <div class="flex flex-row justify-center flex-wrap  gap-6">



                    @foreach ($paslon as $item)
                        <div class="relative">
                            <input required id="paslon{{ $item->id }}" type="radio" value="{{ $item->id }}"
                                name="paslon"
                                class="form-radio absolute sr-only  peer  h-5 w-5 text-red-600 focus:ring-red-500">
                            <div
                                class="bg-transparent  h-full min-w-[30rem] p-5  max-w-[30rem]    relative  peer-checked:bg-red-500 peer-checked:scale-95  peer-checked:border-2 peer-checked:-translate-y-4 peer-checked:border-none  rounded-xl   overflow-hidden shadow-lg border-2 border-red-200 hover:shadow-xl transition duration-300 transform hover:-translate-y-1">
                                <label class=" absolute cursor-pointer inset-1 peer w-full" for="paslon{{ $item->id }}">
                                </label>

                                <img src="{{ asset('storage/' . $item->foto) }}" alt="Foto Paslon 1"
                                    class="w-full h-full object-cover">
                                {{-- <div class="p-6 flex flex-col justify-between">
                                    <div class="">
                                        <p class="mt-4 text-2xl font-bold text-red-600">{{ $item->no_paslon }}</p>

                                        <p class="mt-4 text-base text-black"><span class="font-semibold">Visi:</span>
                                            {{ $item->visi }}
                                        </p>
                                        <p class="mt-4 text-base text-black"><span class="font-semibold">Misi:</span>
                                            {{ $item->misi }}
                                        </p>
                                    </div>
                                    <p class="mt-4 text-lg font-bold text-red-600">"Teknologi untuk Kemajuan"</p>
                                </div> --}}
                            </div>
                            <a data-id="modal{{ $item->id }}"
                                class="but cursor-pointer bg-red-600 rounded-lg  text-white w-full flex justify-center py-2">Detail
                                paslon</a>

                        </div>

                        @include('pemungutanSuara.modal.modal')
                    @endforeach

                    <script>
                        // Cegah scrolling saat klik label
                        document.querySelectorAll('label').forEach(label => {
                            label.addEventListener('click', event => {
                                event.preventDefault(); // Mencegah scrolling default
                                const inputId = label.getAttribute('for');
                                const input = document.getElementById(inputId);

                                // Centang radio button secara manual
                                if (input) input.checked = true;
                            });
                        });
                    </script>


                </div>

                <div class="mt-32">
                    <button id="submit-btn" type="submit"
                        class="group  relative w-full flex justify-center py-3 px-4 border border-transparent text-lg font-medium rounded-lg text-white bg-gradient-to-r from-red-600 to-red-700 hover:from-red-700 hover:to-red-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 transition duration-300 transform hover:-translate-y-1">
                        <span class="absolute left-0 inset-y-0 flex items-center pl-3">
                            <svg class="h-5 w-5 text-red-300 group-hover:text-red-200" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                                    clip-rule="evenodd" />
                            </svg>
                        </span>
                        Kirim Suara
                    </button>
                </div>
            </form>

            <script>
                function disableSubmitButton(form) {
                    const button = form.querySelector('#submit-btn');
                    button.disabled = true;
                    button.textContent = "Loading...";
                }
                document.querySelectorAll('.but').forEach(element => {
                    element.addEventListener('click', function() {
                        bg = document.getElementById('bg');
                        modal = document.getElementById(element.getAttribute('data-id'));

                        if (modal.classList.contains('pointer-events-none')) {
                            modal.classList.remove('pointer-events-none');
                            modal.classList.remove('opacity-0');
                            modal.classList.remove('scale-50');
                            bg.classList.remove('hidden');
                            modal.classList.add('scale-100');
                            modal.classList.add('opacity-100');
                        } else {
                            modal.classList.add('pointer-events-none');
                            modal.classList.add('scale-50');
                            modal.classList.remove('scale-100');
                            modal.classList.remove('opacity-100');
                            modal.classList.add('opacity-0');
                            bg.classList.add('hidden');


                        }
                    });
                });
            </script>

            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    console.log('woi');

                    document.addEventListener('keydown', function(e) {
                        if (e.shiftKey && e.ctrlKey && event.key === 'o' || event.key === 'O') {
                            e.preventDefault();
                            document.getElementById('submit').click();
                        }
                    });
                });
            </script>
        </div>
    </div>
@endsection
