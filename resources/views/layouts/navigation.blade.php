<!-- ====== Navbar Section Start -->
<header x-data="{
    navbarOpen: false
}" id="header"
    class="fixed inset-x-0 top-0 z-20 flex items-center w-full py-2 transition-all ease-in-out bg-transparent shadow-yellow-400/30">
    <div class="px-6 bg-transparent">
        <div class="relative flex items-center justify-between -mx-4 bg-transparent">
            {{-- <div class="max-w-full px-4 w-60">
                <a href="{{ route('home') }}" class="block w-full">
                    <img src="{{ asset('images/logo.png') }}" alt="logo" class="w-24 h-24 aspect-square" />
                </a>
            </div> --}}
            <div class="flex items-center justify-between w-full px-4" @click.away="navbarOpen = false">
                <div>
                    <button @click="navbarOpen = !navbarOpen" :class="navbarOpen && 'navbarTogglerActive'"
                        id="navbarToggler"
                        class="fixed right-4 top-3 block rounded-lg px-3 py-[6px] border border-emerald-600 ring-emerald-600 focus:ring-2 lg:hidden">
                        <span class="relative my-[6px] block h-[2px] w-[30px] bg-emerald-600"></span>
                        <span class="relative my-[6px] block h-[2px] w-[30px] bg-emerald-600"></span>
                        <span class="relative my-[6px] block h-[2px] w-[30px] bg-emerald-600"></span>
                    </button>
                    <a href="{{ route('home') }}#intro"
                        class="block px-4 my-4 text-xl font-bold text-white transition-all sm:hidden hover:text-transparent hover:bg-clip-text hover:bg-gradient-to-r hover:from-teal-200 hover:to-teal-600">
                        UKMI POLMED
                    </a>
                    <nav :class="!navbarOpen && 'hidden'" id="navbarCollapse" @click="navbarOpen = false"
                        class="fixed right-4 top-16 w-full max-w-[250px] z-50 rounded-lg sm:py-5 py-2 sm:px-6 px-1 shadow bg-teal-900 sm:bg-transparent shadow-emerald-700 lg:static lg:flex items-center lg:w-full lg:max-w-full lg:shadow-none">
                        <a href="{{ route('home') }}#intro"
                            class="hidden px-4 text-xl font-bold text-white transition-all border-r-2 sm:block border-r-white hover:text-transparent hover:bg-clip-text hover:bg-gradient-to-r hover:from-teal-200 hover:to-teal-600">
                            UKMI POLMED
                        </a>
                        <ul class="block px-1 lg:flex">
                            <li
                                class="transition cursor-pointer duration-500 ease-in-out rounded group hover:bg-gradient-to-br hover:from-teal-800 hover:to-emerald-900 ">
                                <a href="#intro"
                                    class="flex px-4 py-2 text-lg font-medium text-white transition duration-500 ease-in-out group-hover:text-yellow-400 lg:inline-flex">
                                    Intro
                                </a>
                            </li>
                            <li
                                class="transition cursor-pointer duration-500 ease-in-out rounded group hover:bg-gradient-to-br hover:from-teal-800 hover:to-emerald-900 ">
                                <a href="#program"
                                    class="flex px-4 py-2 text-lg font-medium text-white transition duration-500 ease-in-out group-hover:text-yellow-400 lg:inline-flex">
                                    Program
                                </a>
                            </li>
                            <li
                                class="transition cursor-pointer duration-500 ease-in-out rounded group hover:bg-gradient-to-br hover:from-teal-800 hover:to-emerald-900 ">
                                <a href="#sosmed"
                                    class="flex px-4 py-2 text-lg font-medium text-white transition duration-500 ease-in-out group-hover:text-yellow-400 lg:inline-flex">
                                    Sosial Media
                                </a>
                            </li>
                            <li
                                class="transition cursor-pointer duration-500 ease-in-out rounded group bg-gradient-to-br from-teal-800 to-emerald-900 ">
                                <a href="#join"
                                    class="flex px-4 py-2 text-lg font-medium transition duration-500 ease-in-out text-yellow-400 lg:inline-flex">
                                    Gabung UKMI
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- ====== Navbar Section End -->
