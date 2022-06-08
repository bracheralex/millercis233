@extends('dashboard')

@section('content')



<div class="column col-3">
<h3> Make a Profile</h3>
@if ($errors->any())
<div class ="toast toast-error">
    @foreach ($errors->all() as $error)
    <span> {{$errors}} </span> <br />
  @endforeach
</div>
@endif
<form method="POST" action="{{route('profiles.store')}}">
@csrf
<div class="form-group">
@include('profiles.form')

</div>

<div class="form-group">
    <button type="submit" class ="btn btn-primary"> Store Profile </button>
    <a href ="{{route('profiles.index')}}">Cancel</a>
</div>
</form>
</div>

@endsection