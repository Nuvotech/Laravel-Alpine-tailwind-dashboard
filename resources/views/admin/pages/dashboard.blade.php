<x-app-layout>
        <!-- content area main content  -->
        <div class="w-screen bg-body-gray antialiased flex relative">
            <!-- side Navigation  -->
            @include('layouts.admin.components.sidenavigation')
            <!-- Top navigation area  -->
            @include('layouts.admin.components.top-navigation')
            <!-- Main body content  -->
            <div class="w-full px-10 mx-auto mt-16">
              <!-- breadcrumbs section -->
              <div
                class="top-navigation flex justify-between items-center py-5 text-gray-900"
                x-data :class="$store.sidebar.full ? 'sm:ml-64' : 'ml-20' "
              >
                <a href="http://" class="text-gray-600 font-semibold"> Dashboard </a>
      
                <div class="text-gray-500 text-sm flex items-center">
                  <span class="pr-2">Nataline </span>
                  <i data-feather="chevron-right" class="block w-3 h-3"></i>
                  <span class="pl-2"> Dashboard </span>
                </div>
              </div>
              <!-- Body content  -->
              <div
                class="h-screen"
                x-data :class="$store.sidebar.full ? 'sm:ml-64' : 'ml-20' "
              >
                <div class="grid gap-5 grid-cols-3">
                  <!-- card with button  -->
                  <div class="bg-white shadow-md rounded-b-md">
                    <div>
                      <img
                        src="https://source.unsplash.com/featured/640x428"
                        alt=""
                        class="w-full"
                      />
                    </div>
                    <h3
                      class="px-4 pt-4 text-gray-500 text-sm tracking-wide font-semibold"
                    >
                      Card Title
                    </h3>
                    <div class="p-4 text-gray-500 text-s tracking-wide font-light">
                      Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                      Dolorum maxime accusantium veniam. Lorem ipsum dolor sit amet
                      consectetur adipisicing elit. Libero temporibus tenetur quod.
                    </div>
                    <button
                      class="mx-4 mb-4 bg-blue-500 px-4 py-2 rounded-md text-white text-xs"
                    >
                      Button
                    </button>
                  </div>
      
                  <!-- card with details  -->
                  <div class="col-span-2">
                    <div class="flex flex-col sm:flex-row gap-5 mb-5">
                      <div
                        class="flex justify-between p-5 bg-white items-center rounded-md shadow-md sm:w-1/2 lg:w-1/3 w-full"
                      >
                        <div class="flex">
                          <div class="flex flex-col gap-5">
                            <span class="text-sm text-gray-500">Orders</span>
                            <span class="text-gray-900">1 850</span>
                          </div>
                        </div>
                        <div
                          class="bg-blue-500 w-16 h-16 rounded-full flex justify-center items-center"
                        >
                          <i
                            data-feather="shopping-bag"
                            class="w-6 h-6 text-gray-100"
                          ></i>
                        </div>
                      </div>
                      <div
                        class="flex justify-between p-5 bg-white items-center rounded-md shadow-md sm:w-1/2 lg:w-1/3 w-full"
                      >
                        <div class="flex">
                          <div class="flex flex-col gap-5">
                            <span class="text-sm text-gray-500">Revenue</span>
                            <span class="text-gray-900">R3 650</span>
                          </div>
                        </div>
                        <div
                          class="bg-blue-500 w-16 h-16 rounded-full flex justify-center items-center"
                        >
                          <i
                            data-feather="thumbs-up"
                            class="w-6 h-6 text-gray-100"
                          ></i>
                        </div>
                      </div>
                      <div
                        class="flex justify-between p-5 bg-white items-center rounded-md shadow-md sm:w-1/2 lg:w-1/3 w-full"
                      >
                        <div class="flex">
                          <div class="flex flex-col gap-5">
                            <span class="text-sm text-gray-500">Average Price</span>
                            <span class="text-gray-900">R250</span>
                          </div>
                        </div>
                        <div
                          class="bg-blue-500 w-16 h-16 rounded-full flex justify-center items-center"
                        >
                          <i data-feather="tag" class="w-6 h-6 text-gray-100"></i>
                        </div>
                      </div>
                    </div>
                    <div class="flex gap-5 mb-5">
                      <!-- full color card primary -->
                      <div class="p-5 shadow-md bg-blue-500 rounded-md mt-5">
                        <div class="flex items-center gap-5 text-white mb-5">
                          <i data-feather="target"></i>
                          <span>Primary Card</span>
                        </div>
                        <div class="text-gray-600 text-s">
                          Some quick example text to build on the card title and make
                          up the bulk of the card's content.
                        </div>
                      </div>
                      <!-- end full color card  primary-->
      
                      <!-- full color card Success -->
                      <div class="p-5 shadow-md bg-green-400 rounded-md mt-5">
                        <div class="flex items-center gap-5 text-white mb-5">
                          <i data-feather="check-square"></i>
                          <span>Success Card</span>
                        </div>
                        <div class="text-gray-600 text-s">
                          Some quick example text to build on the card title and make
                          up the bulk of the card's content.
                        </div>
                      </div>
                      <!-- end full color card  Success-->
      
                      <!-- full color card Info -->
                      <div class="p-5 shadow-md bg-blue-300 rounded-md mt-5">
                        <div class="flex items-center gap-5 text-white mb-5">
                          <i data-feather="info"></i>
                          <span>Info Card</span>
                        </div>
                        <div class="text-gray-600 text-s">
                          Some quick example text to build on the card title and make
                          up the bulk of the card's content.
                        </div>
                      </div>
                      <!-- end full color card  Info-->
                    </div>
                    <div class="flex my-5 gap-5">
                      <!-- wide card with image to the left -->
                      <div class="flex gap-5 bg-white shadow-md rounded-b-md">
                        <div class="">
                          <img
                            src="https://source.unsplash.com/featured/400x300"
                            alt=""
                            class="w-[300px] h-[160px]"
                          />
                        </div>
                        <div class="p-4">
                          <div class="text-gray-500 text-s tracking-wide font-light">
                            This is a wider card with supporting text below as a
                            natural lead-in to additional content. 2
                          </div>
                          <div class="text-xxs text-gray-500 mt-5">
                            Last updated 3 mins ago
                          </div>
                        </div>
                      </div>
                      <!-- end of wide card with image to the left -->
      
                      <!-- wide card with image to the right -->
                      <div
                        class="flex gap-5 bg-white shadow-md max-h-60 rounded-b-md"
                      >
                        <div class="p-4">
                          <div class="text-gray-500 text-s tracking-wide font-light">
                            This is a wider card with supporting text below as a
                            natural lead-in to additional content.
                          </div>
                          <div class="text-xxs text-gray-500 mt-2">
                            Last updated 3 mins ago
                          </div>
                        </div>
                        <div class="">
                          <img
                            src="https://source.unsplash.com/featured/400x301"
                            alt=""
                            class="w-[300px] h-[160px]"
                          />
                        </div>
                      </div>
                      <!-- end of wide card with image to the right -->
                    </div>
                  </div>
                </div>
                <div class="w-full bg-white overflow-auto py-8 px-3 mt-8">
                  <table class="table table-responsive table-auto text-s w-full">
                    <thead class="text-gray-600 font-semibold text-left">
                      <tr class="">
                        <th class="border border-gray-100 px-3 py-2">#</th>
                        <th class="border border-gray-100 px-3 py-2">Job Title</th>
                        <th class="border border-gray-100 px-3 py-2">Company Name</th>
                        <th class="border border-gray-100 px-3 py-2">Location</th>
                        <th class="border border-gray-100 px-3 py-2">Experience</th>
                        <th class="border border-gray-100 px-3 py-2">Position</th>
                        <th class="border border-gray-100 px-3 py-2">Type</th>
                        <th class="border border-gray-100 px-3 py-2">Posted Date</th>
                        <th class="border border-gray-100 px-3 py-2">Last Date</th>
                        <th class="border border-gray-100 px-3 py-2">Status</th>
                        <th class="border border-gray-100 px-3 py-2">Action</th>
                      </tr>
                    </thead>
                    <tbody class="text-gray-500 mb-5">
                      <tr>
                        <td class="border border-gray-100 px-3 py-2">1</td>
                        <td class="border border-gray-100 px-3 py-2">
                          HTML Developer
                        </td>
                        <td class="border border-gray-100 px-3 py-2">
                          Nuvotech PTY LTD
                        </td>
                        <td class="border border-gray-100 px-3 py-2">Pretoria</td>
                        <td class="border border-gray-100 px-3 py-2">0 - 4 Years</td>
                        <td class="border border-gray-100 px-3 py-2">3</td>
                        <td class="border border-gray-100 px-3 py-2">
                          <span
                            class="px-2 py-1 rounded-md bg-orange-100 text-orange-600 text-xxs"
                            >Part Time
                          </span>
                        </td>
                        <td class="border border-gray-100 px-3 py-2">15 Jan 2023</td>
                        <td class="border border-gray-100 px-3 py-2">15 Mar 2023</td>
                        <td class="border border-gray-100 px-3 py-2">
                          <span
                            class="px-2 py-1 rounded-md bg-green-500 text-white text-xxs"
                          >
                            Active
                          </span>
                        </td>
                        <td class="border border-gray-100 px-3 py-2 flex gap-2">
                          <div class="p-2 bg-blue-100 rounded-sm">
                            <a href="/src/pages/jobs/job-details.html">
                              <i data-feather="eye" class="h-3 w-3"></i>
                            </a>
                          </div>
                          <div class="p-2 bg-green-100 rounded-sm">
                            <i data-feather="edit-2" class="h-3 w-3"></i>
                          </div>
                          <div class="p-2 bg-red-200 text-red-500 rounded-sm">
                            <i data-feather="trash" class="h-3 w-3"></i>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td class="border border-gray-100 px-3 py-2">2</td>
                        <td class="border border-gray-100 px-3 py-2">
                          Product Designer
                        </td>
                        <td class="border border-gray-100 px-3 py-2">Decor Things</td>
                        <td class="border border-gray-100 px-3 py-2">Pretoria</td>
                        <td class="border border-gray-100 px-3 py-2">5+ Years</td>
                        <td class="border border-gray-100 px-3 py-2">1</td>
                        <td class="border border-gray-100 px-3 py-2">
                          <span
                            class="px-2 py-1 rounded-md bg-green-300 text-green-700 text-xxs"
                          >
                            Full Time
                          </span>
                        </td>
      
                        <td class="border border-gray-100 px-3 py-2">01 June 2023</td>
                        <td class="border border-gray-100 px-3 py-2">15 July 2023</td>
                        <td class="border border-gray-100 px-3 py-2">
                          <span
                            class="px-2 py-1 rounded-md bg-blue-700 text-white text-xxs"
                          >
                            New
                          </span>
                        </td>
                        <td class="border border-gray-100 px-3 py-2 flex gap-2">
                          <div class="p-2 bg-blue-100 rounded-sm">
                            <i data-feather="eye" class="h-3 w-3"></i>
                          </div>
                          <div class="p-2 bg-green-100 rounded-sm">
                            <i data-feather="edit-2" class="h-3 w-3"></i>
                          </div>
                          <div class="p-2 bg-red-200 text-red-500 rounded-sm">
                            <i data-feather="trash" class="h-3 w-3"></i>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td class="border border-gray-100 px-3 py-2">3</td>
                        <td class="border border-gray-100 px-3 py-2">
                          Business Associate
                        </td>
                        <td class="border border-gray-100 px-3 py-2">Shika Afrika</td>
                        <td class="border border-gray-100 px-3 py-2">Cape Town</td>
                        <td class="border border-gray-100 px-3 py-2">1 - 2 Years</td>
                        <td class="border border-gray-100 px-3 py-2">2</td>
                        <td class="border border-gray-100 px-3 py-2">
                          <span
                            class="px-2 py-1 rounded-md bg-blue-300 text-blue-700 text-xxs"
                          >
                            Freelance
                          </span>
                        </td>
                        <td class="border border-gray-100 px-3 py-2">
                          25 November 2022
                        </td>
                        <td class="border border-gray-100 px-3 py-2">
                          25 December 2022
                        </td>
                        <td class="border border-gray-100 px-3 py-2">
                          <span
                            class="px-2 py-1 rounded-md bg-red-600 text-white text-xxs"
                            >Close
                          </span>
                        </td>
                        <td class="border border-gray-100 px-3 py-2 flex gap-2">
                          <div class="p-2 bg-blue-100 rounded-sm">
                            <a href="/src/pages/jobs/job-details.html">
                              <i data-feather="eye" class="h-3 w-3"></i>
                            </a>
                          </div>
                          <div class="p-2 bg-green-100 rounded-sm">
                            <i data-feather="edit-2" class="h-3 w-3"></i>
                          </div>
                          <div class="p-2 bg-red-200 text-red-500 rounded-sm">
                            <i data-feather="trash" class="h-3 w-3"></i>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                    <tfoot></tfoot>
                  </table>
                </div>
              </div>
            </div>
          </div>
</x-app-layout>
