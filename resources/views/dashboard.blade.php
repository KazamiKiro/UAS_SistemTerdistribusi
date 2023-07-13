<x-base-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
        <h3>
        Selamat Datang Di Website Database Mahasiswa Ilmu Komputer
        </h3>
        <script src="https://cdn.tailwindcss.com"></script>
    </x-slot>

    <div class="py-12">
        <div class="max-w-10xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                
            <div class="container my-24 px-6 mx-auto">
            <!-- Section: Design Block -->
            <section class="mb-32 text-gray-800 text-center lg:text-left">
            <style>
                @media (min-width: 992px) {
                .rotate-lg-6 {
                    transform: rotate(6deg);
                    }
                }
                /* Foto Border elips */
                .fancy-border-radius {
                border-radius: 53% 47% 52% 48% / 36% 41% 59% 64%;
                }
            </style>
            <div class="container mx-auto xl:px-32 text-center lg:text-left">
                <div class="lg:grid-cols-2 flex items-center">
                <div class="mb-12 lg:mb-0">
                    <div
                    class="relative block rounded-lg shadow-lg px-6 py-12 md:px-12 lg:-mr-14"
                    style="background: hsla(0, 0%, 100%, 0.55); backdrop-filter: blur(30px); z-index: 1"
                    >
                    <h2 class="text-3xl font-bold mb-4 display-5">Database Mahasiswa</h2>
                    <p class="text-gray-500 mb-12">
                        Website ini digunakan untuk database dari semua data mahasiswa ilmu komputer undiksha
                    </p>

                    <div class="grid md:grid-cols-3 gap-x-8">
                        <div class="mb-30 md:mb-0">
                        <h2 class="text-3xl font-bold text-dark mb-4">-</h2>
                        <h5 class="text-lg font-medium text-gray-500 mb-0">Proses pengumpulan</h5>
                        </div>

                        <div class="mb-30 md:mb-0">
                        <h2 class="text-3xl font-bold text-dark mb-4">-</h2>
                        <h5 class="text-lg font-medium text-gray-500 mb-0">Proses pengolahan</h5>
                        </div>

                        <div class="mb-30 md:mb-0">
                        <h2 class="text-3xl font-bold text-dark mb-4">-</h2>
                        <h5 class="text-lg font-medium text-gray-500 mb-0">Proses penyajian</h5>
                        </div>
                    </div>
                    </div>
                </div>
                <div>
                    <img
                    src="https://blog-static.mamikos.com/wp-content/uploads/2020/02/undiksha-1.jpg"
                    class="w-full shadow-lg fancy-border-radius rotate-lg-6"
                    alt=""
                    />
                </div>
                </div>
            </div>
            </section>
                    </div>
                        <!-- timeline -->
                    <div class="ml-10 col-span-9 ">                       
                    <h3 class="text-2xl text-white font-bold mb-6 ml-2">Timeline Kerja Website</h3>
                    <ol class="border-l-5 border-purple-600">
                    <li>
                        <div class="md:flex flex-start">
                        <div class="bg-purple-600 w-6 h-6 flex items-center justify-center rounded-full ml-3">
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" class="text-white w-3 h-3" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <path fill="currentColor" d="M0 464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V192H0v272zm64-192c0-8.8 7.2-16 16-16h288c8.8 0 16 7.2 16 16v64c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16v-64zM400 64h-48V16c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v48H160V16c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v48H48C21.5 64 0 85.5 0 112v48h448v-48c0-26.5-21.5-48-48-48z"></path>
                            </svg>
                        </div>
                        <div class="block p-6 rounded-lg shadow-lg bg-gray-100 max-w-md ml-6 mb-10">
                            <div class="flex justify-between mb-4">
                            <a href="#!" class="font-medium text-purple-600 hover:text-purple-700 focus:text-purple-800 duration-300 transition ease-in-out text-sm">TABEL DATA CRUD</a>
                            <a href="#!" class="font-medium text-purple-600 hover:text-purple-700 focus:text-purple-800 duration-300 transition ease-in-out text-sm">04 / 01 / 2023</a>
                            </div>
                            <p class="text-gray-700 mb-6">Dalam page mahasiswa yang terdapat dalam navigasi, akan berisikan table yang dimana bisa menambahkan, menghapus, juga meng-edit data dari mahasiswa yang diberikan</p>
                            <button type="button" class="inline-block px-4 py-1.5 bg-purple-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-purple-700 hover:shadow-lg focus:bg-purple-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-purple-800 active:shadow-lg transition duration-150 ease-in-out" data-mdb-ripple="true">Preview</button>
                            <button type="button" class="inline-block px-3.5 py-1 border-2 border-purple-600 text-purple-600 font-medium text-xs leading-tight uppercase rounded hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out" data-mdb-ripple="true">See demo</button>
                        </div>
                        </div>
                    </li>
                    <li>
                        <div class="md:flex flex-start">
                        <div class="bg-purple-600 w-6 h-6 flex items-center justify-center rounded-full ml-3">
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" class="text-white w-3 h-3" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <path fill="currentColor" d="M0 464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V192H0v272zm64-192c0-8.8 7.2-16 16-16h288c8.8 0 16 7.2 16 16v64c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16v-64zM400 64h-48V16c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v48H160V16c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v48H48C21.5 64 0 85.5 0 112v48h448v-48c0-26.5-21.5-48-48-48z"></path>
                            </svg>
                        </div>
                        <div class="block p-6 rounded-lg shadow-lg bg-gray-100 max-w-md ml-6 mb-10">
                            <div class="flex justify-between mb-4">
                            <a href="#!" class="font-medium text-purple-600 hover:text-purple-700 focus:text-purple-800 duration-300 transition ease-in-out text-sm">EXPORT DATA</a>
                            <a href="#!" class="font-medium text-purple-600 hover:text-purple-700 focus:text-purple-800 duration-300 transition ease-in-out text-sm">05 / 01 / 2023</a>
                            </div>
                            <p class="text-gray-700 mb-6">Dapat melakukan Export Tabel data yang sudah ada pada page mahasiswa ke dalam PDF</p>
                            <button type="button" class="inline-block px-4 py-1.5 bg-purple-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-purple-700 hover:shadow-lg focus:bg-purple-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-purple-800 active:shadow-lg transition duration-150 ease-in-out" data-mdb-ripple="true">Preview</button>
                            <button type="button" class="inline-block px-3.5 py-1 border-2 border-purple-600 text-purple-600 font-medium text-xs leading-tight uppercase rounded hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out" data-mdb-ripple="true">See demo</button>
                        </div>
                        </div>
                    </li>
                    <li>
                        <div class="md:flex flex-start">
                        <div class="bg-purple-600 w-6 h-6 flex items-center justify-center rounded-full ml-3">
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" class="text-white w-3 h-3" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <path fill="currentColor" d="M0 464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V192H0v272zm64-192c0-8.8 7.2-16 16-16h288c8.8 0 16 7.2 16 16v64c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16v-64zM400 64h-48V16c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v48H160V16c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v48H48C21.5 64 0 85.5 0 112v48h448v-48c0-26.5-21.5-48-48-48z"></path>
                            </svg>
                        </div>
                        <div class="block p-6 rounded-lg shadow-lg bg-gray-100 max-w-md ml-6 mb-10">
                            <div class="flex justify-between mb-4">
                            <a href="#!" class="font-medium text-purple-600 hover:text-purple-700 focus:text-purple-800 duration-300 transition ease-in-out text-sm">DATA USER WEBSITE</a>
                            <a href="#!" class="font-medium text-purple-600 hover:text-purple-700 focus:text-purple-800 duration-300 transition ease-in-out text-sm">06 / 01 / 2023</a>
                            </div>
                            <p class="text-gray-700 mb-6">Menampilkan data dari user yang telah membuat akun pada website</p>
                            <button type="button" class="inline-block px-4 py-1.5 bg-purple-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-purple-700 hover:shadow-lg focus:bg-purple-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-purple-800 active:shadow-lg transition duration-150 ease-in-out" data-mdb-ripple="true">Preview</button>
                            <button type="button" class="inline-block px-3.5 py-1 border-2 border-purple-600 text-purple-600 font-medium text-xs leading-tight uppercase rounded hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out" data-mdb-ripple="true">See demo</button>
                        </div>
                        </div>
                    </li>
                    </ol>
                    </div>

                    <div
                        class=" container my-24 px-6 mx-auto embed-responsive embed-responsive-21by9 relative w-full overflow-hidden"
                        style="padding-top: 42%"
                        >
                        <iframe
                            class="embed-responsive-item absolute top-0 right-0 bottom-0 left-0 w-full h-full"
                            src="https://www.youtube.com/embed/rkQBOhpXhwc" title="Perkenalan Undiksha" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>"
                            allowfullscreen=""
                            data-gtm-yt-inspected-2340190_699="true"
                            id="240632615"
                        ></iframe>
                        </div>

                        
                        
                        <section class="text-gray-600 body-font">
                            <div class="container px-5 py-24 mx-auto">
                                <div class="flex flex-wrap w-full mb-8">
                                <div class="w-full mb-6 lg:mb-0">
                                    <h1 class="sm:text-4xl text-5xl font-medium title-font mb-2 text-white">Jumlah Data Mahasiswa</h1>
                                    <div class="h-1 w-20 bg-indigo-500 rounded"></div>
                                </div>
                                </div>
                                <div class="flex flex-wrap -m-4 text-center">
                                <div class="p-4 sm:w-1/4 w-1/2">
                                    <div class="bg-indigo-500 rounded-lg p-2 xl:p-6">
                                        <h2 class="title-font font-medium sm:text-4xl text-3xl text-white">21</h2>
                                        <p class="leading-relaxed text-gray-100 font-bold">Mahasiswa</p>
                                    </div>
                                </div>
                                <div class="p-4 sm:w-1/4 w-1/2">
                                    <div class="bg-indigo-500 rounded-lg p-2 xl:p-6">
                                        <h2 class="title-font font-medium sm:text-4xl text-3xl text-white">4.0</h2>
                                        <p class="leading-relaxed text-gray-100 font-bold">Rata-rata IPK</p>
                                    </div>
                                </div>
                                <div class="p-4 sm:w-1/4 w-1/2">
                                    <div class="bg-indigo-500 rounded-lg p-2 xl:p-6">
                                        <h2 class="title-font font-medium sm:text-4xl text-3xl text-white">3</h2>
                                        <p class="leading-relaxed text-gray-100 font-bold">Semester</p>
                                    </div>
                                </div>
                                <div class="p-4 sm:w-1/4 w-1/2">
                                    <div class="bg-indigo-500 rounded-lg p-2 xl:p-6">
                                        <h2 class="title-font font-medium sm:text-4xl text-3xl text-white">10</h2>
                                        <p class="leading-relaxed text-gray-100 font-bold">Downloads</p>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </section>

                        <div class="container my-24 px-6 mx-10">
                        <section class="mb-32 text-center lg:text-left">
                            <h2 class="text-3xl font-bold mb-12 text-center text-white">
                            Website Dibuat <u class="text-blue-600">Oleh</u>
                            </h2>
                            <div class="grid md:grid-cols-3 gap-6 xl:gap-x-12 ">
                            <div class="mb-6 lg:mb-0">
                                <div class="relative block rounded-lg shadow-lg bg-white p-6">
                                <div class="lg:flex flex-row items-center">
                                    <div class="grow-0 shrink-0 basis-auto w-full lg:w-5/12 lg:pr-6">
                                    <img
                                        src="/img/Aan.jpg"
                                        alt="Trendy Pants and Shoes"
                                        class="w-full rounded-md mb-6 lg:mb-0"
                                        />
                                    </div>
                                    <div class="grow-0 shrink-0 basis-auto w-full lg:w-7/12">
                                    <h5 class="text-lg font-bold mb-2">Made Andika Wiananda</h5>
                                    <p class="text-gray-500 mb-4">2115101003</p>
                                    <ul class="list-inside flex mx-auto justify-center lg:justify-start">
                                        <a href="#!" class="px-2 lg:pl-0 lg:pr-2">
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 320 512"
                                            class="w-4 h-4 text-blue-600"
                                        >
                                            <path
                                            fill="currentColor"
                                            d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"
                                            />
                                        </svg>
                                        </a>
                                        <a href="#!" class="px-2">
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 512 512"
                                            class="w-4 h-4 text-blue-600"
                                        >
                                            <path
                                            fill="currentColor"
                                            d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"
                                            />
                                        </svg>
                                        </a>
                                        <a href="#!" class="px-2">
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 448 512"
                                            class="w-4 h-4 text-blue-600"
                                        >
                                            <path
                                            fill="currentColor"
                                            d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"
                                            />
                                        </svg>
                                        </a>
                                    </ul>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="grid md:grid-cols-3 gap-6 xl:gap-x-12 ">
                            <div class="mb-6 lg:mb-0">
                                <div class="relative block rounded-lg shadow-lg bg-white p-6">
                                <div class="lg:flex flex-row items-center">
                                    <div class="grow-0 shrink-0 basis-auto w-full lg:w-5/12 lg:pr-6">
                                    <img
                                        src="/img/Aan.jpg"
                                        alt="Trendy Pants and Shoes"
                                        class="w-full rounded-md mb-6 lg:mb-0"
                                        />
                                    </div>
                                    <div class="grow-0 shrink-0 basis-auto w-full lg:w-7/12">
                                    <h5 class="text-lg font-bold mb-2">Putu Adi Widiantara</h5>
                                    <p class="text-gray-500 mb-4">2115101044</p>
                                    <ul class="list-inside flex mx-auto justify-center lg:justify-start">
                                        <a href="#!" class="px-2 lg:pl-0 lg:pr-2">
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 320 512"
                                            class="w-4 h-4 text-blue-600"
                                        >
                                            <path
                                            fill="currentColor"
                                            d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"
                                            />
                                        </svg>
                                        </a>
                                        <a href="#!" class="px-2">
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 512 512"
                                            class="w-4 h-4 text-blue-600"
                                        >
                                            <path
                                            fill="currentColor"
                                            d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"
                                            />
                                        </svg>
                                        </a>
                                        <a href="#!" class="px-2">
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 448 512"
                                            class="w-4 h-4 text-blue-600"
                                        >
                                            <path
                                            fill="currentColor"
                                            d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"
                                            />
                                        </svg>
                                        </a>
                                    </ul>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
</x-base-layout>
