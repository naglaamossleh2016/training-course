<div class="w-50 m-auto mt-5">
    <button wire:click.prefetch="clicked">Click Me</button>
    @if($name)
    <div class="alert alert-success">{{$name}}</div>
    @endif
</div>
