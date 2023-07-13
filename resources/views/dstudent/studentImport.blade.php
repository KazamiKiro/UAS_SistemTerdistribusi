<x-base-layout>
    <x-slot name="header">
        <div class="flex justify-between">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ ($title) }}
        </h2>
        
        <script src="https://cdn.tailwindcss.com"></script>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-slate-200 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-2 text-gray-900">

                <div class="card-header font-semibold text-3xl">
        Import Data
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button> 
          </div>
      </div>
        <form action="/student/import" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="file" name="file" class="form-control">
            <div class="col-span-6 sm:col-span-4">
                <button type="submit" class="rounded-lg border-transparent bg-blue-400 text-gray-200 px-4 py-2 hover:bg-green-500">Upload</button>
            </div>
        </form>


                </div>
            </div>
        </div>
    </div>
</x-base-layout>
