<div class="w-full min-h-screen py-3 overflow-x-hidden sm:py-10" id="join">
    <h1 class="mb-4 text-3xl font-bold text-center text-white xl:text-6xl">
        Menarik kan?? Ayo buruan gabung <span class="text-yellow-400">UKMI</span>
    </h1>
    <div class="w-full py-4 grid grid-cols-2 sm:grid-cols-3 px-4 sm:px-8 gap-4">
        <span class="col-span-full text-white font-semibold sm:text-lg ">Persyaratannya mudah kok..</span>
        <div class="col-span-1">
            <div
                class="shadow-lg flex flex-col justify-center items-center rounded-lg p-4 text-white bg-gradient-to-tr sm:bg-gradient-to-t from-teal-600 to-teal-800 w-full h-40 sm:h-48">
                <span class="text-2xl font-bold">
                    1.
                </span>
                <p class="sm:text-xl text-center text-lg font-bold">
                    Mahasiswa POLMED
                </p>
            </div>
        </div>
        <div class="col-span-1">
            <div
                class="shadow-lg flex flex-col justify-center items-center rounded-lg p-4 text-white bg-gradient-to-tl sm:bg-gradient-to-t from-teal-600 to-teal-800 w-full h-40 sm:h-48">
                <span class="text-2xl font-bold">
                    2.
                </span>
                <p class="sm:text-xl text-center text-lg font-bold">
                    Beragama Islam
                </p>
            </div>
        </div>
        <div class="col-span-full sm:col-span-1">
            <div
                class="shadow-lg flex flex-col justify-center items-center rounded-lg p-4 text-white bg-gradient-to-b sm:bg-gradient-to-t from-teal-600 to-teal-800 sm:w-full w-3/4 mx-auto sm:mx-0 h-40 sm:h-48">
                <span class="text-2xl font-bold">
                    3.
                </span>
                <p class="sm:text-xl text-center text-lg font-bold">
                    Bersedia mengikuti mentoring pekanan
                </p>
            </div>
        </div>
    </div>
    <div class="w-full px-4">
        <div class="w-full border-2 border-white rounded-lg px-3 py-4">
            <span class="w-full inline-block text-center text-base sm:text-2xl text-white font-bold mb-4">
                FORMULIR PENDAFTARAN
            </span>
            <form action="" method="GET" class="w-full grid grid-cols-2 gap-4" id="form-join" target="_blank">
                <div class="flex flex-col">
                    <label for="nama" class=" text-white font-semibold">Nama Lengkap</label>
                    <input type="text" name="nama" id="nama"
                        class="rounded-md focus:ring-yellow-400 border-white border-2 bg-transparent focus:border-yellow-400 text-white">
                </div>
                <div class="flex flex-col">
                    <label for="whatsapp" class=" text-white font-semibold">Nomor Whatsapp</label>
                    <input type="number" name="whatsapp" id="whatsapp"
                        class="rounded-md focus:ring-yellow-400 border-white border-2 bg-transparent focus:border-yellow-400 text-white">
                </div>
                <div class="flex flex-col">
                    <label for="jenis_kelamin" class=" text-white font-semibold">Jenis Kelamin</label>
                    <select name="jenis_kelamin" id="jenis_kelamin"
                        class="rounded-md focus:ring-yellow-400 border-white border-2 bg-transparent focus:border-yellow-400 text-white">
                        <option class="text-black" value="" selected disabled>Pilih Jenis Kelamin</option>
                        <option class="text-black" value="laki-laki">Laki-Laki</option>
                        <option class="text-black" value="perempuan">Perempuan</option>
                    </select>
                </div>
                <div class="flex flex-col">
                    <label for="alamat" class=" text-white font-semibold">Alamat</label>
                    <input type="text" name="alamat" id="alamat"
                        class="rounded-md focus:ring-yellow-400 border-white border-2 bg-transparent focus:border-yellow-400 text-white">
                </div>
                <div class="flex flex-col">
                    <label for="prodi" class=" text-white font-semibold">Program Studi</label>
                    <input type="text" name="prodi" id="prodi"
                        class="rounded-md focus:ring-yellow-400 border-white border-2 bg-transparent focus:border-yellow-400 text-white">
                </div>
                <div class="flex flex-col">
                    <label for="kelas" class=" text-white font-semibold">Kelas</label>
                    <input type="text" name="kelas" id="kelas"
                        class="rounded-md focus:ring-yellow-400 border-white border-2 bg-transparent focus:border-yellow-400 text-white">
                </div>
                <button type="submit"
                    class="rounded-md w-full sm:w-10/12 mx-auto bg-yellow-400 hover:bg-yellow-500 transition-all text-center cursor-pointer col-span-full font-bold text-emerald-800 px-4 py-3">
                    GABUNG UKMI
                </button>
            </form>
        </div>
    </div>
</div>
@section('script')
    <script>
        $(document).ready(function() {
            $("#form-join").submit(function(event) {
                // Prevent the default form submission behavior
                event.preventDefault();

                // Get the form action URL
                var action = $(this).attr("action");

                // Get the form data as a query string
                let nama = $("#nama").val();
                let whatsapp = $("#whatsapp").val();
                let jenis_kelamin = $("#jenis_kelamin").val();
                let alamat = $("#alamat").val();
                let prodi = $("#prodi").val();
                let kelas = $("#kelas").val();
                let sapaan = jenis_kelamin == 'laki-laki' ? 'bang' : 'kak';
                let url = "https://wa.me/";

                let message =
                    `Assalamualaykum Warahmatullahi Wabarakatuh ${sapaan}.\n\nPerkenalkan nama saya ${nama}. Saya berminat untuk gabung UKMI POLMED ${sapaan}.\nBerikut data saya ${sapaan}\n\nNama : ${nama}\nNomor Whatsapp : ${whatsapp}\nAlamat : ${alamat}\nProdi : ${prodi}\nKelas : ${kelas}\n\nTerimakasih banyak ${sapaan}`;

                message = encodeURIComponent(message);

                if (jenis_kelamin == 'laki-laki') {
                    url += "6282289138698";
                } else if (jenis_kelamin == 'perempuan') {
                    url += '6281269863028';
                }

                console.log(url + "?text=" + message);

                // Open a new tab/window with the action URL and query string
                window.open(url + "?text=" + message, "_blank");
            });
        })
    </script>
@endsection
