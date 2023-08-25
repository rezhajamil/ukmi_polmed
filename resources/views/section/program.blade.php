<div class="w-full min-h-screen py-3 overflow-x-hidden sm:py-10" id="program">
    <h1 class="mb-4 text-3xl font-bold text-center text-white xl:text-6xl">
        Di <span class="text-yellow-400">UKMI</span> ngapain aja sih??
    </h1>
    <div class="grid grid-cols-1 px-4 py-8 gap-y-12 sm:px-6">
        <div class="flex flex-col gap-6">
            <span class="text-lg font-bold text-center text-white sm:text-3xl">
                Mentoring & Sharing Asyik??
                <span class="text-yellow-400"> Pastinya dong</span>
            </span>
            <div class="relative flex flex-col items-center sm:min-h-screen">
                @include('components.bg-dot-teal', ['position' => '-right-8 top-16'])
                @include('components.bg-dot-teal', ['position' => '-left-8 top-8'])
                <img src="{{ asset('images/mentoring-3.jpg') }}" alt="Mentoring UKMI"
                    class="sm:w-[600px] border-[12px] border-white rounded w-[300px] scale-90 h-[180px] sm:h-[350px] -rotate-6 object-cover object-center aspect-video">
                <img src="{{ asset('images/mentoring-1.jpg') }}" alt="Mentoring UKMI"
                    class="sm:w-[600px] border-[12px] border-white rounded w-[300px] h-[180px] sm:h-[350px] rotate-[10deg] -mt-16 sm:-ml-12 -ml-14 object-cover object-center aspect-video">
            </div>
        </div>
        <div class="flex flex-col gap-6">
            <span class="text-lg font-bold text-center text-white sm:text-3xl">
                Pengen Nge-Camp??
                <span class="text-yellow-400"> Hayuk!!</span>
            </span>
            <div class="relative flex flex-col items-center sm:min-h-screen">
                @include('components.bg-dot-teal', ['position' => '-right-8 bottom-16'])
                @include('components.bg-dot', ['position' => '-left-8 bottom-8'])
                <div class="flex justify-center">
                    <img src="{{ asset('images/camp-2.jpg') }}" alt="Camping UKMI"
                        class="sm:w-[600px] border-[12px] border-white rounded w-[300px] scale-90 h-[180px] sm:h-[350px] sm:-mr-12 -mr-24 sm:-mb-8 -rotate-6 object-cover object-center aspect-video">
                    <img src="{{ asset('images/camp-1.jpg') }}" alt="Camping UKMI"
                        class="sm:w-[600px] border-[12px] border-white rounded w-[300px] scale-90 h-[180px] sm:h-[350px] object-cover object-center aspect-video">
                    <img src="{{ asset('images/camp-3.jpg') }}" alt="Camping UKMI"
                        class="sm:w-[600px] border-[12px] border-white rounded w-[300px] scale-90 h-[180px] sm:h-[350px] sm:-ml-12 -ml-24 sm:-mb84 rotate-6 object-cover object-center aspect-video">
                </div>
                <iframe src="{{ asset('videos/camp-1.mp4') }}"
                    class="sm:w-9/12 border-[12px] border-white rounded w-full h-full sm:h-fit rotate-[2deg] sm:-mt-12 -mt-10 object-cover object-center aspect-video"
                    width="640" height="480">
                </iframe>
            </div>
        </div>
        <div class="flex flex-col gap-6">
            <span class="text-lg font-bold text-center text-white sm:text-3xl">
                Mau Olahraga??
                <span class="text-yellow-400"> Bolehlah adu skill</span>
            </span>
            <div class="relative flex flex-col items-center sm:min-h-screen">
                @include('components.bg-dot-teal', ['position' => '-right-8 bottom-16'])
                @include('components.bg-dot', ['position' => '-left-8 bottom-8'])
                <div class="flex justify-center w-full flex-nowrap">
                    <img src="{{ asset('images/futsal-1.jpg') }}" alt="Olahraga UKMI"
                        class="sm:w-[600px] inline-block border-[12px] border-white rounded w-[300px] ml-12 -mr-12 -rotate-3 scale-90 h-[180px] sm:h-[450px] object-cover object-center aspect-video">
                    <img src="{{ asset('images/panahan-1.jpg') }}" alt="Olahraga UKMI"
                        class="sm:w-[600px] inline-block border-[12px] border-white rounded w-[300px] scale-90 -ml-20 rotate-6 h-[180px] sm:h-[450px] object-cover object-center aspect-video">
                </div>
                <img src="{{ asset('images/futsal-2.jpg') }}" alt="Olahraga UKMI"
                    class="sm:w-[800px] inline-block border-[12px] border-white rounded w-[300px] scale-90 sm:-mt-16 -mt-12 -rotate-1 h-[180px] sm:h-[450px] object-cover object-center aspect-video">
            </div>
        </div>
        <div class="flex flex-col gap-6">
            <span class="text-lg font-bold text-center text-white sm:text-3xl">
                Pelatihan Peningkatan Kapasitas Diri??
                <span class="text-yellow-400"> Jelas disini tempatnya..</span>
            </span>
            <div class="relative flex flex-col items-center sm:min-h-screen">
                @include('components.bg-dot-teal', ['position' => '-right-8 bottom-16 -z-[1]'])
                <iframe class="w-full h-full aspect-video" width="560" height="315"
                    src="https://www.youtube.com/embed/gF0xailVEYw?si=nDVxudVm8YucPS59" title="Trailer PPI 2019"
                    frameborder="0"
                    allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen>
                </iframe>
                <span class="text-xs italic text-white sm:text-sm">*Video Trailer PPI (Program Pembekalan Islam) 2019.
                    Salah satu
                    pelatihan terbesar di UKMI POLMED setiap tahunnya.
                </span>
            </div>
        </div>
        <div class="flex flex-col gap-6">
            <span class="text-lg font-bold text-center text-white sm:text-3xl">
                Segitu aja??
                <span class="text-yellow-400"> Nggak dong, masih banyak yang lainnya..</span>
            </span>
            <div class="relative flex flex-col items-center sm:min-h-screen">
                @include('components.bg-dot-teal', ['position' => '-right-8 bottom-16'])
                @include('components.bg-dot', ['position' => '-left-8 bottom-8'])
                <div class="flex justify-center w-full mt-4 flex-nowrap">
                    <div class="flex flex-col sm:w-[800px] w-[300px] -mr-12 -rotate-3">
                        <img src="{{ asset('images/makan-1.jpg') }}" alt="Makan-Makan UKMI"
                            class="border-white rounded border-8 sm:border-[12px] sm:w-[800px] w-[300px] object-cover object-center aspect-video h-[180px] sm:h-[450px]">
                        <span
                            class="text-xs italic inline-block w-9/12 sm:text-center text-left text-white sm:text-sm ">
                            *Makan-makan
                        </span>
                    </div>
                    <div class="flex flex-col items-center sm:w-[800px] w-[300px] -ml-16 rotate-6 z-10">
                        <img src="{{ asset('images/fotbar-2.jpg') }}" alt="IJABAR UKMI"
                            class="border-white rounded border-8 sm:border-[12px] sm:w-[800px] w-[300px] object-cover object-center aspect-video h-[180px] sm:h-[450px]">
                        <span
                            class="text-xs italic inline-block w-9/12 text-right sm:text-center text-white sm:text-sm ">
                            *Ifthor Jama'i Akbar
                        </span>
                    </div>
                </div>
                <div class="flex flex-col items-center sm:w-[800px] w-[300px] -rotate-1">
                    <img src="{{ asset('images/fotbar-3.jpg') }}" alt="KEPUTBAR UKMI"
                        class="border-white rounded border-8 sm:border-[12px] sm:w-[800px] w-[300px] mt-6 object-cover object-center aspect-video h-[180px] sm:h-[450px]">
                    <span class="text-xs italic inline-block w-9/12 text-center text-white sm:text-sm ">
                        *Keputrian Akbar
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
