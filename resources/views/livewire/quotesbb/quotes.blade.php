<div class="container w-96 min-h-64 max-h-96 overflow-hidden m-2 p-2" wire:poll.{{$this->delay}}>
    <h1 class="text-2xl text-gray-100 leading-snug min-h-33">{{ $quotes }}</h1>

    <div class="block pt-2">
        <p class="font-serif font-bold text-xl">- {{ $sources }}</p>
    </div>
</div>