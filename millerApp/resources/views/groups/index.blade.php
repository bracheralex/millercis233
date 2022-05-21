@extends ('profiles.layout')
@section('content')

<h3> Groups </h3>


{{ $groups->links() }}

<table class="table table-striped table-hover">

 <thead>
    <tr>
      <th>Group Name</th>
    </tr>
  </thead>
  <tbody>
      @foreach($groups as $group) 
    <tr>
      <td>{{$group->name}}</td>
           <td><a href="{{ route('groups.show', $group->id) }}">Show Detail</a></td>
    </tr>
  </tbody>
@endforeach
</table>

{{ $groups->links() }}
@endsection