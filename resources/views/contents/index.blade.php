@extends('layouts.app')

@section('content')

<br><br><br><br><br>
<h1 class="text-center mb-4">{{$categories->category_name}} contents</h1>
<div class="row no-gutters ">
  @foreach($contents as $value)
  <div class="card m-4" style="max-width: 400px;">

    <div class="row no-gutters">

      <div class="col-md-4">
        <!-- <img src="/images/sq_img_6.jpg" class="card-img " alt="photo"> -->
        <img src="{{URL::to('/')}}/images/{{$value->image}}" class="img-fluid">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title text-primary">{{$value->content_name}}</h5>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
          <a href="{{route('contents.view',['content' => $value->id ])}}" class="btn btn-outline-primary btn-lg">View</a>
        </div>
      </div>
    </div>
  </div>
  @endforeach
</div>
<br><br><br>
@endsection