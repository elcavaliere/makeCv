<div>
    <div class="my-4">
        <button class="inline-block py-2 px-4 bg-indigo-300 rounded" wire:click.prevent="addField">Add new {{ $label }}</button>
    </div>
    @dump($list)
    @foreach($list as $k => $item)
        <div class="form-field">
            <label for="item-educ-{{ $k }}">
                Choose {{ ucfirst($label) }} :
            </label>
            <div class="input">
                <input type="text" wire:model.lazy="list.{{$k}}.from" id="item-from-{{ $k }}" placeholder="From">
            </div>
            <div class="input">
                <input type="text" wire:model.lazy="list.{{$k}}.to" id="item-to-{{ $k }}" placeholder="To">
            </div>
            <div class="input">
                <input type="text" wire:model.lazy="list.{{$k}}.degree" id="item-degree-{{ $k }}" placeholder="Degree">
            </div>
            <div class="input">
                <input type="text" wire:model.lazy="list.{{$k}}.speciality" id="item-speciality-{{ $k }}" placeholder="Speciality">
            </div>
            <div class="input">
                <input type="text" wire:model.lazy="list.{{$k}}.establishment" id="item-establishment-{{ $k }}" placeholder="Establishment">
            </div>
        </div>
    @endforeach

</div>
