<x-layout>
     <!-- Section 1 -->
    <section class="bg-white p-6">
        <!-- Title Section -->
        <h1 class="text-4xl font-bold text-center lg:py-5 text-gray-900">Alur Sistem Pakar Kerja D&B!</h1>

        <div class="flex flex-col z-10 lg:flex-row items-center lg:justify-between mx-10 lg:mx-40 mt-0 relative">
            <div class="mt-6 lg:mt-0">
                <img src="{{asset ('img/START.png')}}" alt="Diet & Bulking Icon" class="w-10/12 h-10/12 mx-auto lg:mx-0">
            </div>
            <div class="mt-6 lg:mt-6">
                <img src="{{asset ('img/TEST.png')}}" alt="Diet & Bulking Icon" class="w-10/12 h-10/12 mx-auto lg:mx-0">
            </div>
            <div class="mt-6 lg:mt-6">
              <img src="{{asset ('img/RESULT.png')}}" alt="Diet & Bulking Icon" class="w-10/12 h-10/12 mx-auto lg:mx-0">
            </div>
          </div>
    </section>

     <!-- Section 2 -->
     <section class="bg-gray-white mt-10">
        <div class="swiper mySwiper">
            <!-- Carousel Container -->
            <div class="swiper-wrapper">
                <!-- Slide 1 -->
                <div class="swiper-slide flex justify-center items-center">
                    <img src="{{asset ('img/FOOD.png')}}" alt="Slide 1" class="w-11/12 lg:w-full object-cover">
                </div>
                <!-- Slide 2 -->
                <div class="swiper-slide flex justify-center items-center">
                    <img src="{{asset ('img/GYM.png')}}" alt="Slide 2" class="w-11/12 lg:w-full object-cover">
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
</x-layout>