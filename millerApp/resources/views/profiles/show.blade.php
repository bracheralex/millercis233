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
      <th>Handles:</th>
            <th></th>
    </tr>
  </thead>
  <tbody>
   
    <tr>
      <td>{{$profile->first_name}}</td>
      <td>{{$profile->last_name}}</td>
      <td>{{$profile->email}}</td>
      <td>{{$profile->phone_number}}</td>


  @foreach($profile->handles as $handle)
  <td>{{$handle->social_name}}:
      {{$handle->name}}</td>
     <td> {{$handle->email}} </td>
  @endforeach

   
    </tr>
  </tbody>
</table>
<!-- if count($profile->handles > 0) -->


<p>
<a href= "{{ route('profiles.index') }}">All Profiles</a>    
</p>

@endsection