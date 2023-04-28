<div class="fixed z-40">
  {{-- Navigation  --}}
    <nav
      class="w-64 h-screen bg-theme-gray transition-all duration-300 space-y-2 fixed sm:relative"
      x-data :class="{'w-64':$store.sidebar.full, 'w-64 sm:w-20':!$store.sidebar.full, '':$store.sidebar.navOpen, 'hidden sm:block':!$store.sidebar.navOpen} "x-cloak
    >
    <div class="pt-4 flex justify-between">
      <a
          href=""
          class="text-white font-black text-center w-full pt-10"
         x-data :class="$store.sidebar.full ? 'text-2xl px-5' : 'px-4 xm:px-2'  "
        >
        LOGO
      </a>
      <div class="text-white">
        <span> X </span>
      </div>
    </div>
      <!-- navigation list -->
      <div class="px-4">
        <!-- toggle sidebar  -->
        <button x-data  @click="$store.sidebar.full = !$store.sidebar.full"
          class="hidden sm:block absolute p-1 -right-3 top-5 bg-gray-900 rounded-full shadow-md z-40"
        >
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="24"
            height="24"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="2"
            stroke-linecap="round"
            stroke-linejoin="round"
            class="feather feather-chevron-down h-5 w-5 text-white transform"
            x-bind:class="$store.sidebar.full ? 'rotate-90' : '-rotate-90' "
          >
            <polyline points="6 9 12 15 18 9"></polyline>
          </svg>
        </button>

        <ul class="pt-6 text-base">
          <!-- Home  -->
          <li
            class="relative flex items-center space-x-2 rounded-md p-2 cursor-pointer mb-5  active-navigation"
            :class="{'justiy-start' : $store.sidebar.full, 'sm:justify-center': !$store.sidebar.full}"
          >
            <i data-feather="home" class="h-4 w-4"></i>
            <h1 :class="$store.sidebar.full ? '' : 'hidden'">
              <a href="{{ route('dashboard') }}">Dashboard</a>
            </h1>
          </li>
          <!-- Pages  -->
          <li x-data="dropdown" class="relative mb-4 ">
            <div
              @click="toggle('pages')"
              class="flex justify-between text-gray-400 hover:text-gray-200 hover:bg-gray-800 items-center space-x-2 rounded-md p-2 cursor-pointer"
            >
              <div class="relative flex space-x-2 items-center">
                <i data-feather="file-text" class="h-4 w-4"></i>
                <h1 :class="$store.sidebar.full ? '' : 'hidden'">Pages</h1>
              </div>
              <i data-feather="chevron-down"></i>
            </div>
            <!-- dropdown content for pages  -->
            <ul
              x-show="open"
              @click.outside="open =false"
              :class="$store.sidebar.full ? 'border-l border-gray-400 ml-6 pl-4 ' : 'shrinked-dropdown'"
              class="text-gray-400 space-y-3"
            >
              <li
                class="text-gray-100 hover:text-gray-200 cursor-pointer"
                :class="$store.sidebar.full ? 'mt-2' : ''"
              >
                <a href="/src/pages/starter.html">Starter</a>
              </li>
              <li
                class="hover:text-gray-200 cursor-pointer"
                :class="$store.sidebar.full ? 'mt-2' : ''"
              >
                <a href="/src/pages/profile.html">Profile</a>
              </li>
              <li class="hover:text-gray-200 cursor-pointer">
                <a href="src/pages/invoice.html">Invoice</a>
              </li>
              <li class="hover:text-gray-200 cursor-pointer">
                <a href="/src/pages/archive.html">Login</a>
              </li>
              <li class="hover:text-gray-200 cursor-pointer">
                <a href="/src/pages/suspended.html">Register</a>
              </li>
            </ul>
          </li>

          <!-- UI Elements  -->
          <li x-data="dropdown" class="relative mb-4 ">
            <div
              @click="toggle('ui-element')"
              class="flex justify-between text-gray-400 hover:text-gray-200 hover:bg-gray-800 items-center space-x-2 rounded-md p-2 cursor-pointer"
            >
              <div class="relative flex space-x-2 items-center">
                <i data-feather="layers" class="h-4 w-4"></i>
                <h1 :class="$store.sidebar.full ? '' : 'hidden'">
                  UI Elements
                </h1>
              </div>
              <i data-feather="chevron-down"></i>
            </div>

            <!-- dropdown content for UI Elements  -->
            <ul
              x-show="open"
              @click.outside="open =false"
              :class="$store.sidebar.full ? 'border-l border-gray-400 ml-6 pl-4 ' : 'sm:absolute top-0 left-20 sm:shadow-md sm:z-10 sm:bg-gray-900 sm:rounded-md sm:p-4 bordered-l sm:border-none border-gray-400 ml-4 pl-4 sm:ml-0 w-28'"
              class="text-gray-400 space-y-3"
            >
              <li
                class="hover:text-gray-200 cursor-pointer"
                :class="$store.sidebar.full ? 'mt-2' : ''"
              >
                <a href="/src/pages/components/cards.html"> Cards </a>
              </li>
              <li class="hover:text-gray-200 cursor-pointer">Alert</li>
              <li class="hover:text-gray-200 cursor-pointer">
                <a href="/src/pages/components/buttons.html">Button</a>
              </li>
              <li class="hover:text-gray-200 cursor-pointer">Modal</li>
            </ul>
          </li>
          <!-- Tables  -->
          <li class="relative mb-4 ">
            <div
              class="flex justify-between text-gray-400 hover:text-gray-200 hover:bg-gray-800 items-center space-x-2 rounded-md p-2 cursor-pointer"
            >
              <div class="relative flex space-x-2 items-center">
                <i data-feather="list" class="h-4 w-4"></i>
                <h1 :class="$store.sidebar.full ? '' : 'hidden'">
                  <a href="/src/pages/tables.html">Tables</a>
                </h1>
              </div>
            </div>
          </li>
          <!-- My Forms  -->
          <li class="relative mb-4 ">
            <div
              class="relative flex items-center text-gray-400 hover:text-gray-200 hover:bg-gray-800 space-x-2 rounded-md p-2 cursor-pointer"
            >
              <a
                href="/src/pages/components/forms.html"
                class="flex space-x-2"
              >
                <i data-feather="edit" class="h-4 w-4"></i>
                <h1
                  class=""
                  :class="$store.sidebar.full ? '' : 'hidden'"
                >
                  Forms
                </h1>
              </a>
            </div>
          </li>

          <!-- Jobs  -->
          <li x-data="dropdown" class="relative mb-4 ">
            <div
              @click="toggle('jobs')"
              class="flex justify-between text-gray-400 hover:text-gray-200 hover:bg-gray-800 items-center space-x-2 rounded-md p-2 cursor-pointer"
            >
              <div class="relative flex space-x-2 items-center">
                <i data-feather="calendar" class="h-4 w-4"></i>
                <h1 :class="$store.sidebar.full ? '' : 'hidden'">Jobs</h1>
              </div>
              <i data-feather="chevron-down"></i>
            </div>

            <!-- dropdown content  -->
            <div
              x-show="open"
              @click.outside="open =false"
              :class="$store.sidebar.full ? 'border-l border-gray-400 ml-4 pl-4 ' : 'sm:absolute top-0 left-20 sm:shadow-md sm:z-10 sm:bg-gray-900 sm:rounded-md sm:p-4 bordered-l sm:border-none border-gray-400 ml-4 pl-4 sm:ml-0 w-28'"
              class="text-gray-400 space-y-3"
            >
              <h1 class="hover:text-gray-200 cursor-pointer">
                <a href="/src/pages/jobs/job-list.html"> Job List </a>
              </h1>
              <h1 class="hover:text-gray-200 cursor-pointer">Job Grid</h1>
              <h1 class="hover:text-gray-200 cursor-pointer">
                <a
                  href="/src/pages/jobs/job-details.html"
                  class="text-gray-400"
                >
                  Job Details
                </a>
              </h1>
              <h1 class="hover:text-gray-200 cursor-pointer">
                Job Categories
              </h1>
            </div>
          </li>
          <!-- Calendar  -->
          <li x-data="dropdown" class="relative mb-4 ">
            <div
              @click="toggle('calendar')"
              class="flex justify-between text-gray-400 hover:text-gray-200 hover:bg-gray-800 items-center space-x-2 rounded-md p-2 cursor-pointer"
            >
              <div class="relative flex space-x-2 items-center">
                <i data-feather="calendar" class="h-4 w-4"></i>
                <h1 :class="$store.sidebar.full ? '' : 'hidden'">
                  Calendar
                </h1>
              </div>
              <i data-feather="chevron-down"></i>
            </div>

            <!-- dropdown content  -->
            <div
              x-show="open"
              @click.outside="open =false"
              :class="$store.sidebar.full ? 'border-l border-gray-400 ml-4 pl-4' : 'sm:absolute top-0 left-20 sm:shadow-md sm:z-10 sm:bg-gray-900 sm:rounded-md sm:p-4 bordered-l sm:border-none border-gray-400 ml-4 pl-4 sm:ml-0 w-28'"
              class="text-gray-400 space-y-3"
            >
              <h1 class="hover:text-gray-200 cursor-pointer">Item 1</h1>
              <h1 class="hover:text-gray-200 cursor-pointer">Item 2</h1>
            </div>
          </li>

          <!-- Tables  -->
          <li x-data="dropdown" class="relative mb-4 ">
            <div
              @click="toggle('tables')"
              class="flex justify-between text-gray-400 hover:text-gray-200 hover:bg-gray-800 items-center space-x-2 rounded-md p-2 cursor-pointer"
            >
              <div class="relative flex space-x-2 items-center">
                <i data-feather="clipboard" class="h-4 w-4"></i>
                <h1 :class="$store.sidebar.full ? '' : 'hidden'">
                  Management
                </h1>
              </div>
              <i data-feather="chevron-down"></i>
            </div>
            <!-- dropdown content  -->
            <ul
              x-show="open"
              @click.outside="open =false"
              :class="$store.sidebar.full ? 'border-l border-gray-400 ml-4 pl-4' : 'sm:absolute top-0 left-20 sm:shadow-md sm:z-10 sm:bg-gray-900 sm:rounded-md sm:p-4 bordered-l sm:border-none border-gray-400 ml-4 pl-4 sm:ml-0 w-28'"
              class="text-gray-400 space-y-3"
            >
              <li class="hover:text-gray-200 cursor-pointer">Item 1</li>
              <li class="hover:text-gray-200 cursor-pointer">Item 2</li>
            </ul>
          </li>
          <hr class="my-4" />

          <!-- Icons  -->
          <li
            class="relative flex items-center text-gray-400 hover:text-gray-200 hover:bg-gray-800 space-x-2 rounded-md p-2 cursor-pointer"
          >
            <i data-feather="star" class="h-4 w-4"></i>
            <h1
              class=""
              :class="$store.sidebar.full ? '' : 'hidden'"
            >
              Icons
            </h1>
          </li>
        </ul>
      </div>
    </nav>
  </div>