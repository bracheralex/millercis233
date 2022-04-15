@extends('profiles.layout')

@section('content')



<div class="column col-3">
<h3> Edit a profile</h3>
@if ($errors->any())
<div class ="toast toast-error">
    @foreach ($errors->all() as $error)
    <span> {{$errors}} </span> <br/>
  @endforeach
</div>
@endif
<form method="POST" action="{{route('profiles.update', $profile->id)}}">
@csrf
@method('PUT')
<div class="form-group">
@include('profiles.form')

</div>

<div class="form-group">
    <button type="submit" class ="btn btn-primary"> Update Profile </button>
    <a href ="{{route('profiles.index')}}">Cancel</a>
</div>
</form>
</div>

@endsection