<x-app-layout>
    @section('title', 'My Class')
    <div class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white flex items-center justify-between border-b border-gray-200">
                    <div>
                        <h2 class="text-2xl font-bold">{{ $subject->subject_name }}</h2>
                    </div>
                    <div>
                        <a href="{{ route('upload.activity', $subject->id) }}"
                            class="inline-flex items-center py-2 px-4 text-sm font-medium text-center text-white bg-slate-700 rounded hover:bg-slate-800 focus:ring-4 focus:outline-none focus:ring-slate-300">
                            <svg class="w-3 h-3 fill-current opacity-50 shrink-0" viewBox="0 0 16 16">
                                <path
                                    d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z" />
                            </svg>
                            <span class="xs:block text-sm ml-2">Create Activity</span>
                        </a>
                    </div>
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
