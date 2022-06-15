<?php

namespace App\Http\Livewire;


use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Profile;
use Illuminate\Pagination\Paginator;


class Profiles extends Component
{
    
   

        use WithPagination;
protected $paginationTheme = 'bootstrap';
    public $sortBy = 'first_name';
     public $direction = 'asc';
      public $search = '';
      public $per_page = 10;
      public $first_name, $last_name, $email, $phone_number;
       public $updateMode = false;
       public $selected_id;

        protected $queryString = [
            'search' => ['except' => '' ],
            'sortBy' => ['except' => '' ],
            'direction' => ['except' => '' ]
        
        ];
        
            public function mount(){
        $this->search = request()->query('search', $this->search);
        $this->sortBy = request()->query('sortBy', $this->sortBy);
        $this->direction = request()->query('direction', $this->direction);
    }

 private function resetInput()
 {
$this->first_name = null;
$this->last_name = null;
$this->email = null;
$this->phone = null;
 }

 public function store(){
    $this->validate([
        'first_name' => 'required|min:2',
         'last_name' => 'required|min:2',
         'email' => 'required',
        'phone_number' => 'required'
    ]);

     Profile::create([
    'first_name' => $this->first_name,
    'last_name' => $this->last_name,
    'email' => $this->email,
    'phone_number' =>$this->phone_number
     ]);
     $this->resetInput();
 }

   public function update()
   {
$this->validate([
     'first_name' => 'required|min:2',
         'last_name' => 'required|min:2',
         'email' => 'required',
        'phone_number' => 'required'
]);
if ($this->selected_id){
    $profile= Profile::find($this->selected_id);
    $profile->update([
        'first_name' => $this->first_name,
        'last_name' => $this->last_name,
        'email' => $this->email,
        'phone_number' => $this->phone_number
    ]);
    $this->resetInput();$this->updateMode = false;
}
   }


  public function edit($id)
   {
    $profiles = Profile::findOrFail($id);
    $this->selected_id=$id;
    $this->first_name = $profiles->first_name;
    $this->last_name = $profiles->last_name;
    $this->email = $profiles->email;
    $this->phone_number = $profiles->phone_number;

    $this->updateMode = true;

   }

   


    public function doSort($field, $direction) {
        $this->sortBy = $field;
        $this->direction = $direction;
        $this->resetPage();
    }

    public function destroy($id)
    {
        if($id) {
            $profiles = Profile::where('id', $id);
            $profiles->delete();
        }
    }

  


    public function render()
    {
      
      if(strlen($this->search) > 0) {
$this->resetPage();
}

            

        $profiles = \App\Models\Profile::where('first_name', 'like', "%$this->search%")
                                ->orWhere('last_name', 'like', "%$this->search%")
                                ->orderBy($this->sortBy, $this->direction);
                                // ->paginate(10);


                                
        return view('livewire.profiles', [ 'profiles'=> $profiles->paginate($this->per_page)]);

//'profiles' => Profile::take(10)->get()

          // return view('livewire.profiles', ['profiles' => $profiles->get(), 'profiles'=> $profiles->paginate(10)]);

        //   return view('livewire.profiles', [
        //     'profiles' => Profile::where('first_name', 'like', '%'.$this->search.'%')->paginate(10),
        // ]);   

       // ,'profiles' => Profile::paginate(10)

     //           return view('livewire.profiles', [
     //       'profiles' => Profile::where('first_name', 'like', '%'.$this->search.'%') ->orWhere('last_name', 'like', "%$this->search%")->orderBy($this->sortBy, $this->direction)->paginate(10),
     //   ]);
    }
} 

                                        