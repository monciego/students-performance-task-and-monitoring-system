<x-app-layout>
    @section('title', 'Students')
    <div class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white flex items-center justify-between border-b border-gray-200">
                    <div>
                        <h2 class="text-2xl font-bold">Students</h2>
                    </div>

                </div>

                {{-- --}}
                <div class="p-6 grid grid-cols-6 gap-6">
                    @foreach ($students as $student)
                    <li>
                        {{ $student->user->name }}
                    </li>
                    @endforeach
                </div>


                {{-- --}}
            </div>
        </div>
    </div>
</x-app-layout>
