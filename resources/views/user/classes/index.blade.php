<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            {{-- loops the list of class --}}
            @foreach ($classes as $class)
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    {{ $class->class_name }} <br>
                    Teacher: {{ $class->user->name }}
                    <br>
                    {{-- loops the db student and get the class_id --}}
                    @forelse ($student_code_input->where('class_id', $class->id) as $code)
                    {{-- Class code: {{ $class->class_code }} is equal to Student input code: {{ $code->class_code }}
                    --}}
                    {{-- compare if the class_code in db classes is the same with class_code of db student --}}
                    {{-- if they are the same can access the page else show the form --}}
                    @if ($class->class_code === $code->class_code) <br>
                    <a href="{{ route('classes.show', $class->id) }}">View Class</a>
                    @else
                    @include('user.classes.create')
                    @endif
                    @empty
                    @include('user.classes.create')
                    @endforelse
                </div>
            </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
