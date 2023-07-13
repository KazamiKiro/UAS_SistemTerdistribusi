<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script src="https://cdn.tailwindcss.com"></script>
        <title>{{ config('app.name', 'Laravel') }}</title>
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    <body class="font-sans antialiased">
        <div class="flex justify-between box-border" id="wrapper" x-data="{isOpen:true}">
            <div class="sidebar h-screen overflow-y-auto bg-slate-700 transition-all duration-300":class="isOpen?'w-60':'w-0'">
               <div class=" p-2 flex justify-center  bg-slate-900">
                <!-- Logo -->
                <div class="shrink-0 flex items-center ">
                    <a href="https://undiksha.ac.id/en/">
                    <img src="https://cs.undiksha.ac.id/wp-content/uploads/2020/10/Logo-dengan-tulisan.fw_-1024x194.png" alt="undiksha" class="mx-auto my-4" width="100" height="100">
                        <h1 class="ml-2 text-gray-100">
                            CS UNDIKSHA
                        </h1>
                    </a>
                </div>
            </div>
                <!-- Navigation -->
                @include('layouts.sidebar')
        </div>

        <div id="body" class="w-full h-screen overflow-y-auto transition-all duration-200 p-2">
            <div class=" w-full h-auto p-4 flex justify-between ">
                <button @click.prevent="isOpen = !isOpen">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-chevron-bar-right" viewBox="0 0 448 512"><path d="M171.73,232.813A5.381,5.381,0,0,0,176.7,229.5,48.081,48.081,0,0,1,191.6,204.244c1.243-.828,1.657-2.484,1.657-4.141a4.22,4.22,0,0,0-2.071-3.312L74.429,128.473,148.958,85a9.941,9.941,0,0,0,4.968-8.281,9.108,9.108,0,0,0-4.968-8.281L126.6,55.6a9.748,9.748,0,0,0-9.523,0l-100.2,57.966a9.943,9.943,0,0,0-4.969,8.281V236.954a9.109,9.109,0,0,0,4.969,8.281L39.235,258.07a8.829,8.829,0,0,0,4.968,1.242,9.4,9.4,0,0,0,6.625-2.484,10.8,10.8,0,0,0,2.9-7.039V164.5L169.66,232.4A4.5,4.5,0,0,0,171.73,232.813ZM323.272,377.73a12.478,12.478,0,0,0-4.969,1.242l-74.528,43.062V287.882c0-2.9-2.9-5.8-6.211-4.555a53.036,53.036,0,0,1-28.984.414,4.86,4.86,0,0,0-6.21,4.555V421.619l-74.529-43.061a8.83,8.83,0,0,0-4.969-1.242,9.631,9.631,0,0,0-9.523,9.523v26.085a9.107,9.107,0,0,0,4.969,8.281l100.2,57.553A8.829,8.829,0,0,0,223.486,480a11.027,11.027,0,0,0,4.969-1.242l100.2-57.553a9.941,9.941,0,0,0,4.968-8.281V386.839C332.8,382.285,328.24,377.73,323.272,377.73ZM286.007,78a23,23,0,1,0-23-23A23,23,0,0,0,286.007,78Zm63.627-10.086a23,23,0,1,0,23,23A23,23,0,0,0,349.634,67.914ZM412.816,151.6a23,23,0,1,0-23-23A23,23,0,0,0,412.816,151.6Zm-63.182-9.2a23,23,0,1,0,23,23A23,23,0,0,0,349.634,142.4Zm-63.627,83.244a23,23,0,1,0-23-23A23,23,0,0,0,286.007,225.648Zm-62.074,36.358a23,23,0,1,0-23-23A23,23,0,0,0,223.933,262.006Zm188.883-82.358a23,23,0,1,0,23,23A23,23,0,0,0,412.816,179.648Zm0,72.272a23,23,0,1,0,23,23A23,23,0,0,0,412.816,251.92Z"/></svg>
                </button>
                    <!-- Settings Dropdown -->
                <div class="hidden sm:flex sm:items-center sm:ml-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
                </div>
            </div>

        <div class="p-4 overflow-y-auto h-full">
            <!-- Content Section -->
                <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
                </div>
        </div>
        </div>        

    <script src="public/script.js"></script>
    </body>
</html>
