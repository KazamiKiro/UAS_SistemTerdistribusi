<x-base-layout>
    <x-slot name="header">
        <div class="flex justify-between">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ ($title) }}
        </h2>
        <h3>
        <a href="{{route('new-student')}}" class="border px-5 py-2 bg-slate-300 ">Tambah Data</a>
        <!-- <a href="{{route('studentImport')}}" class="border px-5 py-2 bg-slate-300 ">Tambah Data Excel</a> -->
        <a href="{{route('download-pdf')}}" class="border px-5 py-2 bg-slate-300 ">Download Data</a>
        </h3>
        <script src="https://cdn.tailwindcss.com"></script>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-slate-200 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-2 text-gray-900">

                    <table class="min-w-full">
                        <thead class="border-b bg-gray-800">
                            <tr class="">
                                <th scope="col" class=" text-white px-4 py-2 text-left">
                                    No.ID</th>
                                <th scope="col" class=" text-white px-4 py-2 text-left">
                                    Nama</th>
                                <th scope="col" class=" text-white px-4 py-2 text-left">
                                    NIM</th>
                                <th scope="col" class=" text-white px-4 py-2 text-left">
                                    Jenis-Kelamin</th>
                                <th scope="col" class=" text-white px-4 py-2 text-left">
                                    Semester</th>
                                <th scope="col" class=" text-white px-4 py-2 text-left">
                                    Status</th>
                                <th scope="col" class=" text-white px-4 py-2 text-left">
                                    IPK</th>
                                <th scope="col" class=" text-white px-4 py-2 text-left">
                                    Setting</th>
                                
                            </tr>
                        </thead>
                        <tbody>

                        @foreach($datas as $student)
                            <tr class="border-b">
                                <td class="px-6 py-4 whitespace-nowrap text-gray-900">
                                    {{$student->id}}</td>

                                <td class="text-gray-900 px-4 py-2 whitespace-nowrap">
                                    <a href="/student/view/{{$student->id}}">{{$student->nama}}</a></td>

                                <td class="text-gray-900 px-4 py-2 whitespace-nowrap">
                                    {{$student->nim}}</td>

                                <td class="text-gray-900 px-4 py-2 whitespace-nowrap">
                                    {{$student->JenisKelamin}}</td>

                                <td class="text-gray-900 px-4 py-2 whitespace-nowrap">
                                    {{$student->Semester}}</td>
                                    
                                <td class="text-gray-900 px-4 py-2 whitespace-nowrap">
                                    {{$student->Status}}</td>

                                <td class="text-gray-900 px-4 py-2 whitespace-nowrap">
                                    {{$student->IPK}}</td>

                                <td class="text-gray-900 px-4 py-2 whitespace-nowrap">
                                    <a href="/student/edit/{{$student->id}}" class="text-green-500">
                                        EDIT</a>
                                    <a href="/student/delete/{{$student->id}}" class="text-red-500">
                                        DELETE
                                    </a>
                                </td>
                            </tr>

                            @endforeach
                        </tbody>
                    </table>
                    {{$datas->links()}}


                </div>
            </div>
        </div>
    </div>
</x-base-layout>
