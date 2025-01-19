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

        <div class="mx-auto sm:px-6 lg:px-0">

            <div class="bg-white py-10">
                <h1 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-center py-5 tracking-wide text-gray-900">Q&A
                </h1>

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

                    <!-- Jenis Kelamin -->
                    <div>
                        <p class="font-semibold mb-4 tracking-wide">Jenis Kelamin</p>
                        <div class="flex flex-wrap items-center space-x-4 justify-center">
                            <label class="flex items-center space-x-2">
                                <input type="radio" name="jenis_kelamin" value="laki-laki"
                                    class="form-radio text-blue-600"
                                    {{ old('jenis_kelamin') == 'laki-laki' ? 'checked' : '' }}>
                                <span>Laki-laki</span>
                            </label>
                            <label class="flex items-center space-x-2">
                                <input type="radio" name="jenis_kelamin" value="perempuan"
                                    class="form-radio text-blue-600"
                                    {{ old('jenis_kelamin') == 'perempuan' ? 'checked' : '' }}>
                                <span>Perempuan</span>
                            </label>
                        </div>
                    </div>
                    <hr class="my-6 border-black">

                    <!-- Berat Badan Berlebih -->
                    <div>
                        <p class="font-semibold mt-10 mb-4 tracking-wide">Apakah merasa memiliki berat badan yang
                            terlalu berlebih?</p>
                        <div class="flex flex-wrap items-center space-x-4 justify-center">
                            <label class="flex items-center space-x-2">
                                <input type="radio" name="T2" value="Yes" class="form-radio text-blue-600"
                                    {{ old('T2') == 'yes' ? 'checked' : '' }}>
                                <span>YES</span>
                            </label>
                            <label class="flex items-center space-x-2">
                                <input type="radio" name="T2" value="No" class="form-radio text-blue-600"
                                    {{ old('T2') == 'no' ? 'checked' : '' }}>
                                <span>NO</span>
                            </label>
                        </div>
                    </div>
                    <hr class="my-6 border-black">

                    <!-- Meningkatkan Massa Otot -->
                    <div>
                        <p class="font-semibold mt-10 mb-4 tracking-wide">Apakah ingin meningkatkan jumlah massa otot?
                        </p>
                        <div class="flex flex-wrap items-center space-x-4 justify-center">
                            <label class="flex items-center space-x-2">
                                <input type="radio" name="T3" value="Yes" class="form-radio text-blue-600"
                                    {{ old('T3') == 'yes' ? 'checked' : '' }}>
                                <span>YES</span>
                            </label>
                            <label class="flex items-center space-x-2">
                                <input type="radio" name="T3" value="No" class="form-radio text-blue-600"
                                    {{ old('T3') == 'no' ? 'checked' : '' }}>
                                <span>NO</span>
                            </label>
                        </div>
                    </div>
                    <hr class="my-6 border-black">

                    <!-- Aktifitas Fisik -->
                    <div>
                        <p class="font-semibold mt-10 mb-4 tracking-wide">Apakah suka melakukan aktifitas fisik?</p>
                        <div class="flex flex-wrap items-center space-x-4 justify-center">
                            <label class="flex items-center space-x-2">
                                <input type="radio" name="T4" value="Yes" class="form-radio text-blue-600"
                                    {{ old('T4') == 'yes' ? 'checked' : '' }}>
                                <span>YES</span>
                            </label>
                            <label class="flex items-center space-x-2">
                                <input type="radio" name="T4" value="No" class="form-radio text-blue-600"
                                    {{ old('T4') == 'no' ? 'checked' : '' }}>
                                <span>NO</span>
                            </label>
                        </div>
                    </div>
                    <hr class="my-6 border-black">

                    <!-- Latihan Angkat Beban -->
                    <div>
                        <p class="font-semibold mt-10 mb-4 tracking-wide">Apakah melakukan latihan fisik dengan
                            mengangkat beban?</p>
                        <div class="flex flex-wrap items-center space-x-4 justify-center">
                            <label class="flex items-center space-x-2">
                                <input type="radio" name="T5" value="Yes" class="form-radio text-blue-600"
                                    {{ old('T5') == 'yes' ? 'checked' : '' }}>
                                <span>YES</span>
                            </label>
                            <label class="flex items-center space-x-2">
                                <input type="radio" name="T5" value="No" class="form-radio text-blue-600"
                                    {{ old('T5') == 'no' ? 'checked' : '' }}>
                                <span>NO</span>
                            </label>
                        </div>
                    </div>
                    <hr class="my-6 border-black">

                    <!-- Keterbatasan Pergi ke Gym -->
                    <div>
                        <p class="font-semibold mt-10 mb-4 tracking-wide">Apakah memiliki keterbatasan untuk pergi ke
                            gym?</p>
                        <div class="flex flex-wrap items-center space-x-4 justify-center">
                            <label class="flex items-center space-x-2">
                                <input type="radio" name="T6" value="Yes" class="form-radio text-blue-600"
                                    {{ old('T6') == 'yes' ? 'checked' : '' }}>
                                <span>YES</span>
                            </label>
                            <label class="flex items-center space-x-2">
                                <input type="radio" name="T6" value="No" class="form-radio text-blue-600"
                                    {{ old('T6') == 'no' ? 'checked' : '' }}>
                                <span>NO</span>
                            </label>
                        </div>
                    </div>
                    <hr class="my-6 border-black">

                    <!-- Pola Makan -->
                    <div>
                        <p class="font-semibold mt-10 mb-4 tracking-wide">Apakah merasa kesulitan dalam mengatur pola
                            makan?</p>
                        <div class="flex flex-wrap items-center space-x-4 justify-center">
                            <label class="flex items-center space-x-2">
                                <input type="radio" name="T7" value="Yes" class="form-radio text-blue-600"
                                    {{ old('T7') == 'yes' ? 'checked' : '' }}>
                                <span>YES</span>
                            </label>
                            <label class="flex items-center space-x-2">
                                <input type="radio" name="T7" value="No" class="form-radio text-blue-600"
                                    {{ old('T7') == 'no' ? 'checked' : '' }}>
                                <span>NO</span>
                            </label>
                        </div>
                    </div>
                    <hr class="my-6 border-black">

                    <!-- Kalori Makanan -->
                    <div>
                        <p class="font-semibold mt-10 mb-4 tracking-wide">Apakah merasa kesulitan untuk menghitung
                            kalori makanan?</p>
                        <div class="flex flex-wrap items-center space-x-4 justify-center">
                            <label class="flex items-center space-x-2">
                                <input type="radio" name="T8" value="Yes" class="form-radio text-blue-600"
                                    {{ old('T8') == 'yes' ? 'checked' : '' }}>
                                <span>YES</span>
                            </label>
                            <label class="flex items-center space-x-2">
                                <input type="radio" name="T8" value="No" class="form-radio text-blue-600"
                                    {{ old('T8') == 'no' ? 'checked' : '' }}>
                                <span>NO</span>
                            </label>
                        </div>
                    </div>
                    <hr class="my-6 border-black">

                    <!-- Tujuan Nutrisi Spesifik -->
                    <div>
                        <p class="font-semibold mt-10 mb-4 tracking-wide">Apakah membutuhkan tujuan nutrisi yang
                            spesifik?</p>
                        <div class="flex flex-wrap items-center space-x-4 justify-center">
                            <label class="flex items-center space-x-2">
                                <input type="radio" name="T9" value="Yes" class="form-radio text-blue-600"
                                    {{ old('T9') == 'yes' ? 'checked' : '' }}>
                                <span>YES</span>
                            </label>
                            <label class="flex items-center space-x-2">
                                <input type="radio" name="T9" value="No" class="form-radio text-blue-600"
                                    {{ old('T9') == 'no' ? 'checked' : '' }}>
                                <span>NO</span>
                            </label>
                        </div>
                    </div>
                    <hr class="my-6 border-black">

                    <!-- Camilan -->
                    <div>
                        <p class="font-semibold mt-10 mb-4 tracking-wide">Apakah membutuhkan camilan selama program?
                        </p>
                        <div class="flex flex-wrap items-center space-x-4 justify-center">
                            <label class="flex items-center space-x-2">
                                <input type="radio" name="T10" value="Yes" class="form-radio text-blue-600"
                                    {{ old('T10') == 'yes' ? 'checked' : '' }}>
                                <span>YES</span>
                            </label>
                            <label class="flex items-center space-x-2">
                                <input type="radio" name="T10" value="No" class="form-radio text-blue-600"
                                    {{ old('T10') == 'no' ? 'checked' : '' }}>
                                <span>NO</span>
                            </label>
                        </div>
                    </div>
                    <hr class="my-6 border-black">

                    <!-- Hidrasi -->
                    <div>
                        <p class="font-semibold mt-10 mb-4 tracking-wide">Apakah membutuhkan informasi hidrasi?</p>
                        <div class="flex flex-wrap items-center space-x-4 justify-center">
                            <label class="flex items-center space-x-2">
                                <input type="radio" name="T11" value="Yes" class="form-radio text-blue-600"
                                    {{ old('T11') == 'yes' ? 'checked' : '' }}>
                                <span>YES</span>
                            </label>
                            <label class="flex items-center space-x-2">
                                <input type="radio" name="T11" value="No" class="form-radio text-blue-600"
                                    {{ old('T11') == 'no' ? 'checked' : '' }}>
                                <span>NO</span>
                            </label>
                        </div>
                    </div>
                    <hr class="my-6 border-black">

                    <!-- Submit Button -->
                    <div>
                        <button type="submit"
                            class="w-3/12 sm:w-1/2 lg:w-2/12 mt-16 mb-20 bg-blue-600 text-white py-2 rounded hover:bg-blue-700 justify-center">Continue</button>
                    </div>
                </form>
            </div>
        </div>

    </div>

</body>

</html>
