<div>
{{-- wire:model.debounce.500ms  mean send the request after 500ms  --}}
    <h1>wire:model.debounce.500</h1>
    <span>send the request after 500ms</span>
    <hr>
    <input type="text" wire:model.debounce.500ms="name">
    <input type="checkbox" wire:model="loud">
    <select wire:model="gretting" multiple>
        <option>hello</option>
        <option>GoodBye</option>
    </select>
     {{implode(', ',$gretting)}} {{strtoupper($name)}} @if($loud) <i class="fa fa-check" style="color: green;"></i>  @else <i style="color: red;" class="fa fa-times"></i>  @endif
    <h1>wire:model.lazy</h1>
    <span>send the request after unfocus the input</span>
    <hr>
    <textarea wire:model.lazy="last" id="" cols="30" rows="10"></textarea>
    <hr>
    {{strtoupper($last)}}
</div>
