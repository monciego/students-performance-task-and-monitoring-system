<x-app-layout>
    @section('title', 'My Class')
    <div class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white flex items-center justify-between border-b border-gray-200">
                    <div>
                        <h2 class="text-2xl font-bold">My Class</h2>
                    </div>
                    <div class="flex items-center gap-2">
                        <div>
                            <a href="{{ route('class.create') }}"
                                class="inline-flex items-center py-2 px-4 text-sm font-medium text-center text-white bg-slate-700 rounded hover:bg-slate-800 focus:ring-4 focus:outline-none focus:ring-slate-300">
                                <svg class="w-3 h-3 fill-current opacity-50 shrink-0" viewBox="0 0 16 16">
                                    <path
                                        d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z" />
                                </svg>
                                <span class="xs:block text-sm ml-2">Create Class</span>
                            </a>
                        </div>
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
