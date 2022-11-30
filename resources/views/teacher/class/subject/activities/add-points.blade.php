<div x-data="{createOpen:false}" class="inline">
    <button x-on:click="createOpen = true">
        <span class="text-indigo-700 xs:block text-sm ml-2">Add Score</span>
    </button>
    <div x-show="createOpen" x-cloak x-on:click="createOpen = false"
        class="bg-black/40 z-[500] fixed top-0 bottom-0 right-0 left-0">
    </div>

    {{-- create modal --}}
    <div x-show="createOpen" x-cloak>
        <div class="absolute bg-slate-50 shadow-md rounded-md top-2/4 left-2/4 w-2/4 -translate-y-2/4 -translate-x-2/4"
            style="z-index: 501;">

            <header class="flex justify-between items-center  p-4 border rounded-md border-b-1 border-gray-200">
                <h2 class="font-medium">Add Score</h2>
                <svg x-on:click="createOpen = false" class="h-4 w-4 cursor-pointer" viewBox="0 0 16 16" fill="gray">
                    <path
                        d="M7.95 6.536l4.242-4.243a1 1 0 111.415 1.414L9.364 7.95l4.243 4.242a1 1 0 11-1.415 1.415L7.95 9.364l-4.243 4.243a1 1 0 01-1.414-1.415L6.536 7.95 2.293 3.707a1 1 0 011.414-1.414L7.95 6.536z">
                    </path>
                </svg>
            </header>
            <form class="p-4" method="POST" action="{{ route('add.score') }}">
                @csrf
                <div>



                    <x-text-input id="activity_id" class="block mt-1 w-full" type="hidden" name="activity_id"
                        value="{{ $activity->id }}" autofocus />

                    <x-text-input id="subject_id" class="block mt-1 w-full" type="hidden" name="subject_id"
                        value="{{ $activity->subject->id }}" autofocus />

                    <x-input-label class="mb-2" for="class_code" :value="__('Score')" />

                    <x-text-input id="score" class="block mt-1 w-full" type="text" name="score" :value="old('score')"
                        autofocus autocomplete="off" />

                    <x-input-error :messages="$errors->get('score')" class="mt-2" />
                </div>

                <div class="flex items-center justify-start mt-4">
                    <x-primary-button>
                        {{ __('Add Score') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
</div>

{{-- <form method="POST" action="{{ route('classes.store') }}">
    @csrf

    <x-text-input id="class_id" class="block mt-1 w-full" type="hidden" name="class_id" value="{{ $class->id }}"
        autofocus />

    <div>
        <x-input-label class="mb-2" for="class_code" :value="__('Class Code')" />

        <x-text-input id="class_code" class="block mt-1 w-full" type="text" name="class_code" :value="old('class_code')"
            autofocus autocomplete="off" />

        <x-input-error :messages="$errors->get('class_code')" class="mt-2" />
    </div>

    <div class="flex items-center justify-start mt-4">
        <x-primary-button>
            {{ __('Join Class') }}
        </x-primary-button>
    </div>
</form>
--}}
