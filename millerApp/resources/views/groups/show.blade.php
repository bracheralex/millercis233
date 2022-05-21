@extends ('profiles.layout')
@section ('content')

<h3>Show Group Detail</h3>


<table class="table table-striped table-hover">

 <thead>
    <tr>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Email</th>
      <th>Phone number</th>
      <th>Groups</th>
            <th></th>
    </tr>
  </thead>
  <tbody>
   
  @if ($errors->any())
<div class ="toast toast-error">
    @foreach ($errors->all() as $error)
    <span> {{$errors}} </span> <br />
  @endforeach
</div>
@endif
      
  @foreach($profiles as $profile)
  <td>{{$profile->first_name}}</td>
  <td>{{$profile->last_name}}</td>
 <td> {{$profile->email}} </td>
  <td> {{$profile->phone_number}} </td>
  @endforeach 

  @foreach($profile->groups as $group)
  <td> {{$group->name}}</td>
  @endforeach
               <!-- if count($profile->groups > 0){
  echo "No Groups found";
} -->


    </tr>
  </tbody>
</table>

<p>
<a href= "{{ route('profiles.index') }}">All Profiles</a>    
</p>

@endsection