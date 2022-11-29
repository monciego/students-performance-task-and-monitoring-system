<x-app-layout>
    @section('title', 'Upload Activity')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1 class="text-lg font-medium mb-4">Create Activity</h1>
                    <form method="POST" action="{{ route('activity.store')  }}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                        <input type="hidden" name="subject_id" value="{{ $subject->id }}">

                        <!-- activity instruction -->
                        <div>
                            <x-input-label class="mb-2" for="activity_instruction"
                                :value="__('Activity Instruction')" />

                            <textarea id="activity_instruction" name="activity_instruction"
                                class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">{{ old('activity_instruction') }}</textarea>

                            <xs-input-error :messages="$errors->get('activity_instruction')" class="mt-2" />
                        </div>

                        <!-- Activity Name -->
                        <div class="mt-4">
                            <x-input-label for="activity_name" :value="__('Activity Name')" />

                            <x-text-input id="activity_name" class="block mt-1 w-full" type="text" name="activity_name"
                                :value="old('activity_name')" required autofocus />

                            <x-input-error :messages="$errors->get('activity_name')" class="mt-2" />
                        </div>

                        {{-- activity file --}}
                        <div class="mt-4">
                            <x-input-label for="activity_file" :value="__('Upload File')" />

                            <x-text-input id="activity_file" class="block mt-1 w-full" type="file" name="activity_file"
                                :value="old('activity_file')" required autofocus />

                            <x-input-error :messages="$errors->get('activity_file')" class="mt-2" />
                        </div>

                        {{-- activity points --}}
                        <div class="mt-4">
                            <x-input-label for="points" :value="__('Points')" />

                            <x-text-input id="points" class="block mt-1 w-full" type="text" name="points"
                                :value="old('points')" required autofocus />

                            <x-input-error :messages="$errors->get('points')" class="mt-2" />
                        </div>

                        {{-- due date --}}
                        <div class="mt-4">
                            <x-input-label for="due_date" :value="__('Due Date')" />

                            <x-text-input id="due_date" class="block mt-1 w-full" type="date" name="due_date"
                                :value="old('due_date')" required autofocus />

                            <x-input-error :messages="$errors->get('due_date')" class="mt-2" />
                        </div>

                        <!-- activity details -->
                        <div class="mt-4">
                            <x-input-label class="mb-2" for="activity_details" :value="__('Activity Details')" />

                            <textarea id="activity_details" name="activity_details"
                                class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">{{ old('activity_details') }}</textarea>

                            <x-input-error :messages="$errors->get('activity_details')" class="mt-2" />
                        </div>


                        <div class="flex items-center justify-center mt-4">
                            <x-primary-button class="w-full flex items-center justify-center">
                                {{ __('Uplaod Activity') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


</x-app-layout>
