<div>
{{-- wire:model.debounce.500ms  mean send the request after 500ms  --}}
{{--    <h1>wire:model.debounce.500</h1>--}}
{{--    <span>send the request after 500ms</span>--}}
{{--    <hr>--}}
{{--    <input type="text" wire:model.debounce.500ms="name">--}}
{{--    <input type="checkbox" wire:model="loud">--}}
{{--    <select wire:model="gretting" multiple>--}}
{{--        <option>hello</option>--}}
{{--        <option>GoodBye</option>--}}
{{--    </select>--}}
{{--     {{implode(', ',$gretting)}} {{$name}} @if($loud) <i class="fa fa-check" style="color: green;"></i>  @else <i style="color: red;" class="fa fa-times"></i>  @endif--}}
{{--   --}}{{--   $event.target.innerText it mean change the name into button name  --}}
{{--  for wire:submit must add submit.prevent to work --}}
{{--    <form action="#" wire:submit.prevent="resetName('bingo')">--}}
{{--        <button >reset name</button>--}}
{{--    </form>--}}
{{--    we can $set name without method --}}
{{--    <form action="#" wire:submit.prevent="$set('name','IBRA')">--}}
{{--        <button >reset name</button>--}}
{{--    </form>--}}

{{--    @foreach($contacts as $contact)--}}

{{--        --}}
{{--        <button wire:click="remove('{{$contact->name}}')">remove</button>--}}
{{--    @endforeach--}}
     @foreach($contacts as $contact)
        <div>
            @livewire('say-hi', ['contact'=>$contact] ,key($contact->name))
            <button wire:click="remove('{{$contact->name}}')">remove</button>
        </div>
       @endforeach
</div>
