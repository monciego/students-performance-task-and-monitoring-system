<div class="col-span-6 sm:col-span-3 lg:col-span-2 w-full  bg-white rounded-lg border border-gray-200 shadow-md ">
    <div x-data="{open:false}" class="flex justify-end px-4 pt-4">
        <button x-on:click="open = !open" id="dropdownButton" data-dropdown-toggle="dropdown"
            class="z-[100] inline-block text-gray-500  hover:bg-gray-100  focus:ring-4 focus:outline-none focus:ring-gray-200  rounded-lg text-sm p-1.5"
            type="button">
            <span class="sr-only">Open dropdown</span>
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z">
                </path>
            </svg>
        </button>
        <div x-show="open" x-cloak x-on:click="open = false"
            class="bg-transparent z-[100] fixed top-0 bottom-0 right-0 left-0">
        </div>
        <!-- Dropdown menu -->
        <div id="dropdown" x-show="open" x-cloak
            class="z-[300] mt-8 absolute text-base list-none bg-white divide-y divide-gray-100 rounded shadow w-44 ">
            <ul class="py-1" aria-labelledby="dropdownButton">
                <li>
                    <a href="{{ route('class.edit', $class->id) }}"
                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Edit</a>
                </li>
                <li>
                    <form method="POST" action="{{ route('class.destroy', $class->id) }}" class="">
                        @csrf
                        @method('DELETE')
                        <button class="cursor-pointer inline-block w-full px-4 py-2 text-sm text-red-600
                            hover:bg-gray-100 text-left">Delete</button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
    <div class="flex flex-col items-center py-10">
        <div class="mb-3 w-32 rounded-md flex items-center justify-center h-24 shadow-lg bg-slate-700 text-white">
            {{ substr($class->class_name, 0, 1) }}
        </div>
        <h5 class="mb-1 text-xl font-medium text-gray-900 ">{{ $class->class_name }}</h5>
        <span class="text-sm text-gray-500">{{ $class->user->name }}</span>
        <div class="flex mt-4 space-x-3 md:mt-6">
            <a href="{{ route('class.show', $class) }}"
                class="inline-flex items-center py-2 px-4 text-sm font-medium text-center text-white bg-indigo-700 rounded-lg hover:bg-indigo-800 focus:ring-4 focus:outline-none focus:ring-indigo-300 ">
                View Class
            </a>
        </div>
    </div>
</div>
