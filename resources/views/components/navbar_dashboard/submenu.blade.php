<div>
    <li class="relative" x-data="{ open: false }" @keydown.escape.stop="open = false" @click.away="open = false">
        <a id="submenu-01" class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-gray-300 lg:hover:text-indigo-500 dark:text-gray-400" href="javascript:;"@click="open = !open" aria-haspopup="true" x-bind:aria-expanded="open" :class="{ 'text-gray-300 lg:text-indigo-500': open }">
     {{$nombreSubMenu}}
          <!-- caret -->
          <span class="inline-block ltr:float-right rtl:float-left mt-1 pt-1">
            <svg :class="{ 'rotate-0 lg:ltr:-rotate-90 lg:rtl:rotate-90': open, 'ltr:-rotate-90 rtl:rotate-90': !(open) }" xmlns="http://www.w3.org/2000/svg" class="transform" width=".8rem" height=".8rem" fill="currentColor" viewBox="0 0 512 512"><polyline points="112 184 256 328 400 184" style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:48px"/></svg>
          </span>
        </a>

       
        <ul class="block lg:absolute lg:ltr:left-full lg:rtl:right-full lg:ltr:right-auto lg:rtl:left-auto lg:transform ltr:pl-6 rtl:pr-6 lg:ltr:pl-0 lg:rtl:pr-0 lg:border-t-2 border-indigo-500 rounded rounded-t-none top-full z-50 py-0.5 ltr:text-left rtl:text-right lg:-mt-11 ml-0 mr-0 lg:bg-white lg:shadow-md dark:bg-gray-800 dark:border-gray-700" style="min-width: 12rem;display:none;" x-description="Dropdown menu" x-show="open" role="menu" aria-orientation="vertical" aria-labelledby="submenu-01" x-transition:enter="transition duration-200" x-transition:enter-start="transform opacity-0 translate-y-4" x-transition:enter-end="transform opacity-100 translate-y-0" x-transition:leave="transition translate-y-4" x-transition:leave-start="transform opacity-100 translate-y-0" x-transition:leave-end="transform opacity-0 translate-y-4">
         {{$slot}}
       </ul>
      </li>
</div>