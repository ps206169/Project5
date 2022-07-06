<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @foreach ($prestaties as $prestatie)
                        {{$prestatie->id}}
                    @endforeach
                    $prestaties
                    {{-- @foreach ($prestaties as $Prestatie)
                        <div style="border:2px solid black; margin:2px; min-height:50px; width: 200px">
                            {{ $Prestatie->id }}
                        </div>
    
                        </a>
                    @endforeach --}}
                    <div style="border: 2px solid black;">
                        <a href="/prestaties/update/{id}{{}}">
                            <button>Edit</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
