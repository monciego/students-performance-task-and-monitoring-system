<x-app-layout>
    @section('title', 'Create Category Activity')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1 class="text-lg font-medium mb-4">Create Category Question</h1>
                    <form method="POST" action="{{ route('category-question.store') }}" enctype="multipart/form-data">
                        @csrf

                        <x-text-input id="subject_id" class="block mt-1 w-full" type="hidden" name="subject_id"
                            value="{{ $subject->id }}" />
                        <!-- questions -->
                        <div class="mt-4">
                            <x-input-label class="mb-2" for="question_category" :value="__('Question Category')" />

                            <textarea id="question_category" name="question_category"
                                class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">{{ old('question_category') }}</textarea>

                            <x-input-error :messages="$errors->get('question_category')" class="mt-2" />
                        </div>


                        <div class="flex items-center justify-center mt-4">
                            <x-primary-button class="w-full flex items-center justify-center">
                                {{ __('Add Category') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


</x-app-layout>
