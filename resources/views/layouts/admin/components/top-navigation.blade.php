<div class="w-full flex items-center font-popin text-gray-500 bg-white h-16 fixed">
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
        x-data :class="$store.sidebar.navOpen ? 'block' : 'flex'"
      >
        <i data-feather="x" class="cursor-pointer hover:text-red-500"></i>
        <span x-text="$store.sidebar.navOpen"></span>
      </div>

      <div x-data="dropdown" class="relative hidden sm:block" x-data :class="$store.sidebar.full ? 'sm:ml-64' : 'ml-20' ">
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
          <li class="pl-4 py-2 hover:bg-gray-100 cursor-pointer">Student</li>
          <li class="pl-4 py-2 hover:bg-gray-100 cursor-pointer">Staff</li>
          <li class="pl-4 py-2 hover:bg-gray-100 cursor-pointer">Event</li>
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
              src="{{ Vite::asset('/resources/images/avatar/avatar.jpg') }}"
              alt=""
              class="w-8 h-8 rounded-full"
            />
            <div class="flex items-center">
              <span class="hidden sm:block text-sm">{{ Auth()->user()->name }}</span>
              <i
                data-feather="chevron-down"
                class="h-4 w-4 ml-2 cursor-pointer"
              ></i>
            </div>
          </div>
          <ul
            x-show="open"
            @click.outside="open =false"
            class="py-4 bg-white absolute top-12 right-1 w-[225px] rounded-md shadow-lg" x-cloak
          >
            <li class="pl-6 pb-3 hover:bg-gray-100 cursor-pointer flex items-center gap-4">
              <img
              src="{{ Vite::asset('/resources/images/avatar/avatar.jpg') }}"
              alt=""
              class="w-8 h-8 rounded-full"
            /> 
            <div class=""> 
              <div class="text-gray-800 font-semibold">{{ Auth()->user()->name }}</div>
              <span class="block text-xs text-gray-400">Administrator</span>
            </div>
            </li>
            <hr class="py-2">
            <li class="pl-6 py-2 hover:bg-gray-100 cursor-pointer flex items-center gap-4">
              <span><i
                data-feather="user-check"
                class="h-4 w-4 ml-2 cursor-pointer"
              ></i></span> 
              <span>My Profile</span>
            </li>
            <li class="pl-6 py-2 hover:bg-gray-100 cursor-pointer flex items-center gap-4">
              <span><i
                data-feather="settings"
                class="h-4 w-4 ml-2 cursor-pointer"
              ></i></span> 
              <span>Settings</span>
            </li>
            <hr class="">
            <li class="pl-2 py-2 hover:bg-gray-100 cursor-pointer flex gap-4">
              <form method="POST" action="{{ route('logout') }}">
                @csrf
                <x-dropdown-link :href="route('logout')"
                        onclick="event.preventDefault();
                                    this.closest('form').submit();" class="flex items-center gap-4 pb-0">
                    <span><i
                      data-feather="log-out"
                      class="h-4 w-4 ml-2 cursor-pointer"
                    ></i></span> 
                    <span>Logout</span>
                </x-dropdown-link>
              </form>
              
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>