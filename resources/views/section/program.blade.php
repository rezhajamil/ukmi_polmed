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
                @include('components.bg-dot', ['position' => '-left-8 top-8'])
                <div class="flex justify-center">
                    <img src="{{ asset('images/camp-2.jpg') }}" alt="Camping UKMI"
                        class="sm:w-[600px] border-[12px] border-white rounded w-[300px] scale-90 h-[180px] sm:h-[350px] sm:-mr-12 -mr-24 sm:-mb-8 -rotate-6 object-cover object-center aspect-video">
                    <img src="{{ asset('images/camp-1.jpg') }}" alt="Camping UKMI"
                        class="sm:w-[600px] border-[12px] border-white rounded w-[300px] scale-90 h-[180px] sm:h-[350px] object-cover object-center aspect-video">
                    <img src="{{ asset('images/camp-3.jpg') }}" alt="Camping UKMI"
                        class="sm:w-[600px] border-[12px] border-white rounded w-[300px] scale-90 h-[180px] sm:h-[350px] sm:-ml-12 -ml-24 sm:-mb84 rotate-6 object-cover object-center aspect-video">
                </div>
                <iframe src="https://drive.google.com/file/d/1zzEre0lPne9Sd0j7OO46VyuijHP40DjF/preview"
                    class="sm:w-9/12 border-[12px] border-white rounded w-full h-full sm:h-fit rotate-[2deg] sm:-mt-12 -mt-10 object-cover object-center aspect-video"
                    width="640" height="480" allow="autoplay">
                </iframe>
            </div>
        </div>
    </div>
</div>
