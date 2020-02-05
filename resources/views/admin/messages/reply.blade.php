@extends('layouts.app')

@section('content')


<form action="/reply/{{$msg['id']}}" method="post">
    @csrf
    @if(session()->has('replyMsg'))
    <div class="alert alert-success">
        {{ session()->get('replyMsg') }}
    </div>
    @endif
    <input type="email" value="{{$msg['email']}}" name="email" readonly hidden>
    <br>
    <textarea rows="4" cols="50" type="text" name="replymsg" class="m-5 "></textarea>
    <br>
    <button class="btn btn-outline-info m-5" type="submit">Send Reply</button>
</form> 
@endsection