<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white flex items-center justify-between border-b border-gray-200">
                    <div>
                        <h2 class="text-2xl font-bold">Class</h2>
                    </div>
                    <div>
                        <a class="bg-slate-700 text-white hover:bg-slate-800 px-6 py-2 rounded"
                            href="{{ route('class.create') }}">
                            Add Class
                        </a>
                    </div>
                </div>


                {{-- --}}
                <div class="p-6 grid grid-cols-6 gap-6">
                    @foreach ($classes as $class)
                    @include('teacher.class.class')
                    @endforeach
                </div>


                {{-- --}}
            </div>
        </div>
    </div>
</x-app-layout>
