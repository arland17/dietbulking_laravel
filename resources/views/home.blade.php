<!DOCTYPE html>
<html lang="en" class="h-full">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.3.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <title>Home</title>
    <style>
        html {
            scroll-behavior: smooth;
        }
    </style>

</head>

<body class="h-full">
    <div class="min-h-full">

        <nav class="bg-[#0080FF]" x-data="{ isOpen: false }">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="flex h-20 items-center justify-between">
                    <div class="flex items-center">
                        <div class="shrink-0">
                            <img class="size-10 w-full" src="{{ asset('img/LOGO.png') }}" alt="Logo">
                        </div>
                        <div class="hidden md:block">
                            <div class="ml-14 flex items-baseline space-x-4">
                                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                                <a href="#home"
                                    class="{{ request()->is('home') ? 'bg-slate-100 text-black' : 'text-black hover:bg-white hover:text-black' }} rounded-md px-3 py-2 text-md font-medium">Home</a>
                                <a href="#alurkerja"
                                    class="{{ request()->is('alurkerja') ? 'bg-slate-100 text-black' : 'text-black hover:bg-white hover:text-black' }} rounded-md px-3 py-2 text-md font-medium">Alur
                                    Kerja</a>
                            </div>
                        </div>
                    </div>

                    <div class="hidden md:block">
                        <div class="ml-4 flex items-center md:ml-6">

                            <!-- Profile dropdown -->
                            <div class="relative ml-3">
                                <div x-show="isOpen" x-transition:enter="transition ease-out duration-100 transform"
                                    x-transition:enter-start="opacity-0 scale-95"
                                    x-transition:enter-end="opacity-100 scale-100"
                                    x-transition:leave="transition ease-in duration-75 transform"
                                    x-transition:leave-start="opacity-100 scale-100"
                                    x-transition:leave-end="opacity-0 scale-95"
                                    class="origin-top-right absolute right-0 mt-2 w-56 rounded-md shadow-lg"class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black/5 focus:outline-none"
                                    role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button"
                                    tabindex="-1">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="-mr-2 flex md:hidden">
                        <!-- Mobile menu button -->
                        <button @click="isOpen = !isOpen" type="button"
                            class="relative inline-flex items-center justify-center rounded-md bg-white p-2 text-black hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800"
                            aria-controls="mobile-menu" aria-expanded="false">
                            <span class="absolute -inset-0.5"></span>
                            <span class="sr-only">Open main menu</span>
                            <!-- Menu open: "hidden", Menu closed: "block" -->
                            <svg :class="{ 'hidden': isOpen, 'block': !isOpen }" class="block size-6" fill="none"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true"
                                data-slot="icon">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                            </svg>
                            <!-- Menu open: "block", Menu closed: "hidden" -->
                            <svg :class="{ 'block': isOpen, 'hidden': !isOpen }" class="hidden size-6" fill="none"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true"
                                data-slot="icon">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Mobile menu, show/hide based on menu state. -->
            <div x-show="isOpen" class="md:hidden" id="mobile-menu">
                <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
                    <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                    <a href="#home"
                        class="block rounded-md px-3 py-2 text-base font-medium text-black hover:bg-white hover:text-black aria-current="page">Home</a>
                    <a href="#alurkerja"
                        class="block rounded-md px-3 py-2 text-base font-medium text-black hover:bg-white hover:text-black">Alur
                        Kerja</a>
                </div>

            </div>
        </nav>

        <div>
            <div class="mx-auto sm:px-6 lg:px-0">

                <div id="home" class="bg-white p-6 relative h-screen ">

                    <img src="{{ asset('img/BG.png') }}" class="absolute w-3/12 z-0 bottom-0 top-0 right-0"> </img>

                    <div
                        class="flex flex-col z-10 lg:flex-row items-center lg:justify-between px-10 py-5 mt-0 relative">
                        <!-- Text Section -->
                        <div class="text-gray-900 max-w-2xl mb-20">
                            <!-- Title Section -->
                            <h1 class="text-5xl font-bold text-gray-900">DIET & BULKING!</h1>
                            <p class="text-justify font normal lg:mt-10">D&B adalah sistem informasi berbasis Website
                                Based yang memanfaatkan teknologi Sistem Pakar didalamnya. Dengan menggunakan Sistem
                                Pakar ini User dapat mengetahui dan memeriksa kebutuhan tubuh User hanya dengan menjawab
                                beberapa pertanyaan yang diberikan sistem, dan kemudian User dapat melihat hasil Test
                                yang akan ditampilkan oleh sistem.</p>
                        </div>
                        <!-- Image Section -->
                        <div class="mt-6 lg:mt-0">
                            <img src="{{ asset('img/LOGO 2.png') }}" alt="Diet & Bulking Icon"
                                class="w-10/12 h-10/12 mx-auto lg:mx-0">
                        </div>
                    </div>

                    <!-- Buttons Section -->
                    <h1 class="text-3xl font-bold -mt-12 text-gray-900 relative max-w-7xl px-10">AYO MULAI TEST!</h1>
                    <div class="mt-8 flex justify-start space-x-4 relative max-w-7xl px-10">
                        <button onclick="window.location.href='{{ 'test' }}'"
                            class="bg-blue-500 hover:bg-blue-700 w-2/12 text-white font-bold py-2 px-4 rounded">
                            MULAI TEST
                        </button>
                    </div>
                </div>
            </div>

            <!-- Section 1 -->
            <section id="alurkerja" class="bg-white p-6">
                <h1 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-center lg:py-5 text-gray-900">
                    Alur Sistem Pakar Kerja D&B!
                </h1>

                <div
                    class="flex flex-col lg:flex-row items-center justify-around mx-4 sm:mx-10 lg:mx-40 space-y-6 lg:space-y-0">
                    <div class="w-full lg:w-1/3 flex justify-center">
                        <img src="{{ asset('img/START.png') }}" alt="Start Icon" class="w-10/12 h-auto">
                    </div>
                    <div class="w-full lg:w-1/3 flex justify-center">
                        <img src="{{ asset('img/TEST.png') }}" alt="Test Icon" class="w-10/12 h-auto">
                    </div>
                    <div class="w-full lg:w-1/3 flex justify-center">
                        <img src="{{ asset('img/RESULT.png') }}" alt="Result Icon" class="w-10/12 h-auto">
                    </div>
                </div>
            </section>

            <!-- Section 2 -->
            <section class="bg-gray-white mt-10 px-4 sm:px-6 lg:px-8">
                <div class="swiper mySwiper">
                    <!-- Carousel Container -->
                    <div class="swiper-wrapper">
                        <!-- Slide 1 -->
                        <div class="swiper-slide flex justify-center items-center">
                            <img src="{{ asset('img/FOOD.png') }}" alt="Slide 1"
                                class="w-11/12 lg:w-full object-cover">
                        </div>
                        <!-- Slide 2 -->
                        <div class="swiper-slide flex justify-center items-center">
                            <img src="{{ asset('img/GYM.png') }}" alt="Slide 2"
                                class="w-11/12 lg:w-full object-cover">
                        </div>
                    </div>

                    <!-- Pagination -->
                    <div class="swiper-pagination"></div>
                </div>
            </section>

            <!-- Swiper.js Initialization -->
            <script>
                const swiper = new Swiper('.mySwiper', {
                    loop: true,
                    autoplay: {
                        delay: 3000,
                        disableOnInteraction: false,
                    },
                    pagination: {
                        el: '.swiper-pagination',
                        clickable: true,
                    },
                });
            </script>
        </div>
    </div>
</body>

</html>
