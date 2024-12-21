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
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.3.0/dist/tailwind.min.css" rel="stylesheet">
    <title>Test</title>
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
                                <a href="/home"
                                    class="{{ request()->is('home') ? 'bg-slate-100 text-black' : 'text-black hover:bg-white hover:text-black' }} rounded-md px-3 py-2 text-md font-medium"
                                    aria-current="page">Home</a>
                                <a href="/home"
                                    class="{{ request()->is('home') ? 'bg-slate-100 text-black' : 'text-black hover:bg-white hover:text-black' }} rounded-md px-3 py-2 text-md font-medium">Alur
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
                    <a href="/home"
                        class="block rounded-md px-3 py-2 text-base font-medium text-black hover:bg-white hover:text-black aria-current="page">Home</a>
                    <a href="/home"
                        class="block rounded-md px-3 py-2 text-base font-medium text-black hover:bg-white hover:text-black">Alur
                        Kerja</a>
                </div>

            </div>
        </nav>

        <div>
            <div class="mx-auto sm:px-6 lg:px-0">

                <div class="bg-white py-10">
                    <h1 class="text-4xl font-bold text-center lg:py-5 tracking-wide text-gray-900">Q&A</h1>

                    <!-- Error Handling -->
                    @if ($errors->any())
                        <div class="bg-red-100 text-red-800 px-4 py-3 rounded">
                            <ul class="list-disc list-inside">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <!-- Form -->
                    <form method="POST" action="{{ route('recommendation.get') }}" class="space-y-6 text-center mt-10">
                        @csrf
                        <hr class="my-6 border-black">
                        <!-- Tujuan -->
                        <div>
                            <p class="font-semibold mb-4 tracking-wide">Tujuan</p>
                            <div class="flex items-center space-x-4 justify-center">
                                <label class="flex items-center space-x-2">
                                    <input type="radio" name="tujuan" value="diet" class="form-radio text-blue-600"
                                        {{ old('tujuan') == 'diet' ? 'checked' : '' }}>
                                    <span>DIET</span>
                                </label>
                                <label class="flex items-center space-x-2">
                                    <input type="radio" name="tujuan" value="bulking"
                                        class="form-radio text-blue-600"
                                        {{ old('tujuan') == 'bulking' ? 'checked' : '' }}>
                                    <span>BULKING</span>
                                </label>
                            </div>
                        </div>
                        <hr class="my-6 border-black">

                        <!-- Hobi -->
                        <div>
                            <p class="font-semibold mt-10 mb-4 tracking-wide">Apakah memiliki hobi olahraga/gym?</p>
                            <div class="flex items-center space-x-4 justify-center">
                                <label class="flex items-center space-x-2">
                                    <input type="radio" name="hobi" value="yes"
                                        class="form-radio text-blue-600" {{ old('hobi') == 'yes' ? 'checked' : '' }}>
                                    <span>YES</span>
                                </label>
                                <label class="flex items-center space-x-2">
                                    <input type="radio" name="hobi" value="no"
                                        class="form-radio text-blue-600" {{ old('hobi') == 'no' ? 'checked' : '' }}>
                                    <span>NO</span>
                                </label>
                            </div>
                        </div>
                        <hr class="my-6 border-black">

                        <!-- Rencana Makanan Harian -->
                        <div>
                            <p class="font-semibold mt-10 mb-4 tracking-wide">Apakah membutuhkan rencana makanan
                                harian?</p>
                            <div class="flex items-center space-x-4 justify-center">
                                <label class="flex items-center space-x-2">
                                    <input type="radio" name="rencana_makan" value="yes"
                                        class="form-radio text-blue-600"
                                        {{ old('rencana_makan') == 'yes' ? 'checked' : '' }}>
                                    <span>YES</span>
                                </label>
                                <label class="flex items-center space-x-2">
                                    <input type="radio" name="rencana_makan" value="no"
                                        class="form-radio text-blue-600"
                                        {{ old('rencana_makan') == 'no' ? 'checked' : '' }}>
                                    <span>NO</span>
                                </label>
                            </div>
                        </div>
                        <hr class="my-6 border-black">

                        <!-- Informasi Kalori -->
                        <div>
                            <p class="font-semibold mt-10 mb-4 tracking-wide">Apakah membutuhkan informasi kalori dari
                                makanan sehari-hari?</p>
                            <div class="flex items-center space-x-4 justify-center">
                                <label class="flex items-center space-x-2">
                                    <input type="radio" name="kalori" value="yes"
                                        class="form-radio text-blue-600"
                                        {{ old('kalori') == 'yes' ? 'checked' : '' }}>
                                    <span>YES</span>
                                </label>
                                <label class="flex items-center space-x-2">
                                    <input type="radio" name="kalori" value="no"
                                        class="form-radio text-blue-600" {{ old('kalori') == 'no' ? 'checked' : '' }}>
                                    <span>NO</span>
                                </label>
                            </div>
                        </div>
                        <hr class="my-6 border-black">

                        <!-- Makronutrien -->
                        <div>
                            <p class="font-semibold mt-10 mb-4 tracking-wide">Apakah membutuhkan informasi
                                makronutrien?</p>
                            <div class="flex items-center space-x-4 justify-center">
                                <label class="flex items-center space-x-2">
                                    <input type="radio" name="makronutrien" value="yes"
                                        class="form-radio text-blue-600"
                                        {{ old('makronutrien') == 'yes' ? 'checked' : '' }}>
                                    <span>YES</span>
                                </label>
                                <label class="flex items-center space-x-2">
                                    <input type="radio" name="makronutrien" value="no"
                                        class="form-radio text-blue-600"
                                        {{ old('makronutrien') == 'no' ? 'checked' : '' }}>
                                    <span>NO</span>
                                </label>
                            </div>
                        </div>
                        <hr class="my-6 border-black">

                        <!-- Camilan -->
                        <div>
                            <p class="font-semibold mt-10 mb-4 tracking-wide">Apakah membutuhkan camilan selama
                                program?</p>
                            <div class="flex items-center space-x-4 justify-center">
                                <label class="flex items-center space-x-2">
                                    <input type="radio" name="camilan" value="yes"
                                        class="form-radio text-blue-600"
                                        {{ old('camilan') == 'yes' ? 'checked' : '' }}>
                                    <span>YES</span>
                                </label>
                                <label class="flex items-center space-x-2">
                                    <input type="radio" name="camilan" value="no"
                                        class="form-radio text-blue-600"
                                        {{ old('camilan') == 'no' ? 'checked' : '' }}>
                                    <span>NO</span>
                                </label>
                            </div>
                        </div>
                        <hr class="my-6 border-black">

                        <!-- Hidrasi -->
                        <div>
                            <p class="font-semibold mt-10 mb-4 tracking-wide">Apakah membutuhkan informasi hidrasi?</p>
                            <div class="flex items-center space-x-4 justify-center">
                                <label class="flex items-center space-x-2">
                                    <input type="radio" name="hidrasi" value="yes"
                                        class="form-radio text-blue-600"
                                        {{ old('hidrasi') == 'yes' ? 'checked' : '' }}>
                                    <span>YES</span>
                                </label>
                                <label class="flex items-center space-x-2">
                                    <input type="radio" name="hidrasi" value="no"
                                        class="form-radio text-blue-600"
                                        {{ old('hidrasi') == 'no' ? 'checked' : '' }}>
                                    <span>NO</span>
                                </label>
                            </div>
                        </div>
                        <hr class="my-6 border-black">

                        <!-- Submit Button -->
                        <div>
                            <button type="submit"
                                class="w-2/12 mt-16 mb-20 bg-blue-600 text-white py-2 rounded hover:bg-blue-700 justify-center">Continue</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
