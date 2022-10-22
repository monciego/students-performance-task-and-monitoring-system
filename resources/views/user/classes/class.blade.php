<div class="col-span-6 sm:col-span-3 lg:col-span-2 w-full  bg-white rounded-lg border border-gray-200 shadow-md ">
    <div class="flex flex-col items-center py-10">
        <div class="mb-3 w-32 rounded-md flex items-center justify-center h-24 shadow-lg bg-slate-700 text-white">
            {{ substr($class->class_name, 0, 1) }}
        </div>
        <h5 class="mb-1 text-xl font-medium text-gray-900 ">{{ $class->class_name }}</h5>
        <span class="text-sm text-gray-500">{{ $class->user->name }}</span>
        <div class="flex mt-4 space-x-3 md:mt-6">
            {{-- loops the db student and get the class_id --}}
            @forelse ($student_code_input->where('class_id', $class->id) as $code)
            {{-- Class code: {{ $class->class_code }} is equal to Student input code: {{ $code->class_code }}
            --}}
            {{-- compare if the class_code in db classes is the same with class_code of db student --}}
            {{-- if they are the same can access the page else show the form --}}
            @if ($class->class_code === $code->class_code) <br>
            <a href="{{ route('classes.show', $class->id) }}"
                class="inline-flex items-center py-2 px-4 text-sm font-medium text-center text-white bg-slate-700 rounded-lg hover:bg-slate-800 focus:ring-4 focus:outline-none focus:ring-slate-300 ">
                View Class
            </a>
            @else
            @include('user.classes.create')
            @endif
            @empty
            @include('user.classes.create')
            @endforelse
        </div>
    </div>
</div>
