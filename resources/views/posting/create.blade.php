
@extends('posting.layout')
@section('content')

@if (Route::has('login'))
@auth
<div class="card">
  <div class="card-header">See some of the posts</div>
  <div class="card-body">
      
      <form action="{{ url('posting') }}" method="post" enctype="multipart/form-data">
        {!! csrf_field() !!}
        <label> Name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>Description</label></br>
        <input type="text" name="description" id="description" class="form-control"></br>
        <input class="form-control" name="photo" type="file" id="photo">

        
        <input type="submit" value="Save" class="btn btn-success">   </br>
    </form>
    
    @else 
  <div class="text-center"> <h1>Log in to add posts</h1> </div>

@endauth
@endif
  
  </div>
</div>
@stop



