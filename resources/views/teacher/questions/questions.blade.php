<x-app-layout>
    @section('title', 'Questions')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1 class="text-lg font-medium mb-4">Questions</h1>

                    @foreach ($questions as $question)
                    {{ $question->question }}
                    @endforeach
                </div>
            </div>
        </div>
    </div>


</x-app-layout>
