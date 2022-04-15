@extends ('profiles.layout')
@section('content')

<h3> Profiles </h3>
<a class="btn btn-primary" href="{{route('profiles.create')}}">Create </a>

{{ $profiles->links() }}

<table class="table table-striped table-hover">

 <thead>
    <tr>
      <th>First name</th>
      <th>Last name</th>
      <th>Email</th>
       
        <th>Phone Number</th>
            <th></th>
            <th></th>

    </tr>
  </thead>
  <tbody>
      @foreach($profiles as $profile) 
    <tr>
      <td>{{$profile->first_name}}</td>
      <td>{{$profile->last_name}}</td>
      <td>{{$profile->email}}</td>
          <td>{{$profile->phone_number}}</td>
            <td>{{$profile->updated_at}}</td>
              <td>{{$profile->created_at}}</td>
           <td><a href="{{ route('profiles.show', $profile->id) }}">Show Detail</a></td>
            <td><a href="{{ route('profiles.edit', $profile->id) }}">Edit</a></td>

           <td>
             <form action="{{route('profiles.destroy', $profile->id)}}" method="POST" onSubmit="return confirm('Are you sure you want to delete?');">
               @csrf
               @method('DELETE')
               <button class ="btn btn-error" type="submit">Delete</button>
             </form>
           </td>
    </tr>
  </tbody>
@endforeach
</table>

{{ $profiles->links() }}
@endsection
