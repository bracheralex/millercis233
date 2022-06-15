@section('title')
Livewire Playground
@endsection

<div>

<div>
  <button wire:onclick="increment">+</button>
  Count is: {{$count}}
    <button wire:onclick="decrement">-</button>

</div>

<br/>

<div>
    {{$message}}
    <br>
    <input wire:model="message" type="text" />
</div>

</div>
