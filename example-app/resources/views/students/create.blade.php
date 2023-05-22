@extends('students.layout')
@section('content')
<div class="card">
  <div class="card-header">Students Page</div>
  <div class="card-body">
      
      <form action="{{ url('student') }}" method="post">
        {!! csrf_field() !!}
        <label>First Name</label></br>
        <input type="text" name="firstName" id="firstName" class="form-control"></br>
        <label>Last Name</label></br>
        <input type="text" name="lastName" id="lastName" class="form-control"></br>
        <label>Sex</label></br>
        <input type="text" name="sex" id="sex" class="form-control"></br>
        <label>Grade</label></br>
        <input type="text" name="grade" id="grade" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop