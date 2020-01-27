@extends('layouts.app')

@section('content')

<br><br><br><br><br>
<h1 class="text-center mb-4">Front End contents</h1>
    
<table class="table table-dark w-75 " style="margin-left:150px;">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">course-name</th>
      <th scope="col">created at</th>
      <th scope="col">updated at</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
  @foreach($contents as  $value) 
    <tr>
      <th scope="row">{{$value['id']}}</th>
      <td> {{$value->content_name}}</td>
      <td>{{$value['created_at']}}</td>
      <td>{{$value['updated_at']}}</td>
      <td><a href="{{route('contents.view',['content' => $value->id ])}}" class="btn btn-info" >View</a></td>
    </tr>
   
    @endforeach
  </tbody>
</table> 
   
<br><br><br>
@endsection