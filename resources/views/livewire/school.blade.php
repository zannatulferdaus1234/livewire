<div>
    <h2>School</h2>

    {{-- @foreach($names as $name)
        @livewire('student',['name' => $name])
    @endforeach --}}

    @foreach($names as $name)
    <div class="">
        @livewire('student',['name' => $name],key($name->name))

        <button wire:click="removeName('{{$name->name}}')">remove</button>
    </div>
    @endforeach

    <hr>
    <button wire:click="$refresh">refresh</button> : {{now()}}
    <button wire:click="refreshChildren">Refresh Children</button>

    {{-- only child refresh not parent
    <button wire:click="$emit('refreshChildren')">Refresh Children</button> --}}

</div>
