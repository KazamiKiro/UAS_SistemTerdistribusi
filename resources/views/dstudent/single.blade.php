<x-base-layout>
    <x-slot name="header">
        <div class="flex justify-between">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ ($titlesingle) }}
        </h2>
        <a href="{{route('new-student')}}" class="border px-5 py-2 bg-slate-300 ">Tambah Data</a>
        <script src="https://cdn.tailwindcss.com"></script>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-slate-200 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-2 text-gray-900">

                    <p>
                        Nama: {{$post->nama}}
                    </p>
                    <p>
                        NIM: {{$post->nim}}
                    </p>
                    <p>
                        Jenis Kelamin: {{$post->JenisKelamin}}
                    </p>
                    <p>
                        Semester: {{$post->Semester}}
                    </p>
                    <p>
                        Status: {{$post->Status}}
                    </p>


                </div>
            </div>
        </div>
    </div>
</x-base-layout>
