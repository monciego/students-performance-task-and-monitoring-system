<div class="bg-gradient-to-r from-cyan-500 to-blue-500 h-screen overflow-hidden flex items-center justify-center">
    <div class="bg-white relative py-14 px-6 md:p-16 lg:w-5/12 rounded-md md:6/12 w-10/12 shadow-lg">
        <div class="bg-gray-800 absolute top-0 left-1/2 transform -translate-x-1/2 -translate-y-1/2 rounded-full ">
            {{ $logo }}
        </div>
        {{ $slot }}
    </div>
</div>
