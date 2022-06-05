@extends ('profiles.layout')
@section ('content')

<h3>Show Profile Detail</h3>


<table class="table table-striped table-hover">

<!-- <p>{{$profile->first_name}}</p>
 <td>{{$profile->email}}</td> -->


 <thead>
    <tr>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Email</th>
      <th>Phone number</th>
     <th>Handles</th>
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

    <tr>
      <td>{{$profile->first_name}}</td>
      <td>{{$profile->last_name}}</td>
      <td>{{$profile->email}}</td>
      <td>{{$profile->phone_number}}</td>

 
  @foreach($profile->handles as $handle)
  <td>{{$handle->social_name}}:{{$handle->name}}</td>
 <td> {{$handle->email}} </td>
  @endforeach

  @if($profile->handles === 0 ){
   echo "No handles found"
  }
  @endif

  @foreach($profile->groups as $group)
  <td> {{$group->name}}</td>
  @endforeach

    </tr>
  </tbody>
</table>

<p>
<a href= "{{ route('profiles.index') }}">All Profiles</a>    
</p>

@endsection