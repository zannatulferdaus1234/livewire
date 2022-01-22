@props([
    'initialValue'=>'',
])
<div
    class="mt-1"
    wire:ignore
    {{ $attributes }}
    x-data
    @trix-blur="$dispatch('change',$event.target.value)"
>



    <input id="x" value="{{ $initialValue }}" type="hidden">
    <trix-editor input="x" id="about" class="form-textarea block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5 shadow-sm focus:ring-2 focus:ring-blue-600  mt-1  border border-gray-300 rounded-md"></trix-editor>
</div>
