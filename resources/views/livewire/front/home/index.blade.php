<div>
@php
$color = 'yellow';
@endphp
    <x-fb.button type="button" :color="$color" wire:click="test">Test</x-fb.button>
    <x-fb.alert type="success" dismissible>
1444
    </x-fb.alert>
</div>
