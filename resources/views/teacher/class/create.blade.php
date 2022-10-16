<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create class') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="{{ route('class.store') }}">
                        @csrf

                        <!-- Class Name -->
                        <div>
                            <x-input-label class="mb-2" for="class_name" :value="__('Class Name')" />

                            <x-text-input id="class_name" class="block mt-1 w-full" type="text" name="class_name"
                                :value="old('class_name')" autofocus />

                            <x-input-error :messages="$errors->get('class_name')" class="mt-2" />
                        </div>

                        <!-- Class Details -->
                        <div class="mt-4">
                            <x-input-label class="mb-2" for="class_details" :value="__('Class Details')" />

                            <textarea id="class_details" name="class_details"
                                class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">{{ old('class_details') }}</textarea>

                            <x-input-error :messages="$errors->get('class_details')" class="mt-2" />
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
