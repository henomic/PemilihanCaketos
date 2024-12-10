@extends('welcome')
@section('konten')
    <section class="bg-red-500 text-white py-20">
        <div class="container mx-auto text-center">
            <h2 class="text-4xl font-bold mb-4">Suarakan Pilihanmu!</h2>
            <p class="text-xl mb-8">Pilih pemimpin OSIS yang akan membawa perubahan positif untuk sekolah kita.</p>
            <a id="but"
                class="but bg-white cursor-pointer text-red-600 py-2 px-6 rounded-full font-bold text-lg hover:bg-gray-100 transition duration-300">Mulai
                Memilih</a>
        </div>
    </section>

    <section class="py-16">
        <div class="container mx-auto px-4">
            <h3 class="text-3xl font-bold text-red-600 mb-6 text-center">Tentang Pemilihan</h3>
            <div class="bg-white shadow-lg rounded-lg p-6 border-2 border-red-500">
                <p class="text-gray-700 mb-4">
                    Pemilihan Ketua OSIS adalah momen penting dalam kehidupan sekolah kita. Ini adalah kesempatan
                    bagi setiap siswa untuk berpartisipasi dalam proses demokrasi dan memilih pemimpin yang akan
                    mewakili suara mereka.
                </p>
                <p class="text-gray-700">
                    Calon ketua OSIS telah menyiapkan visi dan misi mereka untuk kemajuan sekolah. Mari kita dukung
                    proses ini dengan berpartisipasi aktif dan memilih dengan bijak.
                </p>
            </div>
        </div>
    </section>


    @include('landingpage.modal.pilihTPS')
    <script>
        document.querySelectorAll('.but').forEach(element => {
            element.addEventListener('click', function() {
                modal = document.getElementById('modal');
                bg = document.getElementById('bg');
                if (bg.classList.contains('hidden')) {
                    bg.classList.remove('hidden');
                    bg.classList.add('flex');
                    modal.classList.add('scale-100');
                    modal.classList.remove('opacity-0');
                    modal.classList.add('opacity-100');
                    modal.classList.remove('scale-75');
                } else {
                    bg.classList.add('hidden');
                    bg.classList.remove('flex');
                    modal.classList.add('scale-75');
                    modal.classList.remove('scale-100');
                }
            });
        });
    </script>
@endsection
