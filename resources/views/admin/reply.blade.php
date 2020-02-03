@extends('layouts.app')

@section('content')
<form action="/reply/{{$msg['id']}}" method="post" >
@csrf
<!-- <input type="text" value="Careery@careery.com" name="senderEmail"readonly> -->
<input type="email" value="{{$msg['email']}}" name="email" readonly>


<br>
<textarea rows="4" cols="50">

</textarea>
<br>
<button class="btn btn-outline-info" type="submit">Send Email</button>
</form>
@endsection
