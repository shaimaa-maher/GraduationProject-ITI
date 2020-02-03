@extends('layouts.app')

@section('content')
<div class="container m-5 text-center">
    <div class="table-responsive m-5">
        <table class="table table-hover mb-5">
           
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">First Name</th>
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
@endsection