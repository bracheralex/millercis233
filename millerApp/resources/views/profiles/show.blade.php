@extends ('profiles.layout')
@section ('content')

<h3>Show Profile Detail</h3>


<table class="table table-striped table-hover">

<p>{{$profile->first_name}}</p>

Handles:
<ul>
  @foreach ($profile->handles as $handle)
  <li>{{$handle->social_name}} - {{$handle->name}}</li>
  @endforeach
</ul>

 <!-- <thead>
    <tr>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Email</th>
      <th>Phone number</th>
            <th></th>
    </tr>
  </thead>
  <tbody>
   
    <tr>
      <td>{{$profile->first_name}}</td>
      <td>{{$profile->last_name}}</td>
      <td>{{$profile->email}}</td>
      <td>{{$profile->phone_number}}</td>
   
    </tr>
  </tbody>
</table> -->

<p>
<a href= "{{ route('profiles.index') }}">All Profiles</a>    
</p>

@endsection