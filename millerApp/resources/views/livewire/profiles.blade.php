@section('title')
Profiles
@endsection


 

<div>
 
    <div class="table-responsive">
        <table class="table table-bordered">
    Hello from Livewire Profiles
    <input wire:model="search" type="text" placeholder="Search Profiles" size="50" />

    <table class="table table-striped table-hover">


    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <a href="#" class="close" data-dismiss="alert">&times;</a>
            <strong>Sorry!</strong> invalid input.<br><br>
            <ul style="list-style-type:none;">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


     @if($updateMode)
        @include('livewire.update')
    @else
        @include('livewire.create')
    @endif


 <thead>

    <tr>
      <th>
      <a href="#" wire:click="doSort('first_name', 'asc')">&uarr;</a>  
       First Name
      <a href="#" wire:click="doSort('first_name', 'desc')">&darr;</a>  
    </th>

      <th>
        <a href="#" wire:click="doSort('last_name', 'asc')">&uarr;</a>  
           Last Name
        <a href="#" wire:click="doSort('last_name', 'desc')">&darr;</a> 
        </th>

      <th>
        <a href="#" wire:click="doSort('email', 'asc')">&uarr;</a>  
          Email
        <a href="#" wire:click="doSort('email', 'desc')">&darr;</a> 
        </th>

      <th>
    <a href="#" wire:click="doSort('phone_number', 'asc')">&uarr;</a>      
          Phone Number
    <a href="#" wire:click="doSort('phone_number', 'desc')">&darr;</a> 
    </th>
            

    </tr>
  </thead>
   
  <tbody>
      @foreach($profiles as $profile) 


    <tr>
      <td>{{$profile->first_name}}</td>
      <td>{{$profile->last_name}}</td>
      <td>{{$profile->email}}</td>
      <td>{{$profile->phone_number}}</td> 

      <td class="border px-4 py-2"><button type="button" wire:click="edit({{ $profile->id }})" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal">Edit</button></td>
      <td class="border px-4 py-2"><button type="button" wire:click="destroy({{ $profile->id }})" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">Delete</button></td>

    </tr>
    @endforeach

    {{ $profiles->links() }}          
            <select wire:model="per_page">
    <option value="10">10</option>
    <option value="15">15</option>
    <option value="20">20</option>
    <option value="50">50</option>
</select>
  </tbody>
</table>

</div>
         <select wire:model="per_page">
    <option value="10">10</option>
    <option value="15">15</option>
    <option value="20">20</option>
    <option value="50">50</option>
</select>
 {{ $profiles->links() }}











</div>
