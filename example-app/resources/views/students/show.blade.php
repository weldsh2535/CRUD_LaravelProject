@extends('students.layout')
@section('content')
<div class="card">
  <div class="card-header">Students Page</div>
  <div class="card-body">

    <div class="card-body">
      <h5 class="card-title">First Name : {{ $students->firstName }}</h5>
      <p class="card-text">Last Name : {{ $students->lastName }}</p>
      <p class="card-text">Sex : {{ $students->sex }}</p>
      <p class="card-text">Grade : {{ $students->grade }}</p>
    </div>

    </hr>

  </div>
</div>