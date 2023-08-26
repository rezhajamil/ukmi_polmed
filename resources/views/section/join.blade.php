<div class="w-full min-h-screen py-3 overflow-x-hidden sm:py-10" id="join">
    <h1 class="mb-4 text-3xl font-bold text-center text-white xl:text-6xl">
        Menarik kan?? Ayo buruan gabung <span class="text-yellow-400">UKMI</span>
    </h1>
    <div class="grid w-full grid-cols-2 gap-4 px-4 py-4 sm:grid-cols-3 sm:px-8">
        <span class="font-semibold text-white col-span-full sm:text-lg ">Persyaratannya mudah kok..</span>
        <div class="col-span-1">
            <div
                class="flex flex-col items-center justify-center w-full h-40 p-4 text-white rounded-lg shadow-lg bg-gradient-to-tr sm:bg-gradient-to-t from-teal-600 to-teal-800 sm:h-48">
                <span class="text-2xl font-bold">
                    1.
                </span>
                <p class="text-lg font-bold text-center sm:text-xl">
                    Mahasiswa POLMED
                </p>
            </div>
        </div>
        <div class="col-span-1">
            <div
                class="flex flex-col items-center justify-center w-full h-40 p-4 text-white rounded-lg shadow-lg bg-gradient-to-tl sm:bg-gradient-to-t from-teal-600 to-teal-800 sm:h-48">
                <span class="text-2xl font-bold">
                    2.
                </span>
                <p class="text-lg font-bold text-center sm:text-xl">
                    Beragama Islam
                </p>
            </div>
        </div>
        <div class="col-span-full sm:col-span-1">
            <div
                class="flex flex-col items-center justify-center w-3/4 h-40 p-4 mx-auto text-white rounded-lg shadow-lg bg-gradient-to-b sm:bg-gradient-to-t from-teal-600 to-teal-800 sm:w-full sm:mx-0 sm:h-48">
                <span class="text-2xl font-bold">
                    3.
                </span>
                <p class="text-lg font-bold text-center sm:text-xl">
                    Bersedia mengikuti mentoring pekanan
                </p>
            </div>
        </div>
    </div>
    <div class="w-full px-4">
        <div class="w-full px-3 py-4 border-2 border-white rounded-lg">
            <span class="inline-block w-full mb-4 text-base font-bold text-center text-white sm:text-2xl">
                FORMULIR PENDAFTARAN
            </span>
            <form action="" method="GET" class="grid w-full grid-cols-2 gap-4" id="form-join" target="_blank">
                <div class="flex flex-col">
                    <label for="nama" class="font-semibold text-white ">Nama Lengkap</label>
                    <input type="text" name="nama" id="nama"
                        class="text-white bg-transparent border-2 border-white rounded-md focus:ring-yellow-400 focus:border-yellow-400">
                </div>
                <div class="flex flex-col">
                    <label for="whatsapp" class="font-semibold text-white ">Nomor Whatsapp</label>
                    <input type="number" name="whatsapp" id="whatsapp"
                        class="text-white bg-transparent border-2 border-white rounded-md focus:ring-yellow-400 focus:border-yellow-400">
                </div>
                <div class="flex flex-col">
                    <label for="jenis_kelamin" class="font-semibold text-white ">Jenis Kelamin</label>
                    <select name="jenis_kelamin" id="jenis_kelamin"
                        class="text-white bg-transparent border-2 border-white rounded-md focus:ring-yellow-400 focus:border-yellow-400">
                        <option class="text-black" value="" selected disabled>Pilih Jenis Kelamin</option>
                        <option class="text-black" value="laki-laki">Laki-Laki</option>
                        <option class="text-black" value="perempuan">Perempuan</option>
                    </select>
                </div>
                <div class="flex flex-col">
                    <label for="alamat" class="font-semibold text-white ">Alamat</label>
                    <input type="text" name="alamat" id="alamat"
                        class="text-white bg-transparent border-2 border-white rounded-md focus:ring-yellow-400 focus:border-yellow-400">
                </div>
                <div class="flex flex-col">
                    <label for="prodi" class="font-semibold text-white ">Program Studi</label>
                    <input type="text" name="prodi" id="prodi"
                        class="text-white bg-transparent border-2 border-white rounded-md focus:ring-yellow-400 focus:border-yellow-400">
                </div>
                <div class="flex flex-col">
                    <label for="kelas" class="font-semibold text-white ">Kelas</label>
                    <input type="text" name="kelas" id="kelas"
                        class="text-white bg-transparent border-2 border-white rounded-md focus:ring-yellow-400 focus:border-yellow-400">
                </div>
                <button type="submit"
                    class="w-full px-4 py-3 mx-auto font-bold text-center transition-all bg-yellow-400 rounded-md cursor-pointer sm:w-10/12 hover:bg-yellow-500 col-span-full text-emerald-800">
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
                    url += '6281264119612';
                }

                console.log(url + "?text=" + message);

                // Open a new tab/window with the action URL and query string
                window.open(url + "?text=" + message, "_blank");
            });
        })
    </script>
@endsection
