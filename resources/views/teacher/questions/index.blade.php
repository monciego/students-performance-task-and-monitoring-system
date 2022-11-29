<x-app-layout>
    @section('title', 'Create Activity')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1 class="text-lg font-medium mb-4">Create Question</h1>
                    <form method="POST" action="{{ route('create-question.store') }}" enctype="multipart/form-data">
                        @csrf
                        <!-- select option -->
                        <div class="mt-4">
                            <x-input-label class="mb-2" for="activity_details" :value="__('Question')" />
                            <select
                                class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                                name="category_question_id" id="category_question_id">
                                @foreach ($category_question as $category_item)
                                <option value="{{ $category_item->id }}">{{ $category_item->question_category }}
                                </option>
                                @endforeach
                            </select>


                            <x-input-error :messages="$errors->get('question')" class="mt-2" />
                        </div>
                        <!-- questions -->
                        <div class="mt-4">
                            <x-input-label class="mb-2" for="question" :value="__('Question')" />

                            <textarea id="question" name="question"
                                class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">{{ old('question') }}</textarea>

                            <x-input-error :messages="$errors->get('question')" class="mt-2" />
                        </div>


                        <div class="flex items-center justify-center mt-4">
                            <x-primary-button class="w-full flex items-center justify-center">
                                {{ __('Create Question') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


</x-app-layout>
