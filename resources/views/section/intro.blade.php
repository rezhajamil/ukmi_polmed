<div class="w-full min-h-screen pb-4 overflow-x-hidden pt-14 sm:pt-20 sm:pb-10">
    <div class="grid w-full grid-cols-1 gap-4 lg:grid-cols-2">
        <div class="flex flex-col items-center px-2 py-4 sm:py-8 sm:min-h-screen">
            <h1 class="mb-4 text-3xl font-bold text-center text-white xl:text-5xl">
                Yuk Kenalan dengan <span class="text-yellow-400">UKMI</span>
            </h1>
            <div
                class="flex items-center justify-center px-3 py-1 border-2 border-white rounded-full animate__fadeIn sm:border-4 sm:px-4 sm:py-2 aspect-square bg-gradient-to-tl from-emerald-700 to-emerald-900">
                <img src="{{ asset('images/logo-transparent.png') }}" alt="Logo Ukmi Polmed"
                    class="h-32 -mt-2 -mr-1 sm:-mt-4 sm:-mr-2 sm:h-48">
            </div>
            <p class="px-6 mt-4 text-base font-bold text-justify text-white sm:text-xl">
                <span class="text-yellow-400">UKMI POLMED</span>
                adalah satu-satunya UKM (Unit Kegiatan Mahasiswa) untuk mahasiswa yang beragama Islam di Politeknik
                Negeri Medan. <br> <br>
                <span class="text-yellow-400">UKMI </span>
                memiliki sejarah yang panjang dan setiap tahunnya selalu diisi oleh kegiatan yang bermanfaat, seru, dan
                berkesan.
            </p>
        </div>
        <div class="relative flex flex-col items-center sm:min-h-screen">
            @include('components.bg-dot', ['position' => '-right-8 top-8'])
            @include('components.bg-dot', ['position' => '-left-8 bottom-8'])
            <img src="{{ asset('images/mentoring-2.jpg') }}" alt="Mentoring UKMI"
                class="sm:w-[600px] border-[12px] border-white rounded w-[300px] scale-90 h-[180px] sm:h-[350px] rotate-3 object-cover object-center aspect-video">
            <img src="{{ asset('images/fotbar-1.jpg') }}" alt="PPI UKMI 2018"
                class="sm:w-[600px] border-[12px] border-white rounded w-[300px] h-[180px] sm:h-[350px] -rotate-[8deg] -mt-16 sm:-mr-12 -mr-6 object-cover object-center aspect-video">
            <div class="">
            </div>
        </div>
        <div class="flex flex-col items-center gap-6 px-4 my-6 sm:my-4 col-span-full">
            <span class="text-base font-bold text-white sm:text-2xl">
                Pengen lebih lengkap??
                <span class="text-yellow-400">Tonton Video Berikut</span>
            </span>
            {{-- <video controls width="640" height="360" class="w-full">
                <source src="https://youtu.be/jbVn0vT_kA4?si=xFKVxlduuxmyIVjP" type="video/mp4">
                Your browser does not support the video tag.
            </video> --}}
            <iframe class="w-full h-full aspect-video" width="560" height="315"
                src="https://www.youtube.com/embed/jbVn0vT_kA4?si=xFKVxlduuxmyIVjP" title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen>
            </iframe>
        </div>
    </div>
</div>
