@props([
    'label',
    'for',
    'error' => false,
    'helpText' => false
])


    <label
        for="{{ $for }}"
        class="block text-md  font-bold text-gray-700">

        {{ $label }}

    </label>

    {{ $slot }}



    @if($error) <div class="text-red-500 pt-3">{{ $error }}</div> @endif


    @if($helpText) <p class="mt-2 text-sm text-gray-500">{{ $helpText }}</p> @endif



<hr class="mt-7">
