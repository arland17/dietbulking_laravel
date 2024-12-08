<x-layout>
    <div class="bg-white p-6 relative h-screen ">
        
        <img src="{{asset ('img/bg.png')}}" class="absolute w-3/12 z-0 bottom-0 top-0 right-0"> </img>
        
        <div class="flex flex-col z-10 lg:flex-row items-center lg:justify-between px-10 py-5 mt-0 relative">
          <!-- Text Section -->
          <div class="text-gray-900 max-w-2xl mb-20">
            <!-- Title Section -->
            <h1 class="text-5xl font-bold text-gray-900">DIET & BULKING!</h1>
            <p class="text-justify font normal lg:mt-10">D&B adalah sistem informasi berbasis Website Based yang memanfaatkan teknologi Sistem Pakar didalamnya. Dengan menggunakan Sistem Pakar ini User dapat mengetahui dan memeriksa kebutuhan tubuh User hanya dengan menjawab beberapa pertanyaan yang diberikan sistem, dan kemudian User dapat melihat hasil Test yang akan ditampilkan oleh sistem.</p>
          </div>
          <!-- Image Section -->
          <div class="mt-6 lg:mt-0">
            <img src="{{asset ('img/logo 2.png')}}" alt="Diet & Bulking Icon" class="w-10/12 h-10/12 mx-auto lg:mx-0">
          </div>
        </div>
        
        <!-- Buttons Section -->
        <h1 class="text-3xl font-bold -mt-12 text-gray-900 relative max-w-7xl px-10">AYO MULAI TEST!</h1>
        <div class="mt-8 flex justify-start space-x-4 relative max-w-7xl px-10">
          <button onclick="window.location.href='{{('test') }}'" class="bg-blue-500 hover:bg-blue-700 w-2/12 text-white font-bold py-2 px-4 rounded">
            MULAI TEST
          </button>
        </div>
      </div>
    </div>
</x-layout>