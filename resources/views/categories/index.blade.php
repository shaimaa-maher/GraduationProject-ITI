@extends('layouts.app')

@section('content')
<h1 class="text-center mb-4 mt-5">Categories</h1>
    
<table class="table table-dark w-75 " style="margin-left:150px;">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">category name</th>
      <th scope="col">created at</th>
      <th scope="col">updated at</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
  @foreach($categories as $index => $value) 
    <tr>
      <th scope="row">{{$value['id']}}</th>
      <td> {{$value['category_name']}}</td>
      <td>{{$value['created_at']}}</td>
      <td>{{$value['updated_at']}}</td>
      <td><a href="{{route('contents.index',['cat_id' => $value['id'] ])}}" class="btn btn-info" >View contents</a></td>
    </tr>
   
    @endforeach
  </tbody>
</table> 
   
@endsection