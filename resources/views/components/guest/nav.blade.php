<div>
    
    <!-- preloader -->
  <div class="preloader loaded-success fixed inset-0 bg-gray-100 ">
    <div class="absolute left-[45%] top-[50%] transform -translate-y-1/2">
      <div class="relative mx-auto my-12">
        <div class="block text-center">
          <img class="h-10 text-center mx-auto animate-bounce" src="{{asset('src/img/favicon.png')}}" alt="">
          
          <!-- <i class="text-3xl text-indigo-500 fas fa-circle-notch fa-spin"></i> -->
        </div>
        <p class="mx-auto font-bold animate-bounce bg-gradient-to-r from-green-300 via-blue-500 to-indigo-600 bg-clip-text text-3xl text-transparent">SYSTRAN</p>
      </div>
    </div>
  </div>
  
  <header class="shadow-md bg-white">
    <div class="container mx-auto xl:max-w-7xl ">
      <!-- Navbar -->
      <nav class="flex flex-row flex-nowrap items-center justify-between mt-0 py-4 px-6" id="desktop-menu">
        <!-- logo -->
        <a class="flex items-center py-2 ltr:mr-4 rtl:ml-4 text-xl" href="../index.html">
          <h2 class="text-2xl font-semibold text-gray-200 px-4 max-h-9 overflow-hidden">
            <img class="inline-block w-7 h-auto ltr:mr-2 rtl:ml-2 -mt-1" src="{{asset('src/img/favicon.png')}}">
            
          </svg><span class="text-gray-700">SYSTRAN</span>
          </h2>
        </a>

        <!-- menu -->
        <ul class="flex ltr:ml-auto rtl:mr-auto mt-0">
          <li class="relative">
            <a href="{{ route('home') }}" class="block py-3 px-4 hover:text-indigo-500 focus:outline-none">
              <div class="relative inline-block font-bold">Home</div>
            </a>
          </li>
          @if (request()->routeIs('register'))
          <li class="relative">
            <a href="{{ route('login') }}" class="block py-3 px-4 hover:text-indigo-500 focus:outline-none">
              <div class="relative inline-block font-bold">Login</div>
            </a>
          </li>    
          @else
          <li class="relative">
            <a href="{{ route('register') }}" class="block py-3 px-4 hover:text-indigo-500 focus:outline-none">
              <div class="relative inline-block font-bold">Registrarse</div>
            </a>
          </li>    
          @endif
          
        </ul>
      </nav>
      <!-- End Navbar -->
    </div>
  </header>
</div>