<div class="mt-1 flex items-center">
    <span class="inline-block h-12 w-12 rounded-full overflow-hidden bg-gray-100">
        <img src="{{ auth()->user()->avatarUrl() }}" alt="Profile Photo">
    </span>

    <span class="ml-5 rounded-md shadow-sm"><input type="file" wire:model="avatars"></span>


    {{-- <button type="button"
        class="ml-5 bg-white py-2 px-3 border border-gray-300 rounded-md shadow-sm text-sm leading-4 font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
        Change
    </button> --}}
</div>
