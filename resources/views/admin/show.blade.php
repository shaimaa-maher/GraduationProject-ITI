@extends('layouts.app')

@section('content')

<div class="container m-5 ">
    <div class="card bg-light m-5">
        <div class="card-header">
            <p class="font-weight-bold">{{$msg['first_name']}} {{$msg['last_name']}}</p>
            <p class="font-italic">{{$msg['email']}}</p>
        </div>
        
        <div class="card-body">
            <h5 class="card-title font-weight-bold">{{$msg['subject']}}</h5>
            <p class="card-text text-center">{{$msg['message']}}</p>
        </div>
        <a class="btn btn-outline-secondary" href="{{route('reply',['msg' => $msg['id'] ])}}">Reply to this email</a>

    </div>

</div>
<br>
<br>

@endsection