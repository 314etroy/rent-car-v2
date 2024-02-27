<button type="button" class="{{ $data['class'] ?? null }}" wire:click="emitDataToModal">
    {{ $data['slot'] ?? null }}
</button>
