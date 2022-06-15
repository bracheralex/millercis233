<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Playground extends Component
{
    public $count = 35;
    public $message = "";
    protected $queryString = ["message" => ['except' => '' ]];

    public function mount(){
        $this->message = request()->query('message', $this->message);
    }

public function increment() {
    $this->count++;
}

public function decrement() {
    $this->count--;
}

    public function render()
    {
        return view('livewire.playground');
    }
}
