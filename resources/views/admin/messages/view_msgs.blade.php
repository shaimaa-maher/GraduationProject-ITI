@extends('layouts.app')

@section('content')
@if(session()->has('replyMsg'))
    <div class="alert alert-success">
        {{ session()->get('replyMsg') }}
    </div>
    @endif
<div class="container m-5 text-center">
    <div class="table-responsive m-5">
        <table class="table table-hover mb-5">
           
            <thead class="thead-dark">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col"> Name</th>
                    <th scope="col">Subject</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach($msgs as $index => $msg)

                <tr>
                    <th scope="row">{{$msg['id']}}</th>
                    <td>{{$msg['first_name']}}</td>
                    <td>{{$msg['subject']}}</td>
                    
                    <td><a class="btn btn-outline-secondary" href="{{route('msgs.show',['msg' => $msg['id'] ])}}">View</a></td>
                </tr>
                @endforeach

            </tbody>
        </table>
        
    </div>
</div>
{{ $msgs->links() }}
<br><br>
@endsection