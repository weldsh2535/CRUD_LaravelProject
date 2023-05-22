@extends('students.layout')
@section('content')
<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">
      
      <form action="{{ url('student/' .$students->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$students->id}}" id="id" />
        <label>First Name</label></br>
        <input type="text" name="firstName" id="firstName" value="{{$students->firstName}}" class="form-control"></br>
        <label>Last Name</label></br>
        <input type="text" name="lastName" id="lastName" value="{{$students->lastName}}" class="form-control"></br>
        <label>Sex</label></br>
        <input type="text" name="sex" id="sex" value="{{$students->sex}}" class="form-control"></br>
        <label>Grade</label></br>
        <input type="text" name="grade" id="grade" value="{{$students->grade}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop