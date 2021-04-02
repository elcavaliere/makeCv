<div>
    <div class="my-4">
        <button class="inline-block py-2 px-4 bg-indigo-300 rounded" wire:click.prevent="addField">Add new {{ $label }}</button>
    </div>
    @dump($list)
    @foreach($list as $k => $item)
        <div class="form-field">
            <label for="item-lang-{{ $k }}">
                Choose {{ ucfirst($label) }} :
            </label>
            <div class="input">
                <select wire:model.lazy="list.{{$k}}.media" id="item-media-{{ $k }}">
                    <option value="">Choose</option>
                    <option value="facebook">Facebook</option>
                    <option value="twitter">Twitter</option>
                    <option value="website">Website</option>
                    <option value="blog">Blog</option>
                </select>
            </div>
            <div class="input">
                <input type="text" wire:model.lazy="list.{{$k}}.link" id="item-link-{{ $k }}">
            </div>
        </div>
    @endforeach
</div>
