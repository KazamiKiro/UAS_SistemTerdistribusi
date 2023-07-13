<x-base-layout>
    <x-slot name="header">
        <div class="flex justify-between">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            @if($flag == 'new')
                Buat Data Baru
            @else
                Edit Data
            @endif
        </h2>
        <script src="https://cdn.tailwindcss.com"></script>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- <div class="bg-slate-200 overflow-hidden shadow-sm sm:rounded-lg"> -->
                <!-- <div class="p-6 text-gray-900"> -->
                
                    @if($errors->any())
                        <ul class="text-yellow-300">
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    @endif
                
                <form action="{{$route}}" method="post">
                        @csrf
                        <div class="form-group mb-6">
                            <input type="text" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0
                            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                            required value ="{{($flag === 'new')?old('title'):$post->nama}}"
                            placeholder="Nama" name="nama" >
                        </div>

                        <div class="form-group mb-6">    
                        <input type="text" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0
                            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                            required value ="{{($flag === 'new')?old('title'):$post->nim}}"
                            placeholder="Nim" name="student_nim">   
                        </div>

                        <div class="form-group mb-6">    
                        <input type="text" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0
                            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                            required value ="{{($flag === 'new')?old('title'):$post->JenisKelamin}}"
                            placeholder="Jenis Kelamin" name="student_JenisKelamin">   
                        </div>

                        <div class="form-group mb-6">    
                        <input type="text" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0
                            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                            required value ="{{($flag === 'new')?old('title'):$post->Semester}}"
                            placeholder="Semester" name="student_Semester">   
                        </div>

                        <div class="form-group mb-6">    
                        <input type="text" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0
                            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                            required value ="{{($flag === 'new')?old('title'):$post->Status}}"
                            placeholder="Status" name="student_Status">   
                        </div>

                        <div class="form-group mb-6">    
                        <input type="text" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0
                            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                            required value ="{{($flag === 'new')?old('title'):$post->Status}}"
                            placeholder="IPK" name="student_IPK">   
                        </div>


                        <div class="form-group form-check text-center mb-6">
                        </div>
                        <button type="submit" class="px-6 py-2.5 bg-slate-600
                        text-white
                        font-medium
                        text-xs
                        leading-tight
                        uppercase
                        rounded
                        shadow-md
                        hover:bg-slate-700 hover:shadow-lg
                        focus:bg-slate-700 focus:shadow-lg focus:outline-none focus:ring-0
                        active:bg-slate-800 active:shadow-lg
                        transition
                        duration-150
                        ease-in-out">Simpan</button>
                    </form>
                    <!-- </div> -->
                <!-- </div> -->
            </div>
        </div>
    </div>
</x-base-layout>
