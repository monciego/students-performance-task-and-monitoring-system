<x-app-layout>
    @section('title', 'My Class')
    <div class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white flex items-center justify-between border-b border-gray-200">
                    <div>
                        <h2 class="text-2xl font-bold">{{ $subject->subject_name }}</h2>
                    </div>
                    <div class="flex items-center gap-2">
                        <div>
                            <a href="{{ route('upload.activity', $subject->id) }}"
                                class="inline-flex items-center py-2 px-4 text-sm font-medium text-center text-white bg-slate-700 rounded hover:bg-slate-800 focus:ring-4 focus:outline-none focus:ring-slate-300">
                                <svg class="w-3 h-3 fill-current opacity-50 shrink-0" viewBox="0 0 16 16">
                                    <path
                                        d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z" />
                                </svg>
                                <span class="xs:block text-sm ml-2">Upload Activity</span>
                            </a>
                        </div>
                        <div>
                            <a href="{{ route('question.category.create', $subject->id) }}"
                                class="inline-flex items-center py-2 px-4 text-sm font-medium text-center text-white bg-slate-700 rounded hover:bg-slate-800 focus:ring-4 focus:outline-none focus:ring-slate-300">
                                <svg class="w-3 h-3 fill-current opacity-50 shrink-0" viewBox="0 0 16 16">
                                    <path
                                        d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z" />
                                </svg>
                                <span class="xs:block text-sm ml-2">Create Activity</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="p-6 grid grid-cols-6 gap-6">
                    @foreach ($questions as $question)
                    <div
                        class="col-span-6 sm:col-span-3 lg:col-span-2 w-full p-6 bg-white border border-gray-200 rounded-lg shadow-md">
                        <a href="">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">
                                {{ $question->question_category }}
                            </h5>
                        </a>
                        {{-- <p class="mb-3 font-normal text-gray-700 ">Here are the biggest enterprise
                            technology acquisitions
                            of 2021 so far, in reverse chronological order.</p> --}}
                        <a href="{{ route('questions', $question->id) }}"
                            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                            View more
                            <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </div>
                    @endforeach
                </div>

                {{-- --}}
                <div class="p-6 grid grid-cols-6 gap-6">
                    @foreach ($activities as $activity)
                    <div
                        class="col-span-6 sm:col-span-3 lg:col-span-2 w-full  bg-white rounded-lg border border-gray-200 shadow-md ">
                        <div class="flex flex-col items-center py-10">
                            <div
                                class="mb-3 w-32 rounded-md flex items-center justify-center h-24 shadow-lg bg-slate-700 text-white">
                                {{ substr($activity->activity_name, 0, 1) }}
                            </div>
                            <h5 class="mb-1 text-xl font-medium text-gray-900 ">{{ $activity->activity_name }}</h5>
                            <span class="text-sm text-gray-500"><span class="font-medium">Uploaded by:</span> {{
                                $activity->user->name }}</span>
                            <span class="text-sm text-gray-500"><span class="font-medium">Upload date:</span>
                                {{ \Carbon\Carbon::parse($activity->created_at)->isoFormat('MMM Do YYYY')}}
                            </span>
                            <div class="flex mt-4 space-x-3 md:mt-6">
                                <a href=""
                                    class="inline-flex items-center py-2 px-4 text-sm font-medium text-center text-white bg-indigo-700 rounded-lg hover:bg-indigo-800 focus:ring-4 focus:outline-none focus:ring-indigo-300 ">
                                    View Activity
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>


                {{-- --}}
            </div>
        </div>
    </div>
</x-app-layout>
