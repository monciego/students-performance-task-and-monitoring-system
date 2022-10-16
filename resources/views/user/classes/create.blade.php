<form method="POST" action="{{ route('classes.store') }}">
    @csrf

    <x-text-input id="class_id" class="block mt-1 w-full" type="hidden" name="class_id" value="{{ $class->id }}"
        autofocus />
    <!-- Class Code -->
    <div>
        <x-input-label class="mb-2" for="class_code" :value="__('Class Code')" />

        <x-text-input id="class_code" class="block mt-1 w-full" type="text" name="class_code" :value="old('class_code')"
            autofocus autocomplete="off" />

        <x-input-error :messages="$errors->get('class_code')" class="mt-2" />
    </div>

    <div class="flex items-center justify-start mt-4">
        <x-primary-button>
            {{ __('Join Class') }}
        </x-primary-button>
    </div>
</form>
