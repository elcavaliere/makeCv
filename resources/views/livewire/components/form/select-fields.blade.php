<div>
    <div class="my-4">
        <button class="inline-block py-2 px-4 bg-indigo-300 rounded" wire:click.prevent="addField">Add link</button>
    </div>
    @dump($list)
    @foreach($list as $k => $item)
        <div class="form-field">
            <label for="item-{{ $k }}">
                {{ ucfirst($label) }}'s name :
            </label>
            <div class="input">
                <input type="text" wire:model.lazy="list.{{$k}}" id="item-{{ $k }}">
            </div>
        </div>
    @endforeach
</div>
