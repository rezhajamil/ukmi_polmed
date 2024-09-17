<div class="min-h-screen w-full overflow-x-hidden py-3 sm:py-10" id="join">
    <h1 class="mb-4 text-center text-3xl font-bold text-white xl:text-6xl">
        Menarik kan?? Ayo buruan gabung <span class="text-yellow-400">UKMI</span>
    </h1>
    <div class="grid w-full grid-cols-2 gap-4 px-4 py-4 sm:grid-cols-3 sm:px-8">
        <span class="col-span-full font-semibold text-white sm:text-lg">Persyaratannya mudah kok..</span>
        <div class="col-span-1">
            <div
                class="flex h-40 w-full flex-col items-center justify-center rounded-lg bg-gradient-to-tr from-teal-600 to-teal-800 p-4 text-white shadow-lg sm:h-48 sm:bg-gradient-to-t">
                <span class="text-2xl font-bold">
                    1.
                </span>
                <p class="text-center text-lg font-bold sm:text-xl">
                    Mahasiswa POLMED
                </p>
            </div>
        </div>
        <div class="col-span-1">
            <div
                class="flex h-40 w-full flex-col items-center justify-center rounded-lg bg-gradient-to-tl from-teal-600 to-teal-800 p-4 text-white shadow-lg sm:h-48 sm:bg-gradient-to-t">
                <span class="text-2xl font-bold">
                    2.
                </span>
                <p class="text-center text-lg font-bold sm:text-xl">
                    Beragama Islam
                </p>
            </div>
        </div>
        <div class="col-span-full sm:col-span-1">
            <div
                class="mx-auto flex h-40 w-3/4 flex-col items-center justify-center rounded-lg bg-gradient-to-b from-teal-600 to-teal-800 p-4 text-white shadow-lg sm:mx-0 sm:h-48 sm:w-full sm:bg-gradient-to-t">
                <span class="text-2xl font-bold">
                    3.
                </span>
                <p class="text-center text-lg font-bold sm:text-xl">
                    Bersedia mengikuti mentoring pekanan
                </p>
            </div>
        </div>
    </div>
    <div class="w-full px-4">
        <div class="w-full rounded-lg border-2 border-white px-3 py-4">
            <span class="mb-4 inline-block w-full text-center text-base font-bold text-white sm:text-2xl">
                FORMULIR PENDAFTARAN MENTORING
            </span>
            <form action="{{ route('join') }}" method="POST" class="grid w-full grid-cols-2 gap-4" id="form-join">
                @csrf
                <div class="flex flex-col">
                    <label for="nama" class="font-semibold text-white">Nama Lengkap</label>
                    <input type="text" name="nama" id="nama"
                        class="rounded-md border-2 border-white bg-transparent text-white focus:border-yellow-400 focus:ring-yellow-400">
                </div>
                <div class="flex flex-col">
                    <label for="whatsapp" class="font-semibold text-white">Nomor Whatsapp</label>
                    <input type="number" name="whatsapp" id="whatsapp"
                        class="rounded-md border-2 border-white bg-transparent text-white focus:border-yellow-400 focus:ring-yellow-400">
                </div>
                <div class="flex flex-col">
                    <label for="jenis_kelamin" class="font-semibold text-white">Jenis Kelamin</label>
                    <select name="jenis_kelamin" id="jenis_kelamin"
                        class="rounded-md border-2 border-white bg-transparent text-white focus:border-yellow-400 focus:ring-yellow-400">
                        <option class="text-black" value="" selected disabled>Pilih Jenis Kelamin</option>
                        <option class="text-black" value="laki-laki">Laki-Laki</option>
                        <option class="text-black" value="perempuan">Perempuan</option>
                    </select>
                </div>
                <div class="flex flex-col">
                    <label for="alamat" class="font-semibold text-white">Alamat</label>
                    <input type="text" name="alamat" id="alamat"
                        class="rounded-md border-2 border-white bg-transparent text-white focus:border-yellow-400 focus:ring-yellow-400">
                </div>
                <div class="flex flex-col">
                    <label for="prodi" class="font-semibold text-white">Program Studi</label>
                    <input type="text" name="prodi" id="prodi"
                        class="rounded-md border-2 border-white bg-transparent text-white focus:border-yellow-400 focus:ring-yellow-400">
                </div>
                <div class="flex flex-col">
                    <label for="kelas" class="font-semibold text-white">Kelas</label>
                    <input type="text" name="kelas" id="kelas"
                        class="rounded-md border-2 border-white bg-transparent text-white focus:border-yellow-400 focus:ring-yellow-400">
                </div>
                <div class="flex items-center gap-x-2">
                    <input type="checkbox" name="mentoring" id="mentoring"
                        class="mr-2 rounded-md border-2 border-white bg-transparent accent-yellow-500 focus:border-yellow-400 focus:ring-yellow-400">
                    <label for="mentoring" class="font-semibold text-white">Saya sudah pernah mentoring
                        sebelumnya
                    </label>
                </div>
                <button type="submit"
                    class="col-span-full mx-auto w-full cursor-pointer rounded-md bg-yellow-400 px-4 py-3 text-center font-bold text-emerald-800 transition-all hover:bg-yellow-500 sm:w-10/12">
                    GABUNG MENTORING UKMI
                </button>
            </form>
        </div>
    </div>
</div>
