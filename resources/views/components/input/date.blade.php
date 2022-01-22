<div
    x-data
    x-init="new Pikaday({ field: $refs.input,format:'MM/DD/YYYY' })"
     class="mt-1 flex rounded-md shadow-sm">

    <span
        class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 " viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd"
                d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                clip-rule="evenodd" />
        </svg>
    </span>

    {{-- @dd($attributes) --}}

    <input {{ $attributes }}
        x-ref="input"
        class="rounded-none rounded-r-md focus:ring-2 focus:ring-blue-600 flex-1 block w-full sm:text-sm border-gray-300">

</div>


@push('styles')
{{-- pikaday --}}
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/pikaday/css/pikaday.css">

@endpush


@push('scripts')
{{-- pikaday --}}
<script src="https://unpkg.com/moment"></script>

<script src="https://cdn.jsdelivr.net/npm/pikaday/pikaday.js"></script>

@endpush
