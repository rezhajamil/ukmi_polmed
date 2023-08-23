<div class="w-full min-h-screen py-3 overflow-x-hidden sm:py-10">
    <h1 class="mb-4 text-3xl font-bold text-center text-white xl:text-5xl">
        Di <span class="text-yellow-400">UKMI</span> ngapain aja sih??
    </h1>
    <div class="grid grid-cols-1 gap-4 px-4 py-8 sm:grid-cols-2 sm:px-6">
        <div class="flex flex-col gap-6">
            <span class="text-base font-bold text-center text-white sm:text-2xl">
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
                <div class="">
                </div>
            </div>
        </div>
        <div class="flex flex-col gap-6">
            <span class="text-base font-bold text-center text-white sm:text-2xl">
                Pengen Nge-Camp??
                <span class="text-yellow-400"> Hayuk!!</span>
            </span>
            <div class="relative flex flex-col items-center sm:min-h-screen">
                @include('components.bg-dot-teal', ['position' => '-right-8 top-16'])
                @include('components.bg-dot-teal', ['position' => '-left-8 top-8'])
                <img src="{{ asset('images/mentoring-3.jpg') }}" alt="Mentoring UKMI"
                    class="sm:w-[600px] border-[12px] border-white rounded w-[300px] scale-90 h-[180px] sm:h-[350px] -rotate-6 object-cover object-center aspect-video">
                <img src="{{ asset('images/mentoring-1.jpg') }}" alt="Mentoring UKMI"
                    class="sm:w-[600px] border-[12px] border-white rounded w-[300px] h-[180px] sm:h-[350px] rotate-[10deg] -mt-16 sm:-ml-12 -ml-14 object-cover object-center aspect-video">
                <div class="">
                </div>
            </div>
        </div>
    </div>
</div>
