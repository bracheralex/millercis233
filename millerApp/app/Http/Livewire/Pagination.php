<?php

namespace App\Http\Livewire;
use Livewire\Component;
use App\Models\Profile;

 
class Pagination extends Component
{
 
    public function render()
    {
        $profiles = Profile::latest()->paginate(10);
        return view('livewire.profiles',['profiles' => $profiles]);
    }
}
        return view('livewire.profiles');
