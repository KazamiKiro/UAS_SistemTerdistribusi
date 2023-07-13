                <!-- Navigation Links -->
                <div class="flex flex-col w-full gap-5 p-4 ">
                <script src="https://cdn.tailwindcss.com"></script>
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                    <x-nav-link :href="route('student')" :active="request()->routeIs('student')">
                        {{ __('Mahasiswa') }}
                    </x-nav-link>
                    <x-nav-link :href="route('user')" :active="request()->routeIs('user')">
                    {{ __('Users') }}
                    </x-nav-link>
                    <x-nav-link :href="route('user')" :active="request()->routeIs('uploadgambar')">
                    {{ __('UploadGambar') }}
                    </x-nav-link>
                </div>
