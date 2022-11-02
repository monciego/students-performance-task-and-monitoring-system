<x-app-layout>
    @section('title', isset($class) ? $class->class_name : 'Class')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                        {{ __($class->class_name) }}
                    </h2>
                </div>

                <div class="p-6 grid grid-cols-6 gap-6">
                    @foreach ($subjects as $subject)
                    <div
                        class="col-span-6 sm:col-span-3 lg:col-span-2 w-full  bg-white rounded-lg border border-gray-200 shadow-md ">
                        <div class="flex flex-col items-center py-10">
                            <div
                                class="mb-3 w-32 rounded-md flex items-center justify-center h-24 shadow-lg bg-slate-700 text-white">
                                {{ substr($subject->subject_name, 0, 1) }}
                            </div>
                            <h5 class="mb-1 text-xl font-medium text-gray-900 ">{{ $subject->subject_name }}</h5>
                            <div class="flex mt-4 space-x-3 md:mt-6">
                                <a href="{{ route('activities.show', $subject->id) }}"
                                    class="inline-flex items-center py-2 px-4 text-sm font-medium text-center text-white bg-indigo-700 rounded-lg hover:bg-indigo-800 focus:ring-4 focus:outline-none focus:ring-indigo-300 ">
                                    View Subject
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
