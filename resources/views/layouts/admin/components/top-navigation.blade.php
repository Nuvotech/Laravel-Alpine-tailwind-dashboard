<div class="w-full flex items-center text-gray-500 bg-white h-16 fixed" x-data :class="$store.sidebar.full ? 'sm:ml-64' : 'ml-20' ">
    {{-- <div
      class="hidden sm:flex shrink-0 text-center h-full items-center bg-theme-gray"
      x-data :class="$store.sidebar.full ? 'sm:w-64 ' : 'w-20' "
    >
      <a
        href=""
        class="text-white font-black text-center w-full"
        x-bind:class="$store.sidebar.full ? 'text-2xl px-5' : 'px-4 xm:px-2'  "
      >
        LOGO
      </a>
    </div> --}}
    <div
      class="flex justify-between gap-8 px-5 sm:px-10 w-full h-full items-center"
    >
      <svg x-data
        @click="$store.sidebar.navOpen = !$store.sidebar.navOpen"
        xmlns="http://www.w3.org/2000/svg"
        width="24"
        height="24"
        viewBox="0 0 24 24"
        fill="none"
        stroke="currentColor"
        stroke-width="2"
        stroke-linecap="round"
        stroke-linejoin="round"
        class="sm:hidden feather feather-bar-chart-2 rotate-90"
        x-data :class="$store.sidebar.navOpen ? 'hidden'  :''"
      >
        <line x1="18" y1="20" x2="18" y2="10"></line>
        <line x1="12" y1="20" x2="12" y2="4"></line>
        <line x1="6" y1="20" x2="6" y2="14"></line>
      </svg>
      <div x-data
        @click="$store.sidebar.navOpen = !$store.sidebar.navOpen"
        class="sm:hidden"
        x-data :class="$store.sidebar.navOpen ? '' : 'hidden'"
      >
        <i data-feather="x" class="cursor-pointer hover:text-red-500"></i>
      </div>

      <div x-data="dropdown" class="relative hidden sm:block">
        <div @click="toggle()" class="flex items-center">
          <span class="text-sm">+ Create New </span>
          <span>
            <i data-feather="chevron-down" class="h-4 w-4 ml-2"></i>
          </span>
        </div>
        <ul
          x-show="open"
          @click.outside="open =false"
          class="py-4 bg-white absolute top-10 w-36 rounded-md shadow-md text-sm" x-cloak
        >
          <li class="p-2 hover:bg-gray-100 cursor-pointer">Student</li>
          <li class="p-2 hover:bg-gray-100 cursor-pointer">Staff</li>
          <li class="p-2 hover:bg-gray-100 cursor-pointer">Event</li>
        </ul>
      </div>
      <div class="flex items-center gap-4 text-sm">
        <div class="relative">
          <div
            class="absolute p1 -top-2 -right-3 bg-red-500 w-4 h-4 z-40 rounded-full text-white flex items-center justify-center text-[9px]"
          >
            24
          </div>
          <i data-feather="mail" class="h-5 w-5"></i>
        </div>
        <div class="">
          <i data-feather="bell" class="h-5 w-5"></i>
        </div>
        <div x-data="dropdown" class="relative">
          <div @click="toggle('user')" class="flex items-center sm:gap-4">
            <img
              src=""
              alt=""
              class="w-8 h-8 rounded-full"
            />
            <div class="flex items-center">
              <span class="hidden sm:block text-sm">Nataline</span>
              <i
                data-feather="chevron-down"
                class="h-4 w-4 ml-2 cursor-pointer"
              ></i>
            </div>
          </div>
          <ul
            x-show="open"
            @click.outside="open =false"
            class="py-4 bg-white absolute top-12 w-full rounded-md shadow-md" x-cloak
          >
            <li class="p-2 hover:bg-gray-100 cursor-pointer">Profile</li>
            <li class="p-2 hover:bg-gray-100 cursor-pointer">logout</li>
          </ul>
        </div>
      </div>
    </div>
  </div>