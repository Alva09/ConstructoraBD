<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Clientes - Windmill</title>
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
  </head>
  <body>
    <div
      class="flex h-screen bg-gray-50 dark:bg-gray-900"
      :class="{ 'overflow-hidden': isSideMenuOpen}"
    >
      <!-- Desktop sidebar -->
      <aside
        class="z-20 hidden w-64 overflow-y-auto bg-white dark:bg-gray-800 md:block flex-shrink-0"
      >
        <div class="py-4 text-gray-500 dark:text-gray-400">
          <a
            class="ml-6 text-lg font-bold text-gray-800 dark:text-gray-200"
            href="#"
          >
            Windmill S.A.
          </a>
          <ul class="mt-6">
            <li class="relative px-6 py-3">
              <a
                class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
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
          
          <span
          class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg"
          aria-hidden="true"
        ></span>
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
              <a
                class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
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
              <span
                class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg"
                aria-hidden="true"
              ></span>
              <a
                class="inline-flex items-center w-full text-sm font-semibold text-gray-800 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 dark:text-gray-100"
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
      <div class="flex flex-col flex-1">
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
                    aria-label="submenu"
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
                          13
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
                          2
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
        <main class="h-full pb-16 overflow-y-auto">
          <div class="container px-6 mx-auto grid">
            <h2
              class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
            >
              Clientes
            </h2>
            
           

            
     <!-- With actions -->
     <h4
     class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300"
   >
    Tabla de clientes
   </h4>
   <div class="w-full overflow-hidden rounded-lg shadow-xs">
     <div class="w-full overflow-x-auto">
       <table class="w-full whitespace-no-wrap">
         <thead>
           <tr
             class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800"
           >
             <th class="px-4 py-3">Nombre</th>
             <th class="px-4 py-3">C.c.</th>
             <th class="px-4 py-3">Correo</th>
             <th class="px-4 py-3">Teléfono</th>
             <th class="px-4 py-3">Editar/Borrar</th>
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
                     src="https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&ixid=eyJhcHBfaWQiOjE3Nzg0fQ"
                     alt=""
                     loading="lazy"
                   />
                   <div
                     class="absolute inset-0 rounded-full shadow-inner"
                     aria-hidden="true"
                   ></div>
                 </div>
                 <div>
                   <p class="font-semibold">Hans Burger</p>
                 </div>
               </div>
             </td>
             <td class="px-4 py-3 text-sm">
               1086086387
             </td>
             <td class="px-4 py-3 text-sm">
              <p class="font-semibold">HansBurger@gmail.com</p>
             </td>
             <td class="px-4 py-3 text-sm">
                 6102020
             </td>
             <td class="px-4 py-3">
               <div class="flex items-center space-x-4 text-sm">
                 <button
                   class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                   aria-label="Edit"
                 >
                   <svg
                     class="w-5 h-5"
                     aria-hidden="true"
                     fill="currentColor"
                     viewBox="0 0 20 20"
                   >
                     <path
                       d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"
                     ></path>
                   </svg>
                 </button>
                 <button
                   class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                   aria-label="Delete"
                 >
                   <svg
                     class="w-5 h-5"
                     aria-hidden="true"
                     fill="currentColor"
                     viewBox="0 0 20 20"
                   >
                     <path
                       fill-rule="evenodd"
                       d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                       clip-rule="evenodd"
                     ></path>
                   </svg>
                 </button>
               </div>
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
                     src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&facepad=3&fit=facearea&s=707b9c33066bf8808c934c8ab394dff6"
                     alt=""
                     loading="lazy"
                   />
                   <div
                     class="absolute inset-0 rounded-full shadow-inner"
                     aria-hidden="true"
                   ></div>
                 </div>
                 <div>
                   <p class="font-semibold">Jolina Angelie</p>
                 </div>
               </div>
             </td>
             <td class="px-4 py-3 text-sm">
               36992455
             </td>
             <td class="px-4 py-3 text-sm">
               <p class="font-semibold">JolinaAngelie@gmail.com</p>
             </td>
             <td class="px-4 py-3 text-sm">
               6802020
             </td>
             <td class="px-4 py-3">
               <div class="flex items-center space-x-4 text-sm">
                 <button
                   class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                   aria-label="Edit"
                 >
                   <svg
                     class="w-5 h-5"
                     aria-hidden="true"
                     fill="currentColor"
                     viewBox="0 0 20 20"
                   >
                     <path
                       d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"
                     ></path>
                   </svg>
                 </button>
                 <button
                   class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                   aria-label="Delete"
                 >
                   <svg
                     class="w-5 h-5"
                     aria-hidden="true"
                     fill="currentColor"
                     viewBox="0 0 20 20"
                   >
                     <path
                       fill-rule="evenodd"
                       d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                       clip-rule="evenodd"
                     ></path>
                   </svg>
                 </button>
               </div>
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
                     src="https://images.unsplash.com/photo-1551069613-1904dbdcda11?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&ixid=eyJhcHBfaWQiOjE3Nzg0fQ"
                     alt=""
                     loading="lazy"
                   />
                   <div
                     class="absolute inset-0 rounded-full shadow-inner"
                     aria-hidden="true"
                   ></div>
                 </div>
                 <div>
                   <p class="font-semibold">Sarah Curry</p>
                 </div>
               </div>
             </td>
             <td class="px-4 py-3 text-sm">
                1032508600
             </td>
             <td class="px-4 py-3 text-sm">
              <p class="font-semibold">SarahCurry@gmail.com</p>
            </td>
             <td class="px-4 py-3 text-sm">
               6105020
             </td>
             <td class="px-4 py-3">
               <div class="flex items-center space-x-4 text-sm">
                 <button
                   class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                   aria-label="Edit"
                 >
                   <svg
                     class="w-5 h-5"
                     aria-hidden="true"
                     fill="currentColor"
                     viewBox="0 0 20 20"
                   >
                     <path
                       d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"
                     ></path>
                   </svg>
                 </button>
                 <button
                   class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                   aria-label="Delete"
                 >
                   <svg
                     class="w-5 h-5"
                     aria-hidden="true"
                     fill="currentColor"
                     viewBox="0 0 20 20"
                   >
                     <path
                       fill-rule="evenodd"
                       d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                       clip-rule="evenodd"
                     ></path>
                   </svg>
                 </button>
               </div>
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
                     src="https://images.unsplash.com/photo-1551006917-3b4c078c47c9?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&ixid=eyJhcHBfaWQiOjE3Nzg0fQ"
                     alt=""
                     loading="lazy"
                   />
                   <div
                     class="absolute inset-0 rounded-full shadow-inner"
                     aria-hidden="true"
                   ></div>
                 </div>
                 <div>
                   <p class="font-semibold">Rulia Joberts</p>
                 </div>
               </div>
             </td>
             <td class="px-4 py-3 text-sm">
                1276545
             </td>
             <td class="px-4 py-3 text-sm">
              <p class="font-semibold">RuliaJoberts@gmail.com</p>
            </td>
             <td class="px-4 py-3 text-sm">
               6502020
             </td>
             <td class="px-4 py-3">
               <div class="flex items-center space-x-4 text-sm">
                 <button
                   class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                   aria-label="Edit"
                 >
                   <svg
                     class="w-5 h-5"
                     aria-hidden="true"
                     fill="currentColor"
                     viewBox="0 0 20 20"
                   >
                     <path
                       d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"
                     ></path>
                   </svg>
                 </button>
                 <button
                   class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                   aria-label="Delete"
                 >
                   <svg
                     class="w-5 h-5"
                     aria-hidden="true"
                     fill="currentColor"
                     viewBox="0 0 20 20"
                   >
                     <path
                       fill-rule="evenodd"
                       d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                       clip-rule="evenodd"
                     ></path>
                   </svg>
                 </button>
               </div>
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
                     src="https://images.unsplash.com/photo-1546456073-6712f79251bb?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&ixid=eyJhcHBfaWQiOjE3Nzg0fQ"
                     alt=""
                     loading="lazy"
                   />
                   <div
                     class="absolute inset-0 rounded-full shadow-inner"
                     aria-hidden="true"
                   ></div>
                 </div>
                 <div>
                   <p class="font-semibold">Wenzel Dashington</p>
                 </div>
               </div>
             </td>
             <td class="px-4 py-3 text-sm">
                105786345
             </td>
             <td class="px-4 py-3 text-sm">
              <p class="font-semibold">WenzelDashington@gmail.com</p>
            </td>
             <td class="px-4 py-3 text-sm">
               6102920
             </td>
             <td class="px-4 py-3">
               <div class="flex items-center space-x-4 text-sm">
                 <button
                   class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                   aria-label="Edit"
                 >
                   <svg
                     class="w-5 h-5"
                     aria-hidden="true"
                     fill="currentColor"
                     viewBox="0 0 20 20"
                   >
                     <path
                       d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"
                     ></path>
                   </svg>
                 </button>
                 <button
                   class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                   aria-label="Delete"
                 >
                   <svg
                     class="w-5 h-5"
                     aria-hidden="true"
                     fill="currentColor"
                     viewBox="0 0 20 20"
                   >
                     <path
                       fill-rule="evenodd"
                       d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                       clip-rule="evenodd"
                     ></path>
                   </svg>
                 </button>
               </div>
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
                     src="https://images.unsplash.com/photo-1502720705749-871143f0e671?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&s=b8377ca9f985d80264279f277f3a67f5"
                     alt=""
                     loading="lazy"
                   />
                   <div
                     class="absolute inset-0 rounded-full shadow-inner"
                     aria-hidden="true"
                   ></div>
                 </div>
                 <div>
                   <p class="font-semibold">Dave Li</p>
                 </div>
               </div>
             </td>
             <td class="px-4 py-3 text-sm">
                125986345
             </td>
             <td class="px-4 py-3 text-sm">
              <p class="font-semibold">DaveLi@gmail.com</p>
            </td>
             <td class="px-4 py-3 text-sm">
               6102018
             </td>
             <td class="px-4 py-3">
               <div class="flex items-center space-x-4 text-sm">
                 <button
                   class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                   aria-label="Edit"
                 >
                   <svg
                     class="w-5 h-5"
                     aria-hidden="true"
                     fill="currentColor"
                     viewBox="0 0 20 20"
                   >
                     <path
                       d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"
                     ></path>
                   </svg>
                 </button>
                 <button
                   class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                   aria-label="Delete"
                 >
                   <svg
                     class="w-5 h-5"
                     aria-hidden="true"
                     fill="currentColor"
                     viewBox="0 0 20 20"
                   >
                     <path
                       fill-rule="evenodd"
                       d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                       clip-rule="evenodd"
                     ></path>
                   </svg>
                 </button>
               </div>
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
                     src="https://images.unsplash.com/photo-1531746020798-e6953c6e8e04?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&ixid=eyJhcHBfaWQiOjE3Nzg0fQ"
                     alt=""
                     loading="lazy"
                   />
                   <div
                     class="absolute inset-0 rounded-full shadow-inner"
                     aria-hidden="true"
                   ></div>
                 </div>
                 <div>
                   <p class="font-semibold">Maria Ramovic</p>
                 </div>
               </div>
             </td>
             <td class="px-4 py-3 text-sm">
                178486345
             </td>
             <td class="px-4 py-3 text-sm">
              <p class="font-semibold">MariaRamovic@gmail.com</p>
            </td>
             <td class="px-4 py-3 text-sm">
               6103520
             </td>
             <td class="px-4 py-3">
               <div class="flex items-center space-x-4 text-sm">
                 <button
                   class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                   aria-label="Edit"
                 >
                   <svg
                     class="w-5 h-5"
                     aria-hidden="true"
                     fill="currentColor"
                     viewBox="0 0 20 20"
                   >
                     <path
                       d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"
                     ></path>
                   </svg>
                 </button>
                 <button
                   class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                   aria-label="Delete"
                 >
                   <svg
                     class="w-5 h-5"
                     aria-hidden="true"
                     fill="currentColor"
                     viewBox="0 0 20 20"
                   >
                     <path
                       fill-rule="evenodd"
                       d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                       clip-rule="evenodd"
                     ></path>
                   </svg>
                 </button>
               </div>
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
                     src="https://images.unsplash.com/photo-1566411520896-01e7ca4726af?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&ixid=eyJhcHBfaWQiOjE3Nzg0fQ"
                     alt=""
                     loading="lazy"
                   />
                   <div
                     class="absolute inset-0 rounded-full shadow-inner"
                     aria-hidden="true"
                   ></div>
                 </div>
                 <div>
                   <p class="font-semibold">Hitney Wouston</p>
                 </div>
               </div>
             </td>
             <td class="px-4 py-3 text-sm">
                148386345
             </td>
             <td class="px-4 py-3 text-sm">
              <p class="font-semibold">HitneyWouston@gmail.com</p>
            </td>
             <td class="px-4 py-3 text-sm">
               6175020
             </td>
             <td class="px-4 py-3">
               <div class="flex items-center space-x-4 text-sm">
                 <button
                   class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                   aria-label="Edit"
                 >
                   <svg
                     class="w-5 h-5"
                     aria-hidden="true"
                     fill="currentColor"
                     viewBox="0 0 20 20"
                   >
                     <path
                       d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"
                     ></path>
                   </svg>
                 </button>
                 <button
                   class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                   aria-label="Delete"
                 >
                   <svg
                     class="w-5 h-5"
                     aria-hidden="true"
                     fill="currentColor"
                     viewBox="0 0 20 20"
                   >
                     <path
                       fill-rule="evenodd"
                       d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                       clip-rule="evenodd"
                     ></path>
                   </svg>
                 </button>
               </div>
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
                     src="https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&ixid=eyJhcHBfaWQiOjE3Nzg0fQ"
                     alt=""
                     loading="lazy"
                   />
                   <div
                     class="absolute inset-0 rounded-full shadow-inner"
                     aria-hidden="true"
                   ></div>
                 </div>
                 <div>
                   <p class="font-semibold">Hans Walter</p>
                 </div>
               </div>
             </td>
             <td class="px-4 py-3 text-sm">
                1234586345
             </td>
             <td class="px-4 py-3 text-sm">
              <p class="font-semibold">HansWalter@gmail.com</p>
            </td>
             <td class="px-4 py-3 text-sm">
               6108020
             </td>
             <td class="px-4 py-3">
               <div class="flex items-center space-x-4 text-sm">
                 <button
                   class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                   aria-label="Edit"
                 >
                   <svg
                     class="w-5 h-5"
                     aria-hidden="true"
                     fill="currentColor"
                     viewBox="0 0 20 20"
                   >
                     <path
                       d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"
                     ></path>
                   </svg>
                 </button>
                 <button
                   class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                   aria-label="Delete"
                 >
                   <svg
                     class="w-5 h-5"
                     aria-hidden="true"
                     fill="currentColor"
                     viewBox="0 0 20 20"
                   >
                     <path
                       fill-rule="evenodd"
                       d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                       clip-rule="evenodd"
                     ></path>
                   </svg>
                 </button>
               </div>
             </td>
           </tr>
         </tbody>
       </table>
     </div>
     <div
       class="grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800"
     >
       <span class="flex items-center col-span-3">
         Showing 1-9 de 100
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
                   class="w-4 h-4 fill-current"
                   aria-hidden="true"
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
                 78
               </button>
             </li>
             <li>
               <button
                 class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple"
               >
                 79
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
        </main>
      </div>
    </div>
  </body>
</html>
