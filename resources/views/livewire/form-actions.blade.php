<div>
    <input wire:model="name" placeholder="name">
    <hr>
    {{strtoupper($name)}}
    <hr>
   <span>Change name by using function and button without form</span>
    <button wire:click="changeName">Change Name</button>
    <hr>

    <span>Change name by using button name without form</span>
    <button wire:click="changeName($event.target.innerText)">Your Job</button>
    <hr>
    <span>Change name by using button name without form pass data with function</span>
    <button wire:click="changeName('BONGI')">Change Name</button>
    <hr>
    <span>Change name by using button Set Data</span>
    <button wire:click="$set('name','FADI')">Change Name</button>
    <hr>
    <span>Change name by using button and form</span>
    <form action="#" wire:submit.prevent="changeName">
        <button>Change Name</button>
    </form>

</div>
