<div>
    <div class="my-4">
        <button class="inline-block py-2 px-4 bg-indigo-300 rounded" wire:click.prevent="addField">Add new {{ $label }}</button>
    </div>
    @dump($list)
    @foreach($list as $k => $item)
        <div class="form-field">
            <label for="item-address-{{ $k }}">
                Choose {{ ucfirst($label) }} :
            </label>
            <div class="input">
                <input type="text" wire:model.lazy="list.{{$k}}.city" id="item-city-{{ $k }}">
            </div>
            <div class="input">
                <input type="text" wire:model.lazy="list.{{$k}}.country" id="item-country-{{ $k }}">
            </div>
            <div class="input">
                <input type="text" wire:model.lazy="list.{{$k}}.address" id="item-address-{{ $k }}">
            </div>
        </div>
    @endforeach
</div>
