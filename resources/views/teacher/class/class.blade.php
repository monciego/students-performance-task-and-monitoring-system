<div
    class="col-span-6 sm:col-span-3 lg:col-span-2 relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl  sm:my-8 sm:w-full sm:max-w-lg">
    <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
        <div class="sm:flex sm:items-start">
            <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                <h3 class="text-lg font-medium leading-6 text-gray-900" id="modal-title">
                    {{ $class->class_name }}
                </h3>
                @if ($class->class_details)
                <div class="mt-2">
                    <p class="text-sm text-gray-500">
                        {{ $class->class_details }}
                    </p>
                </div>
                @endif
            </div>
        </div>
    </div>
    <div class="bg-gray-50 px-4 py-3  sm:px-6">
        <a href=""
            class="mt-3 inline-flex w-full justify-center rounded-md border border-gray-300 bg-indigo-700  text-white px-4 py-2 text-base font-medium shadow-sm hover:bg-indigo-800 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
            View Class
        </a>
    </div>
</div>
