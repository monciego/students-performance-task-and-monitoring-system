<x-app-layout>
    @section('title', isset($class) ? $class->class_name : 'Class')

    <div class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white flex items-center justify-between border-b border-gray-200">
                    <div>
                        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                            {{ __($class->class_name) }}
                        </h2>
                        <p class="mt-2">Class code:
                            <span class="font-medium">
                                {{ $class->class_code }}
                            </span>
                        </p>
                    </div>
                    <div class="flex items-center gap-2">
                        <div>
                            <a href="{{ route('create.subject', $class->id) }}"
                                class="inline-flex items-center py-2 px-4 text-sm font-medium text-center text-white bg-slate-700 rounded hover:bg-slate-800 focus:ring-4 focus:outline-none focus:ring-slate-300">
                                <svg class="w-3 h-3 fill-current opacity-50 shrink-0" viewBox="0 0 16 16">
                                    <path
                                        d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z" />
                                </svg>
                                <span class="xs:block text-sm ml-2">Create Subject</span>
                            </a>
                        </div>
                        <div>
                            <a href="{{ route('students', $class->id) }}"
                                class="inline-flex items-center py-2 px-4 text-sm font-medium text-center text-white bg-indigo-700 rounded hover:bg-indigo-800 focus:ring-4 focus:outline-none focus:ring-indigo-300">
                                <svg class="w-3 h-3 fill-current opacity-50 shrink-0" viewBox="0 0 16 16">
                                    <path
                                        d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z" />
                                </svg>
                                <span class="xs:block text-sm ml-2">Students</span>
                            </a>
                        </div>
                    </div>
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
                                <a href="{{ route('subject.show', $subject) }}"
                                    class="inline-flex items-center py-2 px-4 text-sm font-medium text-center text-white bg-indigo-700 rounded-lg hover:bg-indigo-800 focus:ring-4 focus:outline-none focus:ring-indigo-300 ">
                                    Manage Subject
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
