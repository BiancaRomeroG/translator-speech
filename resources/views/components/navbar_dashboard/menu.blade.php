<div>
    <li class="relative" x-data="{ open: false }"  @keydown.escape.stop="open = false" @click.away="open = false">
        <a id="dropdown-01" class="block py-3 lg:py-7 px-0 lg:px-4 hover:text-gray-300 color_nav_fuente" href="javascript:;" @click="open = !open" aria-haspopup="true" x-bind:aria-expanded="open" :class="{ 'text-gray-300': open }">
          <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block h-4 w-4 ltr:mr-1 rtl:ml-1 bi bi-layout-sidebar-inset" viewBox="0 0 16 16">
            <path d="M14 2a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1h12zM2 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H2z"/>
            <path d="M3 4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V4z"/>
          </svg>
          <!-- <i class="mr-2 fas fa-columns"></i> -->
         {{$nombreMenu}}
          <!-- caret -->
          <span class="inline-block ltr:ml-2 ltr:float-right rtl:mr-2 rtl:float-left mt-1.5 lg:float-none">
            <svg xmlns="http://www.w3.org/2000/svg" width=".8rem" height=".8rem" fill="currentColor" viewBox="0 0 512 512"><polyline points="112 184 256 328 400 184" style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:48px"/></svg>
          </span>
        </a>
        <!-- dropdown menu -->
        <ul class="block lg:absolute ltr:border-l-2 rtl:border-r-2 border-gray-400 lg:ltr:border-l-0 lg:rtl:border-r-0 lg:border-t-2 lg:border-indigo-500 rounded rounded-t-none top-full z-50 py-0.5 ltr:text-left rtl:text-right lg:bg-white lg:shadow-md lg:text-gray-600 dark:bg-gray-800 dark:border-gray-700" style="min-width: 12rem;display:none;" x-description="Dropdown menu" x-show="open" role="menu" aria-orientation="vertical" aria-labelledby="dropdown-01" x-transition:enter="transition duration-200" x-transition:enter-start="transform opacity-0 translate-y-4" x-transition:enter-end="transform opacity-100 translate-y-0" x-transition:leave="transition translate-y-4" x-transition:leave-start="transform opacity-100 translate-y-0" x-transition:leave-end="transform opacity-0 translate-y-4">
          {{$slot}}
          
        </ul>
      </li>
</div>