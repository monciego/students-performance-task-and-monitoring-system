<div class="col-span-6 sm:col-span-3 lg:col-span-2 w-full  bg-white rounded-lg border border-gray-200 shadow-md ">
    <div class="flex flex-col items-center py-10">
        <div class="mb-3 w-32 rounded-md flex items-center justify-center h-24 shadow-lg bg-slate-700 text-white">
            {{ substr($class->class_name, 0, 1) }}
        </div>
        <h5 class="mb-1 text-xl font-medium text-gray-900 ">{{ $class->class_name }}</h5>
        <span class="text-sm text-gray-500">{{ $class->user->name }}</span>
        <div class="flex mt-4 space-x-3 md:mt-6">
            <a href="{{ route('class.show', $class) }}"
                class="inline-flex items-center py-2 px-4 text-sm font-medium text-center text-white bg-indigo-700 rounded-lg hover:bg-indigo-800 focus:ring-4 focus:outline-none focus:ring-indigo-300 ">
                View Class
            </a>
        </div>
    </div>
</div>
