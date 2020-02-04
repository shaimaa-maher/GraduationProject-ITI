@extends('layouts.app')

@section('content')
<br>
<fieldset class="message">
<legend>Message</legend>
    <div class="col-md-6 align-self-center">
    Name:<h3 class="section-title-sub text-primary">{{$msg['first_name']}}</h3>
    Email:  <span class="section-title-sub text-primary mb-3">{{$msg['email']}}</span>
        <hr class="message-hr">
       <p class="message-title">{{$msg['subject']}}</p>
        <p class="message">{{$msg['message']}}</p>
        <form action="">
            @csrf
        <a class="btn btn-outline-primary mt-3"  href="{{route('reply',['msg' => $msg['id'] ])}}" type="submit">Reply</a>
        </form>
    </div>
</fieldset>
<br>
<br>

@endsection