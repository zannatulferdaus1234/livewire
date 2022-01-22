<div>
    {{-- <h3>Student</h3> --}}
    Hello {{$name->name}} : {{now()}}
    {{-- <button wire:click="$refresh">refresh</button> --}}


    <button wire:click="emitrefreshMummy">refresh</button>  {{-- javascript style --}}

</div>
