<x-app-layout>
    @section('title', 'Join Class')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-6 grid grid-cols-6 gap-6">
                {{-- loops the list of class --}}
                @foreach ($classes as $class)
                @include('user.classes.class')
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
