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
                <select wire:model.lazy="list.{{$k}}.language" id="item-lang-{{ $k }}">
                    <option value="">Choose</option>
                    <option value="french">French</option>
                    <option value="english">English</option>
                </select>
            </div>
            <div class="input">
                <select wire:model.lazy="list.{{$k}}.level" id="item-level-{{ $k }}">
                    <option value="">Choose</option>
                    <option value="native">Native</option>
                    <option value="fluent">Fluent</option>
                    <option value="intermediaire">Intermediaire</option>
                    <option value="beginner">Beginner</option>
                </select>
            </div>
        </div>
    @endforeach
</div>
