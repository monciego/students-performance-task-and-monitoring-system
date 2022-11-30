<div x-data="{createOpen:false}" class="inline">
    <button x-on:click="createOpen = true"
        class="inline-flex items-center py-2 px-4 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
        <svg class="w-3 h-3 fill-current opacity-50 shrink-0" viewBox="0 0 16 16">
            <path
                d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z" />
        </svg>
        <span class="xs:block text-sm ml-2">Upload Answer</span>
    </button>
    <div x-show="createOpen" x-cloak x-on:click="createOpen = false"
        class="bg-black/40 z-[500] fixed top-0 bottom-0 right-0 left-0">
    </div>

    {{-- create modal --}}
    <div x-show="createOpen" x-cloak>
        <div class="absolute bg-slate-50 shadow-md rounded-md top-2/4 left-2/4 w-2/4 -translate-y-2/4 -translate-x-2/4"
            style="z-index: 501;">

            <header class="flex justify-between items-center  p-4 border rounded-md border-b-1 border-gray-200">
                <h2 class="font-medium">Upload Answer</h2>
                <svg x-on:click="createOpen = false" class="h-4 w-4 cursor-pointer" viewBox="0 0 16 16" fill="gray">
                    <path
                        d="M7.95 6.536l4.242-4.243a1 1 0 111.415 1.414L9.364 7.95l4.243 4.242a1 1 0 11-1.415 1.415L7.95 9.364l-4.243 4.243a1 1 0 01-1.414-1.415L6.536 7.95 2.293 3.707a1 1 0 011.414-1.414L7.95 6.536z">
                    </path>
                </svg>
            </header>
            <form class="p-4" method="POST" action="{{ route('upload-activity.store') }}" enctype="multipart/form-data">
                @csrf

                <x-text-input id="user_id" class="block mt-1 w-full" type="hidden" name="user_id"
                    value="{{ Auth::user()->id }}" autofocus />

                <x-text-input id="activity_id" class="block mt-1 w-full" type="hidden" name="activity_id"
                    value="{{ $activity->id }}" autofocus />

                <x-text-input id="subject_id" class="block mt-1 w-full" type="hidden" name="subject_id"
                    value="{{ $activity->subject->id }}" autofocus />

                <div>
                    <x-input-label class="mb-2" for="file" :value="__('Upload File')" />

                    <x-text-input id="file" class="block mt-1 w-full" type="file" name="file" :value="old('file')"
                        autofocus autocomplete="off" />

                    <x-input-error :messages="$errors->get('file')" class="mt-2" />
                </div>

                <!-- activity details -->
                <div class="mt-4">
                    <x-input-label class="mb-2" for="comment" :value="__('Comment (optional)')" />

                    <textarea id="comment" name="comment"
                        class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">{{ old('comment') }}</textarea>

                    <x-input-error :messages="$errors->get('comment')" class="mt-2" />
                </div>

                <div class="flex items-center justify-start mt-4">
                    <x-primary-button>
                        {{ __('Upload') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
</div>
