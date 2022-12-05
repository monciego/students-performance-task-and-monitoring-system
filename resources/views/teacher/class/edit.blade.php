<x-app-layout>
    @section('title', 'Edit Class')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1 class="mb-4 font-bold text-lg">Edit Class</h1>
                    <form method="POST" action="{{ route('class.update', $class->id) }}">
                        @csrf
                        @method('PUT')
                        <!-- Class Name -->
                        <div>
                            <x-input-label class="mb-2" for="class_name" :value="__('Class Name')" />

                            <x-text-input id="class_name" class="block mt-1 w-full" type="text" name="class_name"
                                value="{{ $class->class_name }}" autofocus />

                            <x-input-error :messages="$errors->get('class_name')" class="mt-2" />
                        </div>

                        <!-- Class Details -->
                        <div class="mt-4">
                            <x-input-label class="mb-2" for="class_details" :value="__('Class Details')" />

                            <textarea id="class_details" name="class_details"
                                class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">{!! $class->class_details !!}</textarea>

                            <x-input-error :messages="$errors->get('class_details')" class="mt-2" />
                        </div>


                        <div class="flex items-center justify-start mt-4">
                            <x-primary-button>
                                {{ __('Update Class') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
