@extends('layouts.app')

@section('content')
<br><br><br><br><br>
<div class="card ">
  <div class="card-header">
    Course Details
  </div>
  <div class="card-body">
    <h5 class="card-title"> name:-</h5>
    <span class="card-text"> {{$course['content_name']}}</span>
    <h5 class="card-title"> content:-</h5>
    <span class="card-text">{{$course['content_details']}}</span>
  </div>
</div>
<br><br><br><br>
@endsection
