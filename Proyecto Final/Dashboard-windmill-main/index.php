<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Inicio - Windmill</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="./assets/css/tailwind.output.css" />
    <script
      src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"
      defer
    ></script>
    <script src="./assets/js/init-alpine.js"></script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css"
    />
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"
      defer
    ></script>
    <script src="./assets/js/charts-lines.js" defer></script>
    <script src="./assets/js/charts-pie.js" defer></script>
  </head>
  <body>
    <div
      class="flex h-screen bg-gray-50 dark:bg-gray-900"
      :class="{ 'overflow-hidden': isSideMenuOpen }"
    >
      <!-- Desktop sidebar -->
      <aside
        class="z-20 hidden w-64 overflow-y-auto bg-white dark:bg-gray-800 md:block flex-shrink-0"
      >
        <div class="py-4 text-gray-500 dark:text-gray-400">
          <div class="px-6 my-6">
            <a
            class="ml-6 text-lg font-bold text-gray-800 dark:text-gray-200"
            href="#"
          >
            Windmill S.A.
          </a>
            </button>
          </div>
       
          
          <ul class="mt-6">
            <li class="relative px-6 py-3">
              <span
                class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg"
                aria-hidden="true"
              ></span>
              <a
                class="inline-flex items-center w-full text-sm font-semibold text-gray-800 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 dark:text-gray-100"
                href="index.html"
              >
                <svg
                  class="w-5 h-5"
                  aria-hidden="true"
                  fill="none"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                >
                  <path
                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"
                  ></path>
                </svg>
                <span class="ml-4">Inicio</span>
              </a>
            </li>
          </ul>
          <ul>
            <li class="relative px-6 py-3">
              <a
                class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                href="forms.html"
              >
              <svg xmlns="http://www.w3.org/2000/svg"
              stroke-linejoin="round"
              stroke="currentColor" 
              width="24" 
              height="24" 
              viewBox="0 0 24 24" 
              style="fill: rgba(86, 74, 74, 1);transform: msFilter">
              <path d="M12 15c-1.84 0-2-.86-2-1H8c0 .92.66 2.55 3 2.92V18h2v-1.08c2-.34 3-1.63 3-2.92 0-1.12-.52-3-4-3-2 0-2-.63-2-1s.7-1 2-1 1.39.64 1.4 1h2A3 3 0 0 0 13 7.12V6h-2v1.09C9 7.42 8 8.71 8 10c0 1.12.52 3 4 3 2 0 2 .68 2 1s-.62 1-2 1z"></path>
              <path d="M5 2H2v2h2v17a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1V4h2V2H5zm13 18H6V4h12z"></path>
            </svg>
               
                <span class="ml-4">Pagos</span>
              </a>
            </li>
            <li class="relative px-6 py-3">
              <a
                class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                href="cards.html"
              >
                <svg
                  class="w-5 h-5"
                  aria-hidden="true"
                  fill="none"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                >
                  <path
                     d="M9.5 12c2.206 0 4-1.794 4-4s-1.794-4-4-4-4 1.794-4 4 1.794 4 4 4zm0-6c1.103 0 2 .897 2 2s-.897 2-2 2-2-.897-2-2 .897-2 2-2zm1.5 7H8c-3.309 0-6 2.691-6 6v1h2v-1c0-2.206 1.794-4 4-4h3c2.206 0 4 1.794 4 4v1h2v-1c0-3.309-2.691-6-6-6z"
                    
                  ></path>
                </svg>
                <span class="ml-4">Clientes</span>
              </a>
            </li>
            <li class="relative px-6 py-3">
              <a
                class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                href="charts.html"
              >
              <svg
              class="w-5 h-5"
              aria-hidden="true"
              fill="none"
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              viewBox="0 0 24 24"
              stroke="currentColor"
            >
              <path
                d="M2 8v4.001h1V18H2v3h16l3 .001V21h1v-3h-1v-5.999h1V8L12 2 2 8zm4 10v-5.999h2V18H6zm5 0v-5.999h2V18h-2zm7 0h-2v-5.999h2V18zM14 8a2 2 0 1 1-4.001-.001A2 2 0 0 1 14 8z"
              
                ></path>
            </svg>
                <span class="ml-4">Bancos</span>
              </a>
            </li>
            
            <li class="relative px-6 py-3">
              <a
                class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                href="modals.html"
              >
                <svg
                stroke-linejoin="round"
                stroke="currentColor"
                xmlns="http://www.w3.org/2000/svg" 
                width="24" 
                height="24" 
                viewBox="0 0 24 24" 
                style="fill: rgba(86, 74, 74, 1)"
                >
                <path d="M19.924 10.383a1 1 0 0 0-.217-1.09l-5-5-1.414 1.414L16.586 9H4v2h15a1 1 0 0 0 .924-.617zM4.076 13.617a1 1 0 0 0 .217 1.09l5 5 1.414-1.414L7.414 15H20v-2H5a.999.999 0 0 0-.924.617z"></path>
                </svg>
                <span class="ml-4">Movimientos</span>
              </a>
            </li>
            <li class="relative px-6 py-3">
              <a
                class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                href="tables.html"
              >
              <svg xmlns="http://www.w3.org/2000/svg" 
              stroke-linejoin="round"
              stroke="currentColor"
              width="24" 
              height="24" 
              viewBox="0 0 24 24" 
              style="fill: rgba(86, 74, 74, 1);transform: msFilter">
              <path d="M19 2H9c-1.103 0-2 .897-2 2v5.586l-4.707 4.707A1 1 0 0 0 3 16v5a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1V4c0-1.103-.897-2-2-2zm-8 18H5v-5.586l3-3 3 3V20zm8 0h-6v-4a.999.999 0 0 0 .707-1.707L9 9.586V4h10v16z"></path>
              <path d="M11 6h2v2h-2zm4 0h2v2h-2zm0 4.031h2V12h-2zM15 14h2v2h-2zm-8 1h2v2H7z"></path>
            </svg>
                <span class="ml-4">Proyectos</span>
              </a>
            </li>
        

           
        </div>
      </aside>
      <!-- Mobile sidebar -->
      <!-- Backdrop -->
      <div
        x-show="isSideMenuOpen"
        x-transition:enter="transition ease-in-out duration-150"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in-out duration-150"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        class="fixed inset-0 z-10 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center"
      ></div>
      <aside
        class="fixed inset-y-0 z-20 flex-shrink-0 w-64 mt-16 overflow-y-auto bg-white dark:bg-gray-800 md:hidden"
        x-show="isSideMenuOpen"
        x-transition:enter="transition ease-in-out duration-150"
        x-transition:enter-start="opacity-0 transform -translate-x-20"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in-out duration-150"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0 transform -translate-x-20"
        @click.away="closeSideMenu"
        @keydown.escape="closeSideMenu"
      >
        <div class="py-4 text-gray-500 dark:text-gray-400">
          <a
            class="ml-6 text-lg font-bold text-gray-800 dark:text-gray-200"
            href="#"
          >
            Windmill
          </a>
          <ul class="mt-6">
            <li class="relative px-6 py-3">
              <span
                class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg"
                aria-hidden="true"
              ></span>
              <a
                class="inline-flex items-center w-full text-sm font-semibold text-gray-800 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 dark:text-gray-100"
                href="index.html"
              >
                <svg
                  class="w-5 h-5"
                  aria-hidden="true"
                  fill="none"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                >
                  <path
                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"
                  ></path>
                </svg>
                <span class="ml-4">Dashboard</span>
              </a>
            </li>
          </ul>
          <ul>
            <li class="relative px-6 py-3">
              <a
                class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                href="forms.html"
              >
                <svg
                  class="w-5 h-5"
                  aria-hidden="true"
                  fill="none"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                >
                  <path
                    d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"
                  ></path>
                </svg>
                <span class="ml-4">Forms</span>
              </a>
            </li>
            <li class="relative px-6 py-3">
              <a
                class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                href="cards.html"
              >
                <svg
                  class="w-5 h-5"
                  aria-hidden="true"
                  fill="none"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                >
                  <path
                    d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"
                  ></path>
                </svg>
                <span class="ml-4">Cards</span>
              </a>
            </li>
            <li class="relative px-6 py-3">
              <a
                class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                href="charts.html"
              >
                <svg
                  class="w-5 h-5"
                  aria-hidden="true"
                  fill="none"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                >
                  <path
                    d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"
                  ></path>
                  <path d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"></path>
                </svg>
                <span class="ml-4">Charts</span>
              </a>
            </li>
            <li class="relative px-6 py-3">
              <a
                class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                href="buttons.html"
              >
                <svg
                  class="w-5 h-5"
                  aria-hidden="true"
                  fill="none"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                >
                  <path
                    d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122"
                  ></path>
                </svg>
                <span class="ml-4">Buttons</span>
              </a>
            </li>
            <li class="relative px-6 py-3">
              <a
                class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                href="modals.html"
              >
                <svg
                  class="w-5 h-5"
                  aria-hidden="true"
                  fill="none"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                >
                  <path
                    d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"
                  ></path>
                </svg>
                <span class="ml-4">Modals</span>
              </a>
            </li>
            <li class="relative px-6 py-3">
              <a
                class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                href="tables.html"
              >
                <svg
                  class="w-5 h-5"
                  aria-hidden="true"
                  fill="none"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                >
                  <path d="M4 6h16M4 10h16M4 14h16M4 18h16"></path>
                </svg>
                <span class="ml-4">Tables</span>
              </a>
            </li>
            <li class="relative px-6 py-3">
              <button
                class="inline-flex items-center justify-between w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                @click="togglePagesMenu"
                aria-haspopup="true"
              >
                <span class="inline-flex items-center">
                  <svg
                    class="w-5 h-5"
                    aria-hidden="true"
                    fill="none"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                  >
                    <path
                      d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"
                    ></path>
                  </svg>
                  <span class="ml-4">Pages</span>
                </span>
                <svg
                  class="w-4 h-4"
                  aria-hidden="true"
                  fill="currentColor"
                  viewBox="0 0 20 20"
                >
                  <path
                    fill-rule="evenodd"
                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                    clip-rule="evenodd"
                  ></path>
                </svg>
              </button>
              <template x-if="isPagesMenuOpen">
                <ul
                  x-transition:enter="transition-all ease-in-out duration-300"
                  x-transition:enter-start="opacity-25 max-h-0"
                  x-transition:enter-end="opacity-100 max-h-xl"
                  x-transition:leave="transition-all ease-in-out duration-300"
                  x-transition:leave-start="opacity-100 max-h-xl"
                  x-transition:leave-end="opacity-0 max-h-0"
                  class="p-2 mt-2 space-y-2 overflow-hidden text-sm font-medium text-gray-500 rounded-md shadow-inner bg-gray-50 dark:text-gray-400 dark:bg-gray-900"
                  aria-label="submenu"
                >
                  <li
                    class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                  >
                    <a class="w-full" href="pages/login.html">Login</a>
                  </li>
                  <li
                    class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                  >
                    <a class="w-full" href="pages/create-account.html">
                      Create account
                    </a>
                  </li>
                  <li
                    class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                  >
                    <a class="w-full" href="pages/forgot-password.html">
                      Forgot password
                    </a>
                  </li>
                  <li
                    class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                  >
                    <a class="w-full" href="pages/404.html">404</a>
                  </li>
                  <li
                    class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                  >
                    <a class="w-full" href="pages/blank.html">Blank</a>
                  </li>
                </ul>
              </template>
            </li>
          </ul>
          <div class="px-6 my-6">
            <button
              class="flex items-center justify-between px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
            >
              Create account
              <span class="ml-2" aria-hidden="true">+</span>
            </button>
          </div>
        </div>
      </aside>
      <div class="flex flex-col flex-1 w-full">
        <header class="z-10 py-4 bg-white shadow-md dark:bg-gray-800">
          <div
            class="container flex items-center justify-between h-full px-6 mx-auto text-purple-600 dark:text-purple-300"
          >
            <!-- Mobile hamburger -->
            <button
              class="p-1 mr-5 -ml-1 rounded-md md:hidden focus:outline-none focus:shadow-outline-purple"
              @click="toggleSideMenu"
              aria-label="Menu"
            >
              <svg
                class="w-6 h-6"
                aria-hidden="true"
                fill="currentColor"
                viewBox="0 0 20 20"
              >
                <path
                  fill-rule="evenodd"
                  d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                  clip-rule="evenodd"
                ></path>
              </svg>
            </button>
            <!-- Search input -->
            <div class="flex justify-center flex-1 lg:mr-32">
              <div
                class="relative w-full max-w-xl mr-6 focus-within:text-purple-500"
              >
                <div class="absolute inset-y-0 flex items-center pl-2">
                  <svg
                    class="w-4 h-4"
                    aria-hidden="true"
                    fill="currentColor"
                    viewBox="0 0 20 20"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                      clip-rule="evenodd"
                    ></path>
                  </svg>
                </div>
                <input
                  class="w-full pl-8 pr-2 text-sm text-gray-700 placeholder-gray-600 bg-gray-100 border-0 rounded-md dark:placeholder-gray-500 dark:focus:shadow-outline-gray dark:focus:placeholder-gray-600 dark:bg-gray-700 dark:text-gray-200 focus:placeholder-gray-500 focus:bg-white focus:border-purple-300 focus:outline-none focus:shadow-outline-purple form-input"
                  type="text"
                  placeholder="Search for projects"
                  aria-label="Search"
                />
              </div>
            </div>
            <ul class="flex items-center flex-shrink-0 space-x-6">
              <!-- Theme toggler -->
              <li class="relative px-6 py-3">
                <a
                  class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                  href="pages/login.html"
                >
                <svg xmlns="http://www.w3.org/2000/svg" 
                stroke="currentColor"
                width="24" 
                height="24" 
                viewBox="0 0 24 24" 
                style="fill: rgba(96, 84, 84, 1);transform: ;msFilter:;">
                <path d="m13 16 5-4-5-4v3H4v2h9z"></path>
                <path d="M20 3h-9c-1.103 0-2 .897-2 2v4h2V5h9v14h-9v-4H9v4c0 1.103.897 2 2 2h9c1.103 0 2-.897 2-2V5c0-1.103-.897-2-2-2z"></path>
               </svg>
                  <span class="ml-4">Login</span>
                </a>
              </li>
              <li class="flex">
                <button
                  class="rounded-md focus:outline-none focus:shadow-outline-purple"
                  @click="toggleTheme"
                  aria-label="Toggle color mode"
                >
                  <template x-if="!dark">
                    <svg
                      class="w-5 h-5"
                      aria-hidden="true"
                      fill="currentColor"
                      viewBox="0 0 20 20"
                    >
                      <path
                        d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"
                      ></path>
                    </svg>
                  </template>
                  <template x-if="dark">
                    <svg
                      class="w-5 h-5"
                      aria-hidden="true"
                      fill="currentColor"
                      viewBox="0 0 20 20"
                    >
                      <path
                        fill-rule="evenodd"
                        d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                        clip-rule="evenodd"
                      ></path>
                    </svg>
                  </template>
                </button>
              </li>
              <!-- Notifications menu -->
              <li class="relative">
                <button
                  class="relative align-middle rounded-md focus:outline-none focus:shadow-outline-purple"
                  @click="toggleNotificationsMenu"
                  @keydown.escape="closeNotificationsMenu"
                  aria-label="Notifications"
                  aria-haspopup="true"
                >
                  <svg
                    class="w-5 h-5"
                    aria-hidden="true"
                    fill="currentColor"
                    viewBox="0 0 20 20"
                  >
                    <path
                      d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z"
                    ></path>
                  </svg>
                  <!-- Notification badge -->
                  <span
                    aria-hidden="true"
                    class="absolute top-0 right-0 inline-block w-3 h-3 transform translate-x-1 -translate-y-1 bg-red-600 border-2 border-white rounded-full dark:border-gray-800"
                  ></span>
                </button>
                <template x-if="isNotificationsMenuOpen">
                  <ul
                    x-transition:leave="transition ease-in duration-150"
                    x-transition:leave-start="opacity-100"
                    x-transition:leave-end="opacity-0"
                    @click.away="closeNotificationsMenu"
                    @keydown.escape="closeNotificationsMenu"
                    class="absolute right-0 w-56 p-2 mt-2 space-y-2 text-gray-600 bg-white border border-gray-100 rounded-md shadow-md dark:text-gray-300 dark:border-gray-700 dark:bg-gray-700"
                  >
                    <li class="flex">
                      <a
                        class="inline-flex items-center justify-between w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200"
                        href="#"
                      >
                        <span>Messages</span>
                        <span
                          class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-600 bg-red-100 rounded-full dark:text-red-100 dark:bg-red-600"
                        >
                          0
                        </span>
                      </a>
                    </li>
                    <li class="flex">
                      <a
                        class="inline-flex items-center justify-between w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200"
                        href="#"
                      >
                        <span>Sales</span>
                        <span
                          class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-600 bg-red-100 rounded-full dark:text-red-100 dark:bg-red-600"
                        >
                          0
                        </span>
                      </a>
                    </li>
                    <li class="flex">
                      <a
                        class="inline-flex items-center justify-between w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200"
                        href="#"
                      >
                        <span>Alerts</span>
                      </a>
                    </li>
                  </ul>
                </template>
              </li>
              <!-- Profile menu -->
              <li class="relative">
                <button
                  class="align-middle rounded-full focus:shadow-outline-purple focus:outline-none"
                  @click="toggleProfileMenu"
                  @keydown.escape="closeProfileMenu"
                  aria-label="Account"
                  aria-haspopup="true"
                >
                  <img
                    class="object-cover w-8 h-8 rounded-full"
                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTUW0u5Eiiy3oM6wcpeEE6sXCzlh8G-tX1_Iw&usqp=CAU"
                    alt=""
                    aria-hidden="true"
                  />
                </button>
                <template x-if="isProfileMenuOpen">
                  <ul
                    x-transition:leave="transition ease-in duration-150"
                    x-transition:leave-start="opacity-100"
                    x-transition:leave-end="opacity-0"
                    @click.away="closeProfileMenu"
                    @keydown.escape="closeProfileMenu"
                    class="absolute right-0 w-56 p-2 mt-2 space-y-2 text-gray-600 bg-white border border-gray-100 rounded-md shadow-md dark:border-gray-700 dark:text-gray-300 dark:bg-gray-700"
                    aria-label="submenu"
                  >
                    <li class="flex">
                      <a
                        class="inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200"
                        href="#"
                      >
                        <svg
                          class="w-4 h-4 mr-3"
                          aria-hidden="true"
                          fill="none"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          viewBox="0 0 24 24"
                          stroke="currentColor"
                        >
                          <path
                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"
                          ></path>
                        </svg>
                        <span>Profile</span>
                      </a>
                    </li>
                    <li class="flex">
                      <a
                        class="inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200"
                        href="#"
                      >
                        <svg
                          class="w-4 h-4 mr-3"
                          aria-hidden="true"
                          fill="none"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          viewBox="0 0 24 24"
                          stroke="currentColor"
                        >
                          <path
                            d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"
                          ></path>
                          <path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li class="flex">
                      <a
                        class="inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200"
                        href="#"
                      >
                        <svg
                          class="w-4 h-4 mr-3"
                          aria-hidden="true"
                          fill="none"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          viewBox="0 0 24 24"
                          stroke="currentColor"
                        >
                          <path
                            d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"
                          ></path>
                        </svg>
                        <span>Log out</span>
                      </a>
                    </li>
                  </ul>
                </template>
              </li>
            </ul>
          </div>
        </header>
        <main class="h-full overflow-y-auto">
          <div class="container px-6 mx-auto grid">
            <h2
              class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
            >
              Conoce más sobre Windmill
            </h2>
            <!-- CTA -->
            <a
              class="flex items-center justify-between p-4 mb-8 text-sm font-semibold text-purple-100 bg-purple-600 rounded-lg shadow-md focus:outline-none focus:shadow-outline-purple"
              href="tables.html"
            >
              <div class="flex items-center">
                <svg
                  class="w-5 h-5 mr-2"
                  fill="currentColor"
                  viewBox="0 0 20 20"
                >
                  <path
                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                  ></path>
                </svg>
               <span>¡Conoce nuestros proyectos!</span>
              </div>
              <span>Ver más &RightArrow;</span>
            </a>
            <!-- Cards -->
            <h4
              class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300"
            >
            ¿Quiénes somos?
            </h4>
            <div
              class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800"
            >
              <p class="text-sm text-gray-600 dark:text-gray-400">
                Descripcion de nuestra empresa...
              </p>
            </div>
            <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">
              <!-- Card -->
              <div
                class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800"
              >
                <div
                  class="p-3 mr-4 text-orange-500 bg-orange-100 rounded-full dark:text-orange-100 dark:bg-orange-500"
                >
                  <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path
                      d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"
                    ></path>
                  </svg>
                </div>
                
                <div>
                  <p
                    class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400"
                  >
                  Clientes totales 
                  </p>
                  <p
                    class="text-lg font-semibold text-gray-700 dark:text-gray-200"
                  >
                    6389
                  </p>
                </div>
              </div>
              <!-- Card -->
              <div
                class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800"
              >
                <div
                  class="p-3 mr-4 text-green-500 bg-green-100 rounded-full dark:text-green-100 dark:bg-green-500"
                >
                  <svg xmlns="http://www.w3.org/2000/svg" 
                    width="24" 
                    height="24" 
                    viewBox="0 0 24 24" 
                    style="fill: rgba(255, 255, 255, 1);transform: msFilter">
                    <path d="M17 2H7a2 2 0 0 0-2 2v17a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4a2 2 0 0 0-2-2zm-6 14H8v-2h3v2zm0-4H8v-2h3v2zm0-4H8V6h3v2zm5 8h-3v-2h3v2zm0-4h-3v-2h3v2zm0-4h-3V6h3v2z"></path>
                  </svg>
                </div>
                <div>
                  <p
                    class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400"
                  >
                    Proyectos actuales
                  </p>
                  <p
                    class="text-lg font-semibold text-gray-700 dark:text-gray-200"
                  >
                    +50
                  </p>
                </div>
              </div>
              <!-- Card -->
              <div
                class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800"
              >
                <div
                  class="p-3 mr-4 text-blue-500 bg-blue-100 rounded-full dark:text-blue-100 dark:bg-blue-500"
                >
                <svg xmlns="http://www.w3.org/2000/svg" 
                width="24" 
                height="24" 
                viewBox="0 0 24 24" 
                style="fill: rgba(255, 255, 255, 1);transform: msFilter">
                <path d="M17 2H7a2 2 0 0 0-2 2v17a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4a2 2 0 0 0-2-2zm-6 14H8v-2h3v2zm0-4H8v-2h3v2zm0-4H8V6h3v2zm5 8h-3v-2h3v2zm0-4h-3v-2h3v2zm0-4h-3V6h3v2z"></path>
              </svg>
                </div>
                <div>
                  <p
                    class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400"
                  >
                    Proximos proyectos
                  </p>
                  <p
                    class="text-lg font-semibold text-gray-700 dark:text-gray-200"
                  >
                    +30
                  </p>
                </div>
              </div>
              <!-- Card -->
              <div
                class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800"
              >
                <div
                  class="p-3 mr-4 text-teal-500 bg-teal-100 rounded-full dark:text-teal-100 dark:bg-teal-500"
                >
                  <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path
                      fill-rule="evenodd"
                      d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z"
                      clip-rule="evenodd"
                    ></path>
                  </svg>
                </div>
                <div>
                  <p
                    class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400"
                  >
                    Contactos
                  </p>
                  <p
                    class="text-lg font-semibold text-gray-700 dark:text-gray-200"
                  >
                    +57 3008005840
                  </p>
                </div>
              </div>
            </div>

            <!-- New Table -->
            <div class="w-full overflow-hidden rounded-lg shadow-xs">
              <div class="w-full overflow-x-auto">
                <table class="w-full whitespace-no-wrap">
                  <thead>
                    <tr
                      class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800"
                    >
                      <th class="px-4 py-3">proyectos</th>
                      <th class="px-4 py-3">Valor</th>
                      <th class="px-4 py-3">Estado</th>
                      <th class="px-4 py-3">Tipo proyecto</th>
                    </tr>
                  </thead>
                  <tbody
                    class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800"
                  >
                    <tr class="text-gray-700 dark:text-gray-400">
                      <td class="px-4 py-3">
                        <div class="flex items-center text-sm">
                          <!-- Avatar with inset shadow -->
                          <div
                            class="relative hidden w-8 h-8 mr-3 rounded-full md:block"
                          >
                            <img
                              class="object-cover w-full h-full rounded-full"
                              src="https://www.constructorabolivar.com/sites/default/files/styles/optimize_images/public/imagenes/proyectos/imagen-destacada/alamo-tarjeta-veramonte-constructorabolivar.jpg.webp?itok=Uhe7BjF4"
                              alt=""
                              loading="lazy"
                            />
                            <div
                              class="absolute inset-0 rounded-full shadow-inner"
                              aria-hidden="true"
                            ></div>
                          </div>
                          <div>
                            <p class="font-semibold">Colibrí</p>
                            <p class="text-xs text-gray-600 dark:text-gray-400">
                              Bogotá
                            </p>
                          </div>
                        </div>
                      </td>
                      <td class="px-4 py-3 text-sm">
                        $ 165.000.000
                      </td>
                      <td class="px-4 py-3 text-xs">
                        <span
                          class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100"
                        >
                          Disponible
                        </span>
                      </td>
                      <td class="px-4 py-3 text-sm">
                        VIP
                      </td>
                    </tr>

                    <tr class="text-gray-700 dark:text-gray-400">
                      <td class="px-4 py-3">
                        <div class="flex items-center text-sm">
                          <!-- Avatar with inset shadow -->
                          <div
                            class="relative hidden w-8 h-8 mr-3 rounded-full md:block"
                          >
                            <img
                              class="object-cover w-full h-full rounded-full"
                              src="https://www.ciencuadras.com/blog/wp-content/uploads/2019/10/HB-constructora.jpg"
                              alt=""
                              loading="lazy"
                            />
                            <div
                              class="absolute inset-0 rounded-full shadow-inner"
                              aria-hidden="true"
                            ></div>
                          </div>
                          <div>
                            <p class="font-semibold">Palmeras Blancas</p>
                            <p class="text-xs text-gray-600 dark:text-gray-400">
                              Santa Marta
                            </p>
                          </div>
                        </div>
                      </td>
                      <td class="px-4 py-3 text-sm">
                        $ 185.700.000
                      </td>
                      <td class="px-4 py-3 text-xs">
                        <span
                          class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100"
                        >
                          Disponible
                        </span>
                      </td>
                      <td class="px-4 py-3 text-sm">
                        NO VIS
                      </td>
                    </tr>

                    <tr class="text-gray-700 dark:text-gray-400">
                      <td class="px-4 py-3">
                        <div class="flex items-center text-sm">
                          <!-- Avatar with inset shadow -->
                          <div
                            class="relative hidden w-8 h-8 mr-3 rounded-full md:block"
                          >
                            <img
                              class="object-cover w-full h-full rounded-full"
                              src="data:image/jpeg;base64,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"
                              alt=""
                              loading="lazy"
                            />
                            <div
                              class="absolute inset-0 rounded-full shadow-inner"
                              aria-hidden="true"
                            ></div>
                          </div>
                          <div>
                            <p class="font-semibold">Brisas del Mar</p>
                            <p class="text-xs text-gray-600 dark:text-gray-400">
                              Cartagena
                            </p>
                          </div>
                        </div>
                      </td>
                      <td class="px-4 py-3 text-sm">
                        $ 210.000.000
                      </td>
                      <td class="px-4 py-3 text-xs">
                        <span
                          class="px-2 py-1 font-semibold leading-tight text-orange-700 bg-orange-100 rounded-full dark:text-white dark:bg-orange-600"
                        >
                          En construcción
                        </span>
                      </td>
                      <td class="px-4 py-3 text-sm">
                        VIP
                      </td>
                    </tr>

                    <tr class="text-gray-700 dark:text-gray-400">
                      <td class="px-4 py-3">
                        <div class="flex items-center text-sm">
                          <!-- Avatar with inset shadow -->
                          <div
                            class="relative hidden w-8 h-8 mr-3 rounded-full md:block"
                          >
                            <img
                              class="object-cover w-full h-full rounded-full"
                              src="https://www.constructorabolivar.com/sites/default/files/styles/optimize_images/public/imagenes/proyectos/slider-fotos/recanto-render-noviembre-2020_1.jpg.webp?itok=_3xYKltt"
                              alt=""
                              loading="lazy"
                            />
                            <div
                              class="absolute inset-0 rounded-full shadow-inner"
                              aria-hidden="true"
                            ></div>
                          </div>
                          <div>
                            <p class="font-semibold">Roncador</p>
                            <p class="text-xs text-gray-600 dark:text-gray-400">
                              Cali
                            </p>
                          </div>
                        </div>
                      </td>
                      <td class="px-4 py-3 text-sm">
                        $ 185.000.000
                      </td>
                      <td class="px-4 py-3 text-xs">
                        <span
                          class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100"
                        >
                          Disponible
                        </span>
                      </td>
                      <td class="px-4 py-3 text-sm">
                        VIS
                      </td>
                    </tr>

                    <tr class="text-gray-700 dark:text-gray-400">
                      <td class="px-4 py-3">
                        <div class="flex items-center text-sm">
                          <!-- Avatar with inset shadow -->
                          <div
                            class="relative hidden w-8 h-8 mr-3 rounded-full md:block"
                          >
                            <img
                              class="object-cover w-full h-full rounded-full"
                              src="https://nucleoconstructora.com/storage/proyectos/TWtZcuY0eWHDKezci9FsrtE5Y9utFeZ68JT72bt0.png"
                              alt=""
                              loading="lazy"
                            />
                            <div
                              class="absolute inset-0 rounded-full shadow-inner"
                              aria-hidden="true"
                            ></div>
                          </div>
                          <div>
                            <p class="font-semibold">Forte Novo</p>
                            <p class="text-xs text-gray-600 dark:text-gray-400">
                              Bogotá
                            </p>
                          </div>
                        </div>
                      </td>
                      <td class="px-4 py-3 text-sm">
                        $ 195.000.000
                      </td>
                      <td class="px-4 py-3 text-xs">
                        <span
                          class="px-2 py-1 font-semibold leading-tight text-red-700 bg-red-100 rounded-full dark:text-red-100 dark:bg-red-700"
                        >
                          Sin existencias
                        </span>
                      </td>
                      <td class="px-4 py-3 text-sm">
                        VIP
                      </td>
                    </tr>

                    <!-- fin perfiles -->
                  </tbody>
                </table>
              </div>
              <div
                class="grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800"
              >
                <span class="flex items-center col-span-3">
                   1-5 de 52
                </span>
                <span class="col-span-2"></span>
                <!-- Pagination -->
                <span class="flex col-span-4 mt-2 sm:mt-auto sm:justify-end">
                  <nav aria-label="Table navigation">
                    <ul class="inline-flex items-center">
                      <li>
                        <button
                          class="px-3 py-1 rounded-md rounded-l-lg focus:outline-none focus:shadow-outline-purple"
                          aria-label="Previous"
                        >
                          <svg
                            aria-hidden="true"
                            class="w-4 h-4 fill-current"
                            viewBox="0 0 20 20"
                          >
                            <path
                              d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                              clip-rule="evenodd"
                              fill-rule="evenodd"
                            ></path>
                          </svg>
                        </button>
                      </li>
                      <li>
                        <button
                        class="px-3 py-1 text-white transition-colors duration-150 bg-purple-600 border border-r-0 border-purple-600 rounded-md focus:outline-none focus:shadow-outline-purple"
                        >
                          1
                        </button>
                      </li>
                      <li>
                        <button
                         class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple"
                         >
                          2
                        </button>
                      </li>
                      <li>
                        <button
                        class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple"
                        >
                          3
                        </button>
                      </li>
                      <li>
                        <button
                          class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple"
                        >
                          4
                        </button>
                      </li>
                      <li>
                        <span class="px-3 py-1">...</span>
                      </li>
                      <li>
                        <button
                          class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple"
                        >
                          8
                        </button>
                      </li>
                      <li>
                        <button
                          class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple"
                        >
                          9
                        </button>
                      </li>
                      <li>
                        <button
                          class="px-3 py-1 rounded-md rounded-r-lg focus:outline-none focus:shadow-outline-purple"
                          aria-label="Next"
                        >
                          <svg
                            class="w-4 h-4 fill-current"
                            aria-hidden="true"
                            viewBox="0 0 20 20"
                          >
                            <path
                              d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                              clip-rule="evenodd"
                              fill-rule="evenodd"
                            ></path>
                          </svg>
                        </button>
                      </li>
                    </ul>
                  </nav>
                </span>
              </div>
            </div>

            
          </div>
        </div>
          </div>
        </main>
      </div>
    </div>
  </body>
</html>
