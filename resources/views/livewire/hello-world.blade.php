<div>

    <!-- Data Binding -->
    <input wire:model="name" type="text">
    {{-- <input wire:model.debounce.1000ms="name" type="text"> --}}
    {{-- <input wire:model.lazy="name" type="text"> --}}

    <input wire:model="loud" type="checkbox">

    <select wire:model="greeting" multiple>
        <option>Hello</option>
        <option>GoodBye</option>
        <option>Adios</option>
    </select>

    What in the world is even happening . {{ implode(', ', $greeting) }} {{strtoupper($name)}} @if($loud) ! @endif

    <!-- Actions -->
    {{-- <button wire:click = "resetName('Daniel')">Reset Name</button> --}}
    {{-- <button wire:mouseenter = "resetName($event.target.innerText)">Reset Name</button> --}}

    {{-- wire:submit.prevent="resetName('Daniel')" ,or, wire:submit="resetName('Daniel')" --}}
    {{-- <form action="#" wire:submit="resetName('Daniel')"> --}}

    <form action="#" wire:submit="$set('name','Daniel')">
        <button >Reset Name</button>
    </form>

    <input wire:model="names" type="text">
    Hello {{$names}}
</div>
