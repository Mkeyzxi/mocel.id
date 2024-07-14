\<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
  
    <div class="antialiased bg-gray-50 dark:bg-gray-900">
        <nav class="bg-white border-b border-gray-200 px-4 py-2.5 dark:bg-gray-800 dark:border-gray-700 fixed left-0 right-0 top-0 z-50">
          <div class="flex flex-wrap justify-between items-center">
            <div class="flex justify-start items-center">
              
              <a href="https://flowbite.com" class="flex items-center justify-between mr-4">
                <img
                  src="img/LogoMocel.svg"
                  class="mr-3 h-14"
                  alt="Flowbite Logo"
                />
              </a>
              
            </div>
            
              

              <!-- Dropdown menu -->
              <div
                class="hidden overflow-hidden z-50 my-4 max-w-sm text-base list-none bg-white  divide-y divide-gray-100 shadow-lg dark:bg-gray-700 dark:divide-gray-600 rounded-xl"
                id="apps-dropdown"
              >
                <div
                  class="block py-2 px-4 text-base font-medium text-center text-gray-700 bg-gray-50 dark:bg-gray-600 dark:text-gray-300"
                >
                  Apps
                </div>
                <div class="grid grid-cols-3 gap-4 p-4">
                  <a
                    href="#"
                    class="block p-4 text-center rounded-lg hover:bg-gray-100 dark:hover:bg-gray-600 group"
                  >
                    <svg
                      aria-hidden="true"
                      class="mx-auto mb-1 w-7 h-7 text-gray-400 group-hover:text-gray-500 dark:text-gray-400 dark:group-hover:text-gray-400"
                      fill="currentColor"
                      viewBox="0 0 20 20"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        fill-rule="evenodd"
                        d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z"
                        clip-rule="evenodd"
                      ></path>
                    </svg>
                    <div class="text-sm text-gray-900 dark:text-white">Sales</div>
                  </a>
                  <a
                    href="#"
                    class="block p-4 text-center rounded-lg hover:bg-gray-100 dark:hover:bg-gray-600 group"
                  >
                    <svg
                      aria-hidden="true"
                      class="mx-auto mb-1 w-7 h-7 text-gray-400 group-hover:text-gray-500 dark:text-gray-400 dark:group-hover:text-gray-400"
                      fill="currentColor"
                      viewBox="0 0 20 20"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"
                      ></path>
                    </svg>
                    <div class="text-sm text-gray-900 dark:text-white">Users</div>
                  </a>
                  <a
                    href="#"
                    class="block p-4 text-center rounded-lg hover:bg-gray-100 dark:hover:bg-gray-600 group"
                  >
                    <svg
                      aria-hidden="true"
                      class="mx-auto mb-1 w-7 h-7 text-gray-400 group-hover:text-gray-500 dark:text-gray-400 dark:group-hover:text-gray-400"
                      fill="currentColor"
                      viewBox="0 0 20 20"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        fill-rule="evenodd"
                        d="M5 3a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2V5a2 2 0 00-2-2H5zm0 2h10v7h-2l-1 2H8l-1-2H5V5z"
                        clip-rule="evenodd"
                      ></path>
                    </svg>
                    <div class="text-sm text-gray-900 dark:text-white">Inbox</div>
                  </a>
                 
              <button
                type="button"
                class="flex mx-3 text-sm bg-gray-800 rounded-full md:mr-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                id="user-menu-button"
                aria-expanded="false"
                data-dropdown-toggle="dropdown"
              >
                <span class="sr-only">Open user menu</span>
                <img
                  class="w-8 h-8 rounded-full"
                  src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/michael-gough.png"
                  alt="user photo"
                />
              </button>
              <!-- Dropdown menu -->
              <div
                class="hidden z-50 my-4 w-56 text-base list-none bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600 "
                id="dropdown"
              >
                <div class="py-3 px-4">
                  <span
                    class="block text-sm font-semibold text-gray-900 dark:text-white"
                    >Neil Sims</span
                  >
                  <span
                    class="block text-sm text-gray-900 truncate dark:text-white"
                    >name@flowbite.com</span
                  >
                </div>
                <ul
                  class="py-1 text-gray-700 dark:text-gray-300"
                  aria-labelledby="dropdown"
                >
                  <li>
                    <a
                      href="#"
                      class="block py-2 px-4 text-sm hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white"
                      >My profile</a
                    >
                  </li>
                  <li>
                    <a
                      href="#"
                      class="block py-2 px-4 text-sm hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white"
                      >Account settings</a
                    >
                  </li>
                </ul>
                <ul
                  class="py-1 text-gray-700 dark:text-gray-300"
                  aria-labelledby="dropdown"
                >
                  <li>
                    <a
                      href="#"
                      class="flex items-center py-2 px-4 text-sm hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                      ><svg
                        class="mr-2 w-5 h-5 text-gray-400"
                        fill="currentColor"
                        viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          fill-rule="evenodd"
                          d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"
                          clip-rule="evenodd"
                        ></path>
                      </svg>
                      My likes</a
                    >
                  </li>
                  <li>
                    <a
                      href="#"
                      class="flex items-center py-2 px-4 text-sm hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                      ><svg
                        class="mr-2 w-5 h-5 text-gray-400"
                        fill="currentColor"
                        viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z"
                        ></path>
                      </svg>
                      Collections</a
                    >
                  </li>
                  <li>
                    <a
                      href="#"
                      class="flex justify-between items-center py-2 px-4 text-sm hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                    >
                      <span class="flex items-center">
                        <svg
                          aria-hidden="true"
                          class="mr-2 w-5 h-5 text-primary-600 dark:text-primary-500"
                          fill="currentColor"
                          viewBox="0 0 20 20"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            fill-rule="evenodd"
                            d="M12.395 2.553a1 1 0 00-1.45-.385c-.345.23-.614.558-.822.88-.214.33-.403.713-.57 1.116-.334.804-.614 1.768-.84 2.734a31.365 31.365 0 00-.613 3.58 2.64 2.64 0 01-.945-1.067c-.328-.68-.398-1.534-.398-2.654A1 1 0 005.05 6.05 6.981 6.981 0 003 11a7 7 0 1011.95-4.95c-.592-.591-.98-.985-1.348-1.467-.363-.476-.724-1.063-1.207-2.03zM12.12 15.12A3 3 0 017 13s.879.5 2.5.5c0-1 .5-4 1.25-4.5.5 1 .786 1.293 1.371 1.879A2.99 2.99 0 0113 13a2.99 2.99 0 01-.879 2.121z"
                            clip-rule="evenodd"
                          ></path>
                        </svg>
                        Pro version
                      </span>
                      <svg
                        aria-hidden="true"
                        class="w-5 h-5 text-gray-400"
                        fill="currentColor"
                        viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          fill-rule="evenodd"
                          d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                          clip-rule="evenodd"
                        ></path>
                      </svg>
                    </a>
                  </li>
                </ul>
                <ul
                  class="py-1 text-gray-700 dark:text-gray-300"
                  aria-labelledby="dropdown"
                >
                  <li>
                    <a
                      href="#"
                      class="block py-2 px-4 text-sm hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                      >Sign out</a
                    >
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </nav>
    
        <!-- Sidebar -->
    
        <aside
          class="fixed top-0 left-0 z-40 w-64 h-screen pt-14 transition-transform -translate-x-full bg-white border-r border-gray-200 md:translate-x-0 dark:bg-gray-800 dark:border-gray-700"
          aria-label="Sidenav"
          id="drawer-navigation"
        >
          <div class="overflow-y-auto py-5 px-3 h-full bg-white dark:bg-gray-800">
            <form action="#" method="GET" class="md:hidden mb-2">
              <label for="sidebar-search" class="sr-only">Search</label>
              <div class="relative">
                <div
                  class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none"
                >neil
                  <svg
                    class="w-5 h-5 text-gray-500 dark:text-gray-400"
                    fill="currentColor"
                    viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                    ></path>
                  </svg>
                </div>
                <input
                  type="text"
                  name="search"
                  id="sidebar-search"
                  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                  placeholder="Search"
                />
              </div>
            </form>
            <ul class="space-y-2">
              <li>
                <a
                  href="#"
                  class="flex items-center p-2 text-base font-medium text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group"
                >
                  <svg
                    aria-hidden="true"
                    class="w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                    fill="currentColor"
                    viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                    <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                  </svg>
                  <span class="ml-3">Overview</span>
                </a>
              </li>
              <li>
                <button
                  type="button"
                  class="flex items-center p-2 w-full text-base font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                  aria-controls="dropdown-pages"
                  data-collapse-toggle="dropdown-pages"
                >
                  <svg
                    aria-hidden="true"
                    class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white"
                    fill="currentColor"
                    viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z"
                      clip-rule="evenodd"
                    ></path>
                  </svg>
                  <span class="flex-1 ml-3 text-left whitespace-nowrap"
                    >Admin</span
                  >
                  <svg
                    aria-hidden="true"
                    class="w-6 h-6"
                    fill="currentColor"
                    viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                      clip-rule="evenodd"
                    ></path>
                  </svg>
                </button>
                <ul id="dropdown-pages" class="hidden py-2 space-y-2">
                  <li>
                    <a
                      href="#formArtikel"
                      class="flex items-center p-2 pl-11 w-full text-base font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                      >Masukkan Artikel</a
                    >
                  </li>
                  <li>
                    <a
                      href="#formBengkel"
                      class="flex items-center p-2 pl-11 w-full text-base font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                      >Masukkan Bengkel</a
                    >
                  </li>
                  <li>
                    <a
                      href="#dataArtikel"
                      class="flex items-center p-2 pl-11 w-full text-base font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                      >Data Artikel</a
                    >
                  </li>
                  <li>
                    <a
                      href="#dataBengkel"
                      class="flex items-center p-2 pl-11 w-full text-base font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                      >Data Bengkel</a
                    >
                  </li>
                  
                </ul>
              </li>
              <li>
                <button
                  type="button"
                  class="flex items-center p-2 w-full text-base font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                  aria-controls="dropdown-sales"
                  data-collapse-toggle="dropdown-sales"
                >
                  <svg
                    aria-hidden="true"
                    class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white"
                    fill="currentColor"
                    viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z"
                      clip-rule="evenodd"
                    ></path>
                  </svg>
                  <span class="flex-1 ml-3 text-left whitespace-nowrap"
                    >Pengguna</span
                  >
                  <svg
                    aria-hidden="true"
                    class="w-6 h-6"
                    fill="currentColor"
                    viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                      clip-rule="evenodd"
                    ></path>
                  </svg>
                </button>
                <ul id="dropdown-sales" class="hidden py-2 space-y-2">
                  <li>
                    <a
                      href="{{ route('beranda') }}" target="_blank"
                      class="flex items-center p-2 pl-11 w-full text-base font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                      >Beranda</a
                    >
                  </li>
                  <li>
                    <a
                      href="{{ route('bengkel.index') }}" target="_blank"
                      class="flex items-center p-2 pl-11 w-full text-base font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                      >Info Bengkel</a
                    >
                  </li>
                  <li>
                    <a
                      href="{{ route('artikel.index') }}" target="_blank"
                      class="flex items-center p-2 pl-11 w-full text-base font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                      >Info Otomotif</a
                    >
                  </li>
                </ul>
              </li>
              <li>
                <button
                  type="button"
                  class="flex items-center p-2 w-full text-base font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                  aria-controls="dropdown-authentication"
                  data-collapse-toggle="dropdown-authentication"
                >
                  <svg
                    aria-hidden="true"
                    class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white"
                    fill="currentColor"
                    viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                      clip-rule="evenodd"
                    ></path>
                  </svg>
                  <span class="flex-1 ml-3 text-left whitespace-nowrap"
                    >Authentifikasi</span
                  >
                  <svg
                    aria-hidden="true"
                    class="w-6 h-6"
                    fill="currentColor"
                    viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                      clip-rule="evenodd"
                    ></path>
                  </svg>
                </button>
                <ul id="dropdown-authentication" class="hidden py-2 space-y-2">
                  <li>
                    <a
                      href="{{ route('logout') }}"
                      class="flex items-center p-2 pl-11 w-full text-base font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                      >Keluar</a
                    >
                  </li>
                  {{-- <li>
                    <a
                      href="#"
                      class="flex items-center p-2 pl-11 w-full text-base font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                      >Sign Up</a
                    >
                  </li> --}}
                  <li>
                    <a
                      href="#"
                      class="flex items-center p-2 pl-11 w-full text-base font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                      >Ganti Password</a
                    >
                  </li>
                </ul>
              </li>
            </ul>
            <ul
              class="pt-5 mt-5 space-y-2 border-t border-gray-200 dark:border-gray-700"
            >
              <li>
                <a
                  href="#"
                  class="flex items-center p-2 text-base font-medium text-gray-900 rounded-lg transition duration-75 hover:bg-gray-100 dark:hover:bg-gray-700 dark:text-white group"
                >
                  <svg
                    aria-hidden="true"
                    class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                    fill="currentColor"
                    viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path>
                    <path
                      fill-rule="evenodd"
                      d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z"
                      clip-rule="evenodd"
                    ></path>
                  </svg>
                  <span class="ml-3">Docs</span>
                </a>
              </li>
              <li>
                <a
                  href="#"
                  class="flex items-center p-2 text-base font-medium text-gray-900 rounded-lg transition duration-75 hover:bg-gray-100 dark:hover:bg-gray-700 dark:text-white group"
                >
                  <svg
                    aria-hidden="true"
                    class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                    fill="currentColor"
                    viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-2 0c0 .993-.241 1.929-.668 2.754l-1.524-1.525a3.997 3.997 0 00.078-2.183l1.562-1.562C15.802 8.249 16 9.1 16 10zm-5.165 3.913l1.58 1.58A5.98 5.98 0 0110 16a5.976 5.976 0 01-2.516-.552l1.562-1.562a4.006 4.006 0 001.789.027zm-4.677-2.796a4.002 4.002 0 01-.041-2.08l-.08.08-1.53-1.533A5.98 5.98 0 004 10c0 .954.223 1.856.619 2.657l1.54-1.54zm1.088-6.45A5.974 5.974 0 0110 4c.954 0 1.856.223 2.657.619l-1.54 1.54a4.002 4.002 0 00-2.346.033L7.246 4.668zM12 10a2 2 0 11-4 0 2 2 0 014 0z"
                      clip-rule="evenodd"
                    ></path>
                  </svg>
                  <span class="ml-3">Help</span>
                </a>
              </li>
            </ul>
          </div>
          <div
            class="hidden absolute bottom-0 left-0 justify-center p-4 space-x-4 w-full lg:flex bg-white dark:bg-gray-800 z-20"
          >
        </aside>
        <main class="p-4 md:ml-64 h-auto pt-20">
           {{-- noted
              jumlah artikel, jumlah user, pesanan masuk,
              graph pesanan dalam sebulan, 
            --}}
          <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5 mb-4">
            <div class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600  md:h-64 p-5 flex justify-center items-center flex-col gap-2">
              <h3>
                <?php $i = 0 ?>

                @foreach ($dataBengkel as $itemBengkel)
                    <?php $i++ ?>
                @endforeach
                <p class="font-bold text-8xl text-slate-800">{{ $i }}</p>
              </h3>
              <h2 class="font-semibold mx-auto text-2xl">Bengkel</h2>

            </div>
            <div class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-32 md:h-64 p-5 flex justify-center items-center flex-col gap-4">
              <h3>
                <?php $i = 0 ?>

                @foreach ($dataArtikel as $itemArtikel)
                    <?php $i++ ?>
                @endforeach
                <p class="font-bold text-8xl text-slate-800">{{ $i }}</p>
              </h3>
              <h2 class="font-semibold mx-auto text-2xl">Artikel</h2>

            </div>
            <div
              class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-32 md:h-64 lg:col-span-2"
            >
            <div>
              <div class="w-full h-full bg-white px-8 py-9 rounded-xl">
                <p class="text-xl font-bold">Pengelolaan</p>
                <canvas id="myChart" class="w-full"></canvas>
              </div>
            </div>
            
            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
            
          </div>
          </div>
          <div id="formArtikel"></div>

          {{-- main --}}
          <div class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 mb-4 ">
            @if (session('success'))
              <div class="flex items-center p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
                <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                  <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                </svg>
                <span class="sr-only">Info</span>
                <div>
                  <span class="font-medium">Pemberitahuan berhasil!</span> {{ session('success') }}
                </div>
              </div>
            @endif
            @if ($errors->any())
              @foreach ($errors->all() as $error)
              <div class="flex items-center p-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
                <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                  <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                </svg>
                <span class="sr-only">Info</span>
                <div>
                  <span class="font-medium">Pemberitahun kesalahan!</span> {{ $error }}
                </div>
              </div>
              @endforeach
            @endif
            <h1 class="font-bold font-sans text-4xl first-letter:text-secondary mx-32 my-10">Membuat Artikel</h1>
            @foreach ($dataUser as $user)
            <form class="max-w-lg mx-auto w-3/4 flex flex-col gap-1" action="{{ route('artikel.store', $user->id)}}" method="POST" enctype="multipart/form-data">
              @csrf
              @endforeach
            <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Judul</label>
              <input type="text" id="title" name="title" aria-describedby="helper-text-explanation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 hover:border-secondary hover:ring-secondary" >   
              <label for="paragraph" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Isi artikel</label>

            <textarea id="paragraph" name="paragraph" rows="8" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 hover:border-secondary hover:ring-secondary" placeholder="Masukkan paragraph disini.....">
              <h2 class="text-2xl font-semibold text-slate-900 mt-4"> <!-- masukkan sub judul --> </h2>
                <p class=""></p>            
                <br>
                <h2 class="text-lg font-semibold text-slate-900 "><!-- masukkan judul list --></h2>
                <ul class="max-w-md space-y-1 text-slate-700 list-disc list-inside ">
                    <li>
                        <!-- masukkan list1 -->
                    </li>
                    <li>
                        <!-- masukkan list2 -->
                    </li>
                    <li>
                        <!-- masukkan list3 -->
                    </li>
                </ul>
    
                <p class="">
                    <!-- masukkan paragraf 1 -->
                </p>
                <p class="">
                    <!-- masukkan paragraf 2 -->    
                </p>            
                <p class="">
                    <!-- masukkan paragraf 3 -->
                </p>
    
            </textarea>


              <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pilih kategory</label>
              <select id="category" name="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 hover:border-secondary hover:ring-secondary">
                <option selected>Silahkan pilih kategori</option>
                <option value="Tips & Trik">Tips & Trik</option>
                <option value="Artikel">Artikel</option>
                <option value="Tutorial">Tutorial</option>
              </select>
              <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="image">Upload gambar</label>
              <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 hover:border-secondary hover:ring-secondary" aria-describedby="user_avatar_help" name="image" id="image" type="file" >
              <div class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="image_help">Silahkan memilih untuk nanti yang diberikan di gambar artikel</div>
              <button type="submit" class="w-full text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800 hover:border-secondary hover:ring-secondary">Kirim</button>
            </form>
            
        
        </div>
        <div id="formBengkel"></div>
        <div class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 mb-4 px-5">
          <h1 class="font-bold font-sans text-4xl first-letter:text-sixty mx-32 my-10">Membuat Bengkel</h1>
          <form class="max-w-lg mx-auto flex flex-col gap-1" action="{{ route('bengkel.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
          <label for="workshop_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama bengkel</label>
            <input type="text" old="workshop_name" id="workshop_name" name="workshop_name" aria-describedby="helper-text-explanation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 hover:border-secondary hover:ring-secondary" >   
          <label for="address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat</label>
            <input type="text" old="address" id="address" name="address" aria-describedby="helper-text-explanation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" >   
          <label for="rating" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Rating</label>
            <input type="number" old="rating" max="5" id="rating" name="rating" step="any" aria-describedby="helper-text-explanation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 hover:border-secondary hover:ring-secondary" >   
          <label for="workshop_number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor bengkel</label>
            <input type="text" id="workshop_number" old="workshop_number" name="workshop_number" value="62" aria-describedby="helper-text-explanation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 hover:border-secondary hover:ring-secondary" >   
          
            <label for="city" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pilih kategory</label>
            <select id="city" name="city" old="city" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 hover:border-secondary hover:ring-secondary">
              <option selected>Silahkan pilih kota</option>
              <option value="Makassar">Makassar</option>
              <option value="Gowa">Gowa</option>
              <option value="Maros">Maros</option>
            </select>
          <label for="google_maps" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Google maps</label>
            <input type="text" id="google_maps" old="google_maps" placeholder="Gunakan tag iframe" name="google_maps" aria-describedby="helper-text-explanation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 hover:border-secondary hover:ring-secondary" >             
            <label for="workshop_category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pilih kategory</label>
            <select id="workshop_category" name="workshop_category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 hover:border-secondary hover:ring-secondary">
              <option selected>Silahkan pilih kategori</option>
              <option value="official">Resmi</option>
              <option value="specialist">Spesialis</option>
            </select>
            <label for="ability" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Isi artikel</label>
            <textarea id="ability" name="ability" rows="8" old="ability" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 hover:border-secondary hover:ring-secondary" placeholder="Masukkan kemampuan disini....."><!-- memasukkan 1 baris, jika ingin lebih silahkan copy-->
              <tr class="odd:bg-white odd: even:bg-gray-50 even:border-b ">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900">
                  <!-- masukkan kemampuan -->
                </th>
                <td class="px-6 py-4">
                  <!-- masukkan harga -->
                </td>
              </tr>
              </textarea>

            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="workshop_image">Upload gambar</label>
            <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 hover:border-secondary hover:ring-secondary" aria-describedby="user_avatar_help" name="workshop_image" old="workshop_image" id="workshop_image" type="file" >
            <div class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="image_help">Silahkan memilih untuk nanti yang diberikan di bengkel</div>
            <button type="submit" class="w-full text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800 hover:border-secondary hover:ring-secondary">Kirim</button>
          </form>
          
      
      </div>
        <div class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 mb-4 px-7 py-5">
          <h1 class="font-bold font-sans text-4xl first-letter:text-secondary mx-32 my-10">Data Artikel</h1>

          <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            
            <table class=" text-sm text-left rtl:text-right text-gray 400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50  400 ">
                    <tr class="justify-start items-start">
                        <th scope="col" class="px-6 py-3 ">
                            Judul
                        </th>
                        <th scope="col" class="px-6 py-3 w-1/6">
                            Penulis
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Isi Artikel
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Category
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Dibuat
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Aksi
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <div id="dataArtikel" class=""></div>
                    @foreach ($dataArtikel as $dataArtikelTabel)
                        
                    
                    <tr class="odd:bg-white odd: even:bg-gray-50 even:border-b ">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900">
                            {{ $dataArtikelTabel->title }}
                        </th>
                        <td class="px-6 py-4">
                          {{ $dataArtikelTabel->writer }}
                        </td>
                        <td class="px-6 py-4">
                          {{ Str::limit($dataArtikelTabel->paragraph, 150) }}
                        </td>
                        <td class="px-6 py-4">
                          {{ $dataArtikelTabel->category }}
                        </td>
                        <td class="px-6 py-4 w-[120px]">
                          {{ $dataArtikelTabel->created_at->DiffForHumans() }}
                        </td>
                        <td class="px-6 py-4 w-[128px]">
                            {{-- <a href="#" class="font-medium text-blue-600 hover:underline" ><ion-icon class="text-slate-800" size="small" name="code-download"></ion-icon></a> --}}
                            <a href="/dashboard/edit/artikel/{{ $dataArtikelTabel->id }}" class="font-medium text-blue-600 hover:underline" >Edit</a>
                            <div class="inline-block"> | </div>
                            {{-- <a href="#" class="font-medium text-blue-600 hover:underline"><ion-icon class="text-slate-800" size="small" name="trash"></ion-icon></a> --}}
                            <a href="#" onclick="confirmDeleteArtikel(event, {{ $dataArtikelTabel->id }})" class="font-medium text-blue-600 hover:underline">Hapus</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        
        </div>
        <div class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 mb-4 px-7 py-5">
          <h1 class="font-bold font-sans text-4xl first-letter:text-sixty mx-32 my-10">Data Bengkel</h1>

          <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class=" text-sm text-left rtl:text-right text-gray 400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 400 ">
                    <tr class="justify-start items-start">
                        <th scope="col" class="px-6 py-3 w-38">
                            Nama Bengkel
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Alamat
                        </th>
                        <th scope="col" class="px-1 py-3 w-5">
                            Rating
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Kota
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Dibuat
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Aksi
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <div id="dataBengkel" class=""></div>
                    @foreach ($dataBengkel as $dataBengkelTabel)
                    <tr class="odd:bg-white odd: even:bg-gray-50 even:border-b ">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 ">
                            {{ $dataBengkelTabel->workshop_name }}
                        </th>
                        <td class="px-6 py-4">
                          {{ $dataBengkelTabel->address }}
                        </td>
                        <td class="px-1 py-4 w-5 flex mx-auto ">
                          {{ $dataBengkelTabel->rating }}
                        </td>
                        <td class="px-6 py-4">
                          {{ Str::upper($dataBengkelTabel->city) }}
                        </td>
                        <td class="px-6 py-4 w-[120px]">
                          {{ $dataBengkelTabel->created_at->DiffForHumans() }}
                        </td>
                        <td class="px-6 py-4 w-[128px]">
                            {{-- <a href="#" class="font-medium text-blue-600 hover:underline" ><ion-icon class="text-slate-800" size="small" name="code-download"></ion-icon></a> --}}
                            <a href="/dashboard/edit/bengkel/{{ $dataBengkelTabel->id }}" class="font-medium text-blue-600 hover:underline" >Edit</a>
                            <div class="inline-block"> | </div>
                            {{-- <a href="#" class="font-medium text-blue-600 hover:underline"><ion-icon class="text-slate-800" size="small" name="trash"></ion-icon></a> --}}
                            <a href="#" onclick="confirmDeleteBengkel(event, {{ $dataBengkelTabel->id }})" class="font-medium text-blue-600 hover:underline">Hapus</a>

                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        </div>
        {{-- <div class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-96 mb-4"></div> --}}
        {{-- <div class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-96 mb-4"></div> --}}
        {{-- <div class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-96 mb-4"></div> --}}
        {{-- <div class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-96 mb-4"></div> --}}
        
        </main>
       
            
            </div>
           
      </div>
      <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
      <script>
        const ctx = document.getElementById("myChart").getContext("2d");
			const gradient = ctx.createLinearGradient(0, 0, 0, 400);
			gradient.addColorStop(0, "rgba(54, 162, 235, 0.5)");
			gradient.addColorStop(0.8, "rgba(54, 162, 235, 0)");
			const myChart = new Chart(ctx, {
				type: "line",
				data: {
					labels: [
						"5k",
						"10k",
						"15k",
						"20k",
						"25k",
						"30k",
						"35k",
						"40k",
						"45k",
						"50k",
						"55k",
						"60k",
					],
					datasets: [
						{
							label: "Data",
							data: [
								20, 35, 25, 64.37, 42, 47, 50, 30, 60, 40, 45, 10, 12312, 234,
							],
							backgroundColor: gradient,
							borderColor: "rgba(54, 162, 235, 1)",
							borderWidth: 1,
							fill: true,
							pointBackgroundColor: "rgba(54, 162, 235, 1)",
							pointBorderColor: "#fff",
							pointHoverBackgroundColor: "#fff",
							pointHoverBorderColor: "rgba(54, 162, 235, 1)",
						},
					],
				},
				options: {
					scales: {
						y: {
							beginAtZero: false,
							max: 100,
							ticks: {
								stepSize: 20,
								callback: function (value) {
									return value + "%";
								},
							},
							grid: {
								drawBorder: false,
							},
						},
					},
					plugins: {
						tooltip: {
							callbacks: {
								label: function (context) {
									let label = context.dataset.label || "";
									if (label) {
										label += ": ";
									}
									label += parseFloat(context.raw).toFixed(2);
									return label;
								},
							},
						},
					},
					responsive: true,
					maintainAspectRatio: false,
				},
			});
      </script>
      <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>