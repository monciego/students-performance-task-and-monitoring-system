<x-app-layout>
    @section('title', 'Create Subject')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1 class="mb-4 text-lg font-medium">Create Subject</h1>
                    <form method="POST" action="{{ route('subject.store') }}">
                        @csrf
                        <!-- Class Name -->
                        <x-text-input id="class_id" class="block mt-1 w-full" type="hidden" name="class_id" value="{{
                            $class->id }}" />
                        <div>
                            <x-input-label class="mb-2" for="subject_name" :value="__('Subject Name')" />

                            <x-text-input id="subject_name" class="block mt-1 w-full" type="text" name="subject_name"
                                :value="old('subject_name')" autofocus />

                            <x-input-error :messages="$errors->get('subject_name')" class="mt-2" />
                        </div>

                        <!-- Class Details -->
                        <div class="mt-4">
                            <x-input-label class="mb-2" for="subject_details" :value="__('Subject Details')" />

                            <textarea id="subject_details" name="subject_details"
                                class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">{{ old('subject_details') }}</textarea>

                            <x-input-error :messages="$errors->get('subject_details')" class="mt-2" />
                        </div>


                        <div class="flex items-center justify-start mt-4">
                            <x-primary-button>
                                {{ __('Add Class') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
